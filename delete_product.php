<?php
require_once '../config.php';
$id = $_GET['id'];

$sql = "DELETE FROM products where id = $id";
$result = $con->query($sql);

echo "<script>
    alert('Product deleted successfully');
    window.location.href = './products.php'
</script>";
