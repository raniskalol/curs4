<?php

session_start();

require_once "../database/database.php";
global $connect;

if(!isset($_POST))die('Поддерживается только post запросы');


$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordr = $_POST['passwordr'];

$_SESSION['name'] = $name;
$_SESSION['surname'] = $surname;
$_SESSION['email'] = $email;


if(empty($name)) $_SESSION['error']['name'] = "Поле Имя является обязательным";
if(empty($surname)) $_SESSION['error']['surname'] = "Поле Фамилия является обязательным";

if(empty($email)) $_SESSION['error']['email'] = "Поле email является обязательным";
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $_SESSION['error']['email'] = "Неверный email";
else{
    $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
    $query = $connect->query($sql);
    $isReg = $query->fetch(PDO::FETCH_ASSOC);

    if(!empty($isReg)){
        $_SESSION['error']['email'] = "Данный email уже зарегистрирован!";
    }
}

if(empty($password)) $_SESSION['error']['password'] = "Поле Пароль является обязательным";
else if(strlen($password) < 6) $_SESSION['error']['password'] = "Пароль должен содержать не меньше 6 символов";

if(empty($passwordr)) $_SESSION['error']['passwordr'] = "Повторите пароль";
else if($password != $passwordr) $_SESSION['error']['passwordr'] = "Пароли должны совпадать";

if (!empty($_SESSION['error'])) {

    header("location: ../?page=reg");
    die();
}


$password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`) VALUES (null, '$name', '$surname','$email','$password')";
$query = $connect->query($sql);

$sql = "SELECT * FROM `users` WHERE `email` = '$email'";
$query = $connect->query($sql);
$sess = $query->fetch(PDO::FETCH_ASSOC);

$_SESSION['user'] = $sess;


header('location: ../?page=profil');