<?php
require_once '../config.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'] ?? '';
    $name = $_POST['edit-product-name'] ?? '';
    $price = $_POST['edit-product-price'] ?? '';
    $category = $_POST['edit-product-category'] ?? '';
    $image = $_FILES['edit-product-image'] ?? null;

    // Validate inputs
    if (empty($name) || empty($price) || empty($category) || empty($product_id)) {
        echo "All fields are required!";
        exit;
    }

    $imageName = '';
    $updateImageQuery = '';

    // Check if a new image is uploaded
    if ($image && $image['error'] === 0) {
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

        // Move uploaded file
        if (!move_uploaded_file($image['tmp_name'], $targetFilePath)) {
            echo "Failed to upload image!";
            exit;
        }

        $updateImageQuery = ", image = ?";
    }

    try {
        // Prepare SQL with conditional image update
        $sql = "UPDATE products SET name = ?, price = ?, category = ?{$updateImageQuery} WHERE id = ?";
        $stmt = $con->prepare($sql);

        if ($updateImageQuery) {
            $stmt->bind_param("sissi", $name, $price, $category, $imageName, $product_id);
        } else {
            $stmt->bind_param("sisi", $name, $price, $category, $product_id);
        }

        if ($stmt->execute()) {
            header("Location: products.php?message=Product updated successfully");
            exit;
        } else {
            echo "Failed to update product!";
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