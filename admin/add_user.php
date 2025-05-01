<?php
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profileImage = $_FILES['profile_image'] ?? null;
    $error = '';

    // Check if email already exists
    $query = $con->prepare("SELECT id FROM users WHERE email = ?");
    $query->bind_param('s', $email);
    $query->execute();
    $query->store_result();

    if ($query->num_rows > 0) {
        echo "Email is already taken";
    } else {
        $imageName = '';

        // Check for image upload
        if ($profileImage && $profileImage['error'] === 0) {
            $targetDir = "../uploads/";

            // Ensure upload directory exists
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0777, true);
            }

            // Generate unique name to avoid overwriting
            $imageName = uniqid() . "_" . basename($profileImage['name']);
            $targetFilePath = $targetDir . $imageName;
            $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

            // Validate image type
            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($imageFileType, $allowedTypes)) {
                $error = "Invalid image type!";
            } elseif (!move_uploaded_file($profileImage['tmp_name'], $targetFilePath)) {
                $error = "Failed to upload image!";
            }
        }

        // Proceed if no errors
        if (empty($error)) {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $insert = $con->prepare("INSERT INTO users (name, email, password, profile) VALUES (?, ?, ?, ?)");
            $insert->bind_param("ssss", $name, $email, $hashed_password, $imageName);

            if ($insert->execute()) {
                echo "Sign-up successful! You can now <a href='login.php'>Sign in</a>.";
            } else {
                echo "An error occurred. Please try again.";
            }

            $insert->close();
        } else {
            echo $error; // Show error message if image upload fails
        }
    }

    $query->close();
    $con->close();

    // Redirect after completion
    header("Location: users.php");
    exit();
}
?>
