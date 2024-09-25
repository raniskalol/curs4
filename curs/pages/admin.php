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
        <a class="pp1" href="?page=admin1" ><img src="media/osn (1).png" alt="">Страницы<br></a>
        <a class="pp1" href="?page=admin1" ><img src="media/osn (4).png" alt="">Запросы<br></a>
        <a class="pp1" href="?page=admin1" ><img src="media/osn (5).png" alt="">Товары<br></a>
      </div>
    </div>
    <div class="admin2">
      <div class="abt">
        <a class="abtt" href="#">Добавить новую категорию</a>
        <a class="abtt" href="#">Добавить новый товар</a>
      </div>
      <div class="abt2">
        <a class="abtt2" href="#">Все</a>
        <a class="abtt3" href="#">Прихожая</a>
        <a class="abtt2" href="#">Декорация</a>
        <a class="abtt2" href="#">Диваны</a>
        <a class="abtt2" href="#">Столы</a>
        <a class="abtt2" href="#">Стулья</a>
        <a class="abtt2" href="#">...</a>
      </div>
    </div>
    <div class="dd2">
    <?php
            if (count($products) > 0) {
                foreach ($products as $product) {
                    ?>
      <div class="hit">
       <a class="bab" href="?page=cardtov&id=<?= $product['id'] ?>"><img src="<?php
                                    if(!is_null($product['photo'])) echo $product['photo'];
                                    else echo 'media/nophoto.png';
                                    ?>" alt=""></a> 
        <div class="htext">
          <p1><?= $product['name'] ?><br></p1>
          <p2>4.7 <img src="media/Star.png" alt=""> </p2>
          <p3>|27 отзывов<br></p3>
          <p4><?= number_format($product['price'], 0, '.', ' ' ) ?> ₽</p4>
          <a class="himg1" href="?page=delete&id=<?=$product['id']?>"><img src="media/Group 90.png" alt=""></a>
          <a class="himg1" href="?page=edit&id=<?=$product['id']?>"><img src="media/edit.png" alt=""></a>
        </div>
      </div>
      
                
    
      
      
        
      <?php
                }
            } else {
              
                echo 'Нет товаров';
            }
            ?>
            </div>
            </div>
          
  </div>
          </div>
  <div class="add1">
  <div class="add">
   <p1> Добавление товара</p1>
  </div>
  <div class="login-page">
    <div class="form">
    <?php
            if (isset($_SESSION['error']['photo'])) {
                ?>
                <p style="color: red"><?= $_SESSION['error']['photo'] ?></p>
                <?php
                unset($_SESSION['error']['photo']);
            }
            ?>
      <form action="action/add.php" method="post" enctype="multipart/form-data"  class="login-form">
      <input type="file" id="photo" name="photo">
        <input type="text" name="name" placeholder="Имя товара"/>
        <input type="text" name="price" placeholder="Цена"/>
        <input type="text" name="cloth" placeholder="Отбивка"/>
        <input type="text" name="size" placeholder="Размер"/>
        <input type="text" name="ves" placeholder="Вес"/>
        
        
        <button type="submit">Добавить товар</button>
       
      </form>
    </div>
  </div>

  </div>
  
     
    </section>
    
    