<?php

session_start();

?>
<link rel="stylesheet" href="css/spisok.css" />
    <section class="sec">
    <section class="a1">
    <header>
<div class="head">
  <a href="index.php" class="logo"><img src="media/logo.png" alt=""></a>
<div class="hdiv">
    <a href="index.php" class="hbtn"><span class="sp2">Вернуться назад</span></a>
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
<div class="mmm">
<div class="men">
  <a class="men1" href="?page=katalog"><img src="media/rr1 (1).png" alt=""><span class="sp5">Декор</span><br></a>
  <a class="men1" href="#"><img src="media/rr1 (2).png" alt=""><span class="sp4">Стулья</span><br></a>
  <a class="men1" href="#"><img src="media/rr1 (3).png" alt=""><span class="sp4">Компьютерные столы</span><br></a>
  <a class="men1" href="#"><img src="media/rr1 (4).png" alt=""><span class="sp4">Посуда</span><br></a>
  <a class="men1" href="#"><img src="media/rr1 (5).png" alt=""><span class="sp4">Диваны и кресла</span><br></a>
  <a class="men1" href="#"><img src="media/rr1 (6).png" alt=""><span class="sp4">Освещение</span><br></a>
  <a class="men1" href="#"><img src="media/rr1 (7).png" alt=""><span class="sp4">Столы</span><br></a>
  <a class="men1" href="#"><img src="media/rr1 (8).png" alt=""><span class="sp4">Ковры</span><br></a>
  <a class="men1" href="#"><img src="media/rr1 (9).png" alt=""><span class="sp4">Шкафы</span><br></a>
  <a class="men1" href="#"><img src="media/rr1 (10).png" alt=""><span class="sp4">С/У</span><br></a>
  <a class="men1" href="#"><img src="media/rr1 (11).png" alt=""><span class="sp4">Спальня</span><br></a>
  <a class="men1" href="#"><img src="media/rr1 (12).png" alt=""><span class="sp4">Десткие кроватки</span><br></a>
</div>
<div class="line"><img src="media/Line 14.png" alt=""></div>
<div class="cat">
  <h1>Декор для дома</h1>
  <div class="cat1">
    <div class="a12"> <a class="catt" href="#">Часы<br></a> </div>
    <a class="catt1" href="#">Часы настенные<br></a>
    <a class="catt1" href="#">Часы настольные<br></a>
    <a class="catt1" href="#">Часы раритет<br></a>
    <a class="catt1" href="#">Часы modern<br></a>
    
  </div>
  <div class="cat1">
    <div class="a12"> <a class="catt" href="#">Зеркала<br></a> </div>
    <a class="catt1" href="#">Зеркала настенные<br></a>
    <a class="catt1" href="#">Зеркала настольные<br></a>
    <a class="catt1" href="#">Зеркала для ванн<br></a>
    <a class="catt1" href="#">Зеркала для спальни<br></a>
    
  </div>
  <div class="cat1">
    <div class="a12"> <a class="catt" href="#">Шторы<br></a> </div>
    <a class="catt1" href="#">Шторы и тюль<br></a>
    <a class="catt1" href="#">Рулонные шторы<br></a>
    <a class="catt1" href="#">Шторы блэкаут<br></a>
    <a class="catt1" href="#">Римские шторы<br></a>
    
  </div>
  <div class="cat1">
    <div class="a12"> <a class="catt" href="#">Интерьер<br></a> </div>
    <a class="catt1" href="#">Камины<br></a>
    <a class="catt1" href="#">Картины и фоторамки<br></a>
    <a class="catt1" href="#">Вазы и цветы<br></a>
    <a class="catt1" href="#">Фигурки и статуэтки<br></a>
    
  </div>
  <div class="cat1">
    <div class="a12"> <a class="catt" href="#">Для растений<br></a> </div>
    <a class="catt1" href="#">Горшки<br></a>
    <a class="catt1" href="#">Кашпо<br></a>
    <a class="catt1" href="#">Подставки для цветов<br></a>
    <a class="catt1" href="#">Вазы и цветы<br></a>
  </div>
</div>
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