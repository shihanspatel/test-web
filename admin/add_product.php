<?php
require_once '../config.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $price = $_POST['price'] ?? '';
    $category = $_POST['category'] ?? '';
    $image = $_FILES['file_input'] ?? null;

    // Validate inputs
    if (empty($name) || empty($price) || empty($category) || !$image) {
        echo "All fields are required!";
        exit;
    }

    // Image Upload Handling
    $targetDir = "../uploads/";
    $imageName = basename($image['name']);
    $targetFilePath = $targetDir . $imageName;
    $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    // Check image type
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowedTypes)) {
        echo "Invalid file type!";
        exit;
    }

    // Move the uploaded file
    if (!move_uploaded_file($image['tmp_name'], $targetFilePath)) {
        echo "Failed to upload image!";
        exit;
    }

    try {
        // Insert product into database
        $stmt = $con->prepare("INSERT INTO products (name, price, category, image) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $name, $price, $category, $imageName);

        if ($stmt->execute()) {
            // Redirect to products.php
            header("Location: products.php?message=Product added successfully");
            exit;
        } else {
            echo "Failed to add product!";
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
