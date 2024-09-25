<?php

session_start();

require_once '../database/database.php';
global $connect;


if (!isset($_POST)) die('Поддерживается только post запросы');

$name = $_POST['name'];
$price = $_POST['price'];
$cloth = $_POST['cloth'];
$size = $_POST['size'];
$ves = $_POST['ves'];
$file = $_FILES['photo'];

if ($file['error'] !== 0) {
    $_SESSION['error']['photo'] = 'Возникли ошибки при загрузке файла';
    header('Location: ../index.php?page=admin');

    die();
}

$types = [
    'image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/bmp', 'image/svg+xml'
];

if (!in_array($file['type'], $types)) {

    $_SESSION['error']['photo'] = 'Неверный тип файла';

    header('Location: ../index.php?page=admin');

    die();

}

if ($file['size'] > 1024 * 1024 * 10) {

    $_SESSION['error']['photo'] = 'Максимальный размер загружаемого файла 10 мб.';

    header('Location: ../index.php?page=admin');

    die();

}
$extension = pathinfo($file['name'], PATHINFO_EXTENSION);
$path = 'image/' . uniqid() . '.' . $extension;
if (!move_uploaded_file($file['tmp_name'], '../' . $path)) {

    $_SESSION['error']['photo'] = 'Не удалось загрузить файл';

    header('location: ../index.php?page=admin');

    die();

}

$sql = "INSERT INTO `tovar` (`id`, `name`, `price`, `photo`,`cloth`,`size`,`ves`) VALUES (null, '$name', '$price','$path','$cloth','$size','$ves')";
$query = $connect->query($sql);
header('Location: ../index.php?page=admin');
