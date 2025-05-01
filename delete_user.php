<?php
require_once '../config.php';
$id = $_GET['id'];

$sql = "DELETE FROM users where id = $id";
$result = $con->query($sql);

echo "<script>
    alert('User deleted successfully');
    window.location.href = './users.php'
</script>";
