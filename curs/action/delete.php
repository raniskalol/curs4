<?php
require_once 'database/database.php';
global $connect;
$product_id = $_GET['id'];

$sql = "DELETE FROM `tovar` WHERE id = '$product_id'";
$query = $connect->query($sql);
header('Location:   ../?page=admin');
