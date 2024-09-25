<?php

session_start();

?>
<?php 

require_once 'database/database.php';
global $connect; 
$sql = "SELECT * FROM `tovar`";
$query = $connect->query($sql);
$products = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<link rel="stylesheet" href="css/admin.css" />
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
 
    <div class="admin">
      <div class="osn">
        <h1>Основное</h1>
        <a class="pp1" href="?page=admin1" ><img src="media/osn (3).png" alt="">Графики<br></a>
        <a class="pp1" href="?page=admin1" ><img src="media/osn (2).png" alt=""> База данных<br></a>
        <a class="pp1" href="?page=admin" ><img src="media/osn (1).png" alt="">Страницы<br></a>
        <a class="pp1" href="?page=admin1" ><img src="media/osn (4).png" alt="">Запросы<br></a>
        <a class="pp1" href="?page=admin1" ><img src="media/osn (5).png" alt="">Товары<br></a>
      </div>
    </div>
    <div class="admin2">
    <div class="users mt150px container">
        <div class="users-title ">
            Пользователи
        </div>
        <div class="users-cards mt50px">
            <div class="users-flex pc">
                <p>id</p>
                <p>Имя</p>
                <p>Фамилия</p>
                <p>Почта</p>
            </div>
            <?php
            foreach ($users as $user) { ?>
                <div class="users-flex mt50px">
                    <p><?= $user['id'] ?></p>
                    <p><?= $user['name'] ?></p>
                    <p><?= $user['surname'] ?></p>
                    <p><?= $user['email'] ?></p>
                    <?php
                    if ($user['role_id'] == 1) { ?>
                        <a href="?page=ban&id=<?=$user['id']?>">Заблокировать</a>
                        <?php
                    } elseif ($user['role_id'] == 3) {
                        ?>
                        <a href="?page=razban&id=<?=$user['id']?>">Разблокировать</a>
                        <?php
                    }
                    ?>
                    <a href="#">Редактировать</a>
                </div>
                <?php
            }
            ?>
        </div>
   
    </div>
  </div>

  
  
     
    </section>
    
    