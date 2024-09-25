<?php

session_start();

?>
<link rel="stylesheet" href="css/auth.css" />
    <section class="sec">
    <section class="a1">
    <header>
<div class="head">
<a href="index.php" class="logo"><img src="media/logo.png" alt=""></a>
<div class="hdiv">
    <a href="index.php" class="hbtn">Вернуться назад</a>
    
    
</div>



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
</div>

    </header>
     <section class="a2">



    



<div class="login-page">
    <div class="form">
      
      <form action="action/auth.php" class="login-form" method="post">
      <?php
                if (isset($_SESSION['error']['email'])) {
                    ?>
                    <p style="color: red"><?= $_SESSION['error']['email'] ?></p>
                    <?php
                    unset($_SESSION['error']['email']);
                }
                ?>
        <input type="text" name="email" placeholder="Почта"value="<?php
                                                  if (isset($_SESSION['email'])) {
                                                      echo $_SESSION['email'];
                                                      unset($_SESSION['email']);
                                                  }
                                                  ?>">
                                                  <?php
                if (isset($_SESSION['error']['password'])) {
                    ?>
                    <p style="color: red"><?= $_SESSION['error']['password'] ?></p>
                    <?php
                    unset($_SESSION['error']['password']);
                }
                ?>
        <input type="password" name="password" placeholder="Пароль"/>
        <button type="submit" class="btt">Войти</button>
        <p class="message">Не зарегистрированы? <a href="?page=reg">Создать аккаунт</a></p>
      </form>
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
    
    