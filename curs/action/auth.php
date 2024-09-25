<?php

session_start();

require_once "../database/database.php";
global $connect;

if(!isset($_POST))die('Поддерживается только post запросы');



$email = $_POST['email'];
$password = $_POST['password'];


$_SESSION['email'] = $email;

$sql = "SELECT * FROM `users` WHERE `email` = '$email'";
$query = $connect->query($sql);
$user = $query->fetch(PDO::FETCH_ASSOC);

if(empty($email)) $_SESSION['error']['email'] = "Поле email является обязательным";
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $_SESSION['error']['email'] = "Неверный email";
else if(empty($user)) $_SESSION['error']['email'] = "Данный email не зарегистрирован!";
if($user['role_id'] == 3) $_SESSION['error']['email'] = "Ваш аккаунт заблокирован!";

if (empty($password)) $_SESSION['error']['password'] = "Введите пароль";
if(!empty($password) && empty($_SESSION['error']['email']) && !password_verify($password, $user['password'])) $_SESSION['error']['password'] = "Не верный пароль!";

if (!empty($_SESSION['error'])) {
    header("location: ../?page=auth");
    die();
}

if(password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user;
    unset($_SESSION['email']);
    if($_SESSION['user']['role_id'] == 2) header('location: ../?page=admin');
    else header(    'location: ../?page=profil');
    die();
}