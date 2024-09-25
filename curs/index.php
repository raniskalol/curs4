<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comfyhome</title>
    <link rel="shortcut icon" href="media/Group 91.png" type="image/x-icon">

</head>
<body>

    <?php

if (isset($_GET['page'])) {
    if($_GET['page']==='katalog') include 'pages/katalog.php';
   else if($_GET['page']==='admin') include 'pages/admin.php';
   else if($_GET['page']==='auth') include 'pages/auth.php';
   else if($_GET['page']==='cardtov') include 'pages/cardtov.php';
   else if($_GET['page']==='korzina') include 'pages/korzina.php';
   else if($_GET['page']==='profil') include 'pages/profil.php';
   else if($_GET['page']==='reg') include 'pages/reg.php';
   else if($_GET['page']==='spisok') include 'pages/spisok.php'; 
   else if($_GET['page']==='delete') include 'action/delete.php';
   else if($_GET['page']==='edit') include 'pages/edit.php';
   else if($_GET['page']==='admin1') include 'pages/admin1.php';
   else if($page === 'ban') include 'action/ban.php';
    else if($page === 'razban') include 'action/razban.php';
   
}
else include 'pages/glmenu.php'

?>

</body>
</html>