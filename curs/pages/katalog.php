<?php 
session_start();
require_once 'database/database.php';
global $connect; 
$sql = "SELECT * FROM `tovar`";
$query = $connect->query($sql);
$products = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<link rel="stylesheet" href="css/katalog.css" />
    <section class="sec">
    <section class="a1">
    <header>
<div class="head">
  <a href="index.php" class="logo"><img src="media/logo.png" alt=""></a>
<div class="hdiv">
    <a href="?page=spisok" class="hbtn"><span class="sp2">Вернуться назад</span></a>
    <a href="#" class="hbtn">О нас</a>
    
</div>
<form>
  <input type="text" placeholder="Поиск мебели...">
  <button type="submit"><img src="media/Search (2).png" alt=""></button>
</form>


<div class="logo1">
  <a class="log1" href="<?php
                if (empty($_SESSION['user'])) {
                    ?>
                    ?page=auth
                    <?php
                } else if ($_SESSION['user']['role_id'] == '1') {
                    ?>
                    ?page=profil
                    <?php
                } else { ?>
                ?page=admin
                    <?php
                }
                ?>"><img src="media/User.png" alt=""></a>
  <?php
                if (!empty($_SESSION['user'])) {
                    ?>
  <a class="log1" href="#"><img src="media/Love.png" alt=""></a>
  <a class="log1" href="?page=korzina"><img src="media/Basket.png" alt=""></a>
  <?php
                }
                ?>
</div>
</div><div class="burger"><img src="media/Group 48.png" alt=""></div>
    </header>
     <section class="a2">
<div class="buttons">
  <a href="#" class="btn1">СКИДКИ</a>
  <a href="#" class="btn">Кухни</a>
  <a href="#" class="btn">Гостинная</a>
  <a href="#" class="btn">Стулья</a>
  <a href="#" class="btn">Шкафы</a>
  <a href="#" class="btn">Диваны</a>
  <a href="#" class="btn">Кровати и матрасы</a>
  <a href="#" class="btn">Сад и дача</a>
  <a href="#" class="btn">Гардероб</a>
  <a href="#" class="btn">Свет</a>
  <a href="#" class="btn">...</a>
</div>


<div class="txtd">Главная<span class="arb">/Каталог</span></div>
<div class="txtd1">Каталог</div>
<div class="cardd">
<div class="card">
    <img src="media/img2.png" alt="">
    <div class="cardtxt">Диваны</div>
</div>
<div class="card">
    <img src="media/mz (1).png" alt="">
    <div class="cardtxt">Кресла</div>
</div>
<div class="card">
    <img src="media/mz (2).png" alt="">
    <div class="cardtxt">Кровати</div>
</div>
<div class="card">
    <img src="media/mz (3).png" alt="">
    <div class="cardtxt">Ванная</div>
</div>
<div class="card">
    <img src="media/mz (4).png" alt="">
    <div class="cardtxt">Оффис</div>
</div>
<div class="card">
    <img src="media/mz (5).png" alt="">
    <div class="cardtxt">Ковры</div>
</div>
<div class="card">
    <img src="media/mz (6).png" alt="">
    <div class="cardtxt">Шкафы</div>
</div>
<div class="card">
    <img src="media/mz (7).png" alt="">
    <div class="cardtxt">Декор</div>
</div>
<div class="card">
    <img src="media/mz (8).png" alt="">
    <div class="cardtxt">Текстиль</div>
</div>
<div class="card">
    <img src="media/mz (9).png" alt="">
    <div class="cardtxt">Гостинная</div>
</div>
<div class="card">
    <img src="media/mz (10).png" alt="">
    <div class="cardtxt">Кухня</div>
</div>
<div class="card">
    <img src="media/mz (11).png" alt="">
    <div class="cardtxt">Дача</div>
</div>
</div>
<div class="txtd2">Все товары</div>
<div class="dd2">
<?php
            if (count($products) > 0) {
                foreach ($products as $product) {
                    ?>
  <div class="hit">
   <a  class="bab" href="?page=cardtov&id=<?= $product['id'] ?>"><img src="<?php
                                    if(!is_null($product['photo'])) echo $product['photo'];
                                    else echo 'media/nophoto.png';
                                    ?>" alt=""></a> 
    <div class="htext">
      <p1><?= $product['name'] ?><br></p1>
      <p2>4.7 <img src="media/Star.png" alt=""> </p2>
      <p3>|27 отзывов<br></p3>
      <p4><?= number_format($product['price'], 0, '.', ' ' ) ?> ₽</p4>
      <a class="himg1" href="#"><img src="media/Group 80.png" alt=""></a>
    </div>
  </div>
  
   <?php
                }
            } else {
                echo 'Нет товаров';
            }
            ?>
  </div>
  <div class="str">
    <a href="#"><img src="media/str (1).png" alt=""></a>
    <a href="#"><img src="media/str (2).png" alt=""></a>
  </div>
  <div class="rs">
    Подпишитесь на нашу рассылку и узнавайте первыми о наших скидках и акциях<br>
    <a class="io" href="#">Перейти к форме</a>
  </div>

  <div class="ftbb">
    <img src="media/logo.png" alt="">
  </div>

  <footer>
    <div class="ftx1">Мы обеспечиваем финансовую безопасность при совершении покупок на сайте, благодаря использованию технологии платежных систем Verified by Visa и MasterCard SecureCode, которые защищают Вас от кражи персональных данных при совершении онлайн-платежей.<br> @KHAFIZOV</div>
    <a class="ftx2" href="#"><img src="media/bank (3).png" alt=""></a>
    <a class="ftx2" href="#"><img src="media/bank (2).png" alt=""></a>
    <a class="ftx2" href="#"><img src="media/bank (1).png" alt=""></a>
  
    <div class="ftx3">
      <div class="ftx5"><a href="#">О нас<br></a></div> 
      <div class="ftx4"><a href="#">О компании<br></a></div>
      <div class="ftx4"><a href="#">Контакты<br></a></div> 
      <div class="ftx4"><a href="#">Тендеры<br></a></div> 
     </div>
     <div class="ftx3">
       <div class="ftx5"><a href="#">Услуги<br></a></div> 
       <div class="ftx4"><a href="#">Самовызов<br></a></div>
       <div class="ftx4"><a href="#">Кредит<br></a></div> 
       <div class="ftx4"><a href="#">Возврат<br></a></div> 
      </div>
      <div class="ftx3">
       <div class="ftx5"><a href="#">Планирование<br></a></div> 
       <div class="ftx4"><a href="#">Конструктор<br></a></div>
       <div class="ftx4"><a href="#">Вебмастера<br></a></div> 
       <div class="ftx4"><a href="#">Подарочные карты<br></a></div> 
      </div>
      <div class="ftx3">
       <div class="ftx5"><a href="#">Главное<br></a></div> 
       <div class="ftx4"><a href="#">Каталог<br></a></div>
       <div class="ftx4"><a href="#">Регистрация<br></a></div> 
       <div class="ftx4"><a href="#">Авторизация<br></a></div> 
      </div>
     <div class="kont">
      <h1>Контакты</h1>
      <p1>ул. Островского, 15, Казань<br></p1>
          <p4>ежедневно с 10:00 до 24:00<br></p4>
          <p2>8 (800) 765-17-21<br></p2>
             <p5> бесплатный звонок по России<br></p5>
              <p3>Социальные сети:</p3>
              
  
  <div class="logoos">
  <a class="tg" href="#"> <img src="media/Telegram App.png" alt=""></a>
      <a class="tg" href="#"><img src="media/VK Circled.png" alt=""></a>
          <a class="tg" href="#"><img src="media/YouTube.png" alt=""></a>
      </div>
  </footer>
  </section>
  
    </section>
      </section>
