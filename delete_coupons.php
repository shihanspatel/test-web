<?php
require_once '../config.php';
$id = $_GET['id'];

$sql = "DELETE FROM coupons where id = $id";
$result = $con->query($sql);

echo "<script>
    alert('coupons deleted successfully');
    window.location.href = './coupens.php'
</script>";
