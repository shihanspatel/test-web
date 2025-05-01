<?php
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id']; // Assuming ID is passed via POST
    $name = trim($_POST['edit-coupen-name']);
    $coupen_code = trim($_POST['edit-coupen-coupen']);
    $discount = trim($_POST['edit-coupen-discount']);
    $quantity = trim($_POST['edit-coupen-quantity']);
    $status = trim($_POST['edit-coupen-category']);
    $validity = date('Y-m-d', strtotime(trim($_POST['edit-coupen-validity']))); // Ensure date format
    $error = '';

    // ✅ Proceed if no validation errors
    if (empty($error)) {
        // Check if coupon code already exists (excluding current ID)
        $checkCoupon = $con->prepare("SELECT id FROM coupons WHERE coupon_code = ? AND id != ?");
        $checkCoupon->bind_param("si", $coupen_code, $id);
        $checkCoupon->execute();
        $checkCoupon->store_result();

        if ($checkCoupon->num_rows > 0) {
            echo "Coupon code already exists!";
        } else {
            // ✅ Update the coupon
            $updateCoupon = $con->prepare("UPDATE coupons SET coupon_name = ?, coupon_code = ?, discount = ?, quantity = ?, status = ?, expiry_date = ? WHERE id = ?");
            $updateCoupon->bind_param("ssdissi", $name, $coupen_code, $discount, $quantity, $status, $validity, $id);

            if ($updateCoupon->execute()) {
                echo "Coupon updated successfully!";
            } else {
                echo "Error updating coupon. Please try again.";
            }

            $updateCoupon->close();
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
