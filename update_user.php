<?php
require_once '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $name = trim($_POST['name']) ?? '';
    $status = $_POST['status'] ?? 'inactive';
    $profileImage = $_FILES['file_input'] ?? null;


    $imageName = '';
    $updateImageQuery = '';

    // Check if a new image is uploaded
    if ($profileImage && $profileImage['error'] === 0) {
        $targetDir = "../uploads/";
        $imageName = basename($profileImage['name']);
        $targetFilePath = $targetDir . $imageName;
        $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageFileType, $allowedTypes)) {
            echo "Invalid file type!";
            exit;
        }

        if (!move_uploaded_file($profileImage['tmp_name'], $targetFilePath)) {
            echo "Failed to upload image!";
            exit;
        }
        $updateImageQuery = ", profile = ?";
    }

    try {
        $sql = "UPDATE users SET name = ?, status = ?{$updateImageQuery} WHERE id = ?";
        $stmt = $con->prepare($sql);

        if ($updateImageQuery) {
            $stmt->bind_param("sssi", $name, $status, $imageName, $id);
        } else {
            $stmt->bind_param("ssi", $name, $status, $id);
        }

        if ($stmt->execute()) {
            header("Location: users.php");
            exit;
        } else {
            echo "Failed to update user!";
        }

        $stmt->close();
        $con->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid Request!";
}
?>
