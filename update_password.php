<?php
require '../config.php';
session_start(); // Ensure session is active

$email = $_SESSION['email'];
$error = "";

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $oldPassword = trim($_POST['old-password']);
    $newPassword = trim($_POST['new-password']);
    $confirmPassword = trim($_POST['confirm-password']);

    // ✅ Step 1: Validate Inputs
    if (empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
        $error = "All fields are required!";
    } elseif ($newPassword !== $confirmPassword) {
        $error = "New password and confirm password do not match!";
    }

    // ✅ Step 2: Verify Old Password
    if (empty($error)) {
        $stmt = $con->prepare("SELECT password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();
        $stmt->close();

        // Verify old password
        if (!password_verify($oldPassword, $hashedPassword)) {
            $error = "Incorrect old password!";
        }
    }

    // ✅ Step 3: Update Password if Old Password is Correct
    if (empty($error)) {
        $newHashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

        $updateStmt = $con->prepare("UPDATE users SET password = ? WHERE email = ?");
        $updateStmt->bind_param("ss", $newHashedPassword, $email);

        if ($updateStmt->execute()) {
            echo "<script>alert('Password updated successfully!'); window.location.href='change-password.php';</script>";
        } else {
            echo "<script>alert('Error updating password. Please try again.'); window.location.href='change-password.php';</script>";
        }

        $updateStmt->close();
    } else {
        echo "<script>alert('$error'); window.location.href='change-password.php';</script>";
    }

    $con->close();
}
?>
