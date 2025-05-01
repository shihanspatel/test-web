<?php
require '../config.php';
session_start(); // Ensure session is started

$email = $_SESSION['email'];
$error = "";

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $uploadedFile = $_FILES['file_input'];
    $profileImage = '';

    // ✅ Optional Image Upload
    if ($uploadedFile['error'] === UPLOAD_ERR_OK) {
        $targetDir = "../uploads/";
        $fileName = basename($uploadedFile['name']);
        $targetFilePath = $targetDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        // Validate file type
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($fileType, $allowedTypes)) {
            // Move uploaded file
            if (move_uploaded_file($uploadedFile['tmp_name'], $targetFilePath)) {
                $profileImage = $fileName;
            } else {
                $error = "Failed to upload image.";
            }
        } else {
            $error = "Invalid image format. Allowed types: jpg, jpeg, png, gif.";
        }
    }

    // ✅ Proceed if no validation errors
    if (empty($error)) {
        // Update profile with or without image
        if ($profileImage) {
            $stmt = $con->prepare("UPDATE users SET name = ?, profile = ? WHERE email = ?");
            $stmt->bind_param("sss", $name, $profileImage, $email);
        } else {
            $stmt = $con->prepare("UPDATE users SET name = ? WHERE email = ?");
            $stmt->bind_param("ss", $name, $email);
        }

        if ($stmt->execute()) {
            echo "<script>alert('Profile updated successfully!'); window.location.href='edit-profile.php';</script>";
        } else {
            echo "<script>alert('Error updating profile. Please try again.'); window.location.href='edit_profile.php';</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('$error'); window.location.href='edit_profile.php';</script>";
    }

    $con->close();
}
?>
