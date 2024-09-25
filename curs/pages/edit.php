<?php

session_start();

require_once 'database/database.php';
global $connect;

$product_id=$_GET['id'];

$sql = "SELECT * FROM `tovar` WHERE `id` = '$product_id'";
$query = $connect->query($sql);
$product = $query->fetch(pdo::FETCH_ASSOC);
?>

<!doctype html>
<html lang="ru">
<head>
    
    <link rel="stylesheet" href="css/edit.css">
    <link rel="shortcut icon" href="media/Group 91.png" type="image/x-icon">
</head>
<body>
<section class="sec">
    <section class="a1">
    <header>
<div class="head">
<a href="index.php" class="logo">*ADMIN-панель</a>
<div class="hdiv">
    
    
    
</div>

<div class="im">
    <img src="media/usa.png" alt="">
    <br>
    <div class="z">
    <p1><?=$_SESSION['user']['name']?>
      <?=$_SESSION['user']['surname']?><br></p1>
    <p2>Администратор</p2>
    </div>
</div>
<a href="action/logaut.php" class="imgs"><img src="media/Logout.png" alt=""></a>

</div>
    </header>
     <section class="a2">
<div class="container h100">
    <div class="form">
        <div class="form__header">
            <p>Добавление товара</p>
        </div>
        <form action="../action/edit.php" method="post" enctype="multipart/form-data">
            <label for="id"></label><input class="input" type="hidden" id="id" name="id" value="<?=$product['id']?>">
            <label for="name"></label><input class="input" type="text" name="name" id="name"  placeholder="Название товара" value="<?=$product['name']?>">
            <label for="price"></label><input class="input" type="number" name="price" id="price" placeholder="Цена товара" value="<?=$product['price']?>">
            <label for="description"></label><textarea class="input" name="size" id="size" cols="30" rows="5" placeholder="Размер товара"><?=$product['size']?></textarea>
            <label for="processor"></label><input class="input" type="text" name="ves" id="ves" placeholder="Вес товара" value="<?=$product['ves']?>">
            <label for="core-kol_vo"></label><input class="input" type="text" name="cloth" id="cloth" placeholder="Материал товара" value="<?=$product['cloth']?>">
            <button type="submit">Отредактировать</button>
        </form>
        <div class="line">
        </div>
    </div>
</div>