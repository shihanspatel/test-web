<?php
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $coupen_code = trim($_POST['coupen']);
    $discount = trim($_POST['discount']);
    $quantity = trim($_POST['quantity']);
    $validity = trim($_POST['validity']);
    $error = '';

    // Proceed if no validation errors
    if (empty($error)) {
        // Check if coupon code already exists
        $checkCoupon = $con->prepare("SELECT id FROM coupons WHERE coupon_code = ?");
        $checkCoupon->bind_param("s", $coupen_code);
        $checkCoupon->execute();
        $checkCoupon->store_result();

        if ($checkCoupon->num_rows > 0) {
            echo "Coupon code already exists!";
        } else {
            // Insert coupon into database
            $insertCoupon = $con->prepare("INSERT INTO coupons (coupon_name, coupon_code, discount, quantity, expiry_date) VALUES (?, ?, ?, ?, ?)");
            $insertCoupon->bind_param("ssdis", $name, $coupen_code, $discount, $quantity, $validity);

            if ($insertCoupon->execute()) {
                echo "Coupon added successfully!";
            } else {
                echo "Error adding coupon. Please try again.";
            }

            $insertCoupon->close();
        }

        $checkCoupon->close();
    } else {
        echo $error;
    }

    $con->close();
    header("Location: coupens.php");
    exit();
}
?>
