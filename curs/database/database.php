<?php
try {
    $host = "localhost";
    $dbname = "comfyhome";
    $user = "root";
    $password ="root";
    $connect = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);

}
catch (exception $e) {
    echo $e->getMessage() . 'Errors dont connection bd';
}
