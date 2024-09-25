<?php

session_start();

require_once '../database/database.php';
global $connect;


if (!isset($_POST)) die('Поддерживается только post запросы');

$product_id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$cloth = $_POST['cloth'];
$size = $_POST['size'];
$ves = $_POST['ves'];




$sql = "UPDATE `tovar` SET `name` = '$name', `price`='$price', `cloth`='$cloth', `size`='$size', `ves`='$ves' WHERE `id` = '$product_id'";
$query = $connect->query($sql);

header('Location: ../index.php?page=admin');




if(isset($_POST)){
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $sql = "UPDATE catalog SET name = '$name', price='$price' WHERE id = '$product_id'";
    $query = $connection -> query($sql);
    
}
