<?php

session_start();

?>
<link rel="stylesheet" href="css/glmenu.css" />
    <section class="sec">
    <section class="a1">
    <header>
<div class="head">
  <a href="index.php" class="logo"><img src="media/logo.png" alt=""></a>
<div class="hdiv">
    <a href="?page=spisok" class="hbtn">Каталог</a>
    <a href="#id1" class="hbtn">О нас</a>
    
    
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
</div>
<div class="burger"><img src="media/Group 48.png" alt=""></div>
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
<div class="arbz">
<div class="fon"><img src="media/f.png" alt="">
</div>
<div class="text">
  Дарите детям уют
</div>
<a href="?page=katalog" class="btn2">В каталог </a></div>
</div>

<div id="id1" class="text1"><h1><span class="sp1">COMFY</span><span class="sp1"> HOME</span> — крупный мебельный центр Казани<br></h1>
  <br>
  С нами работают более 100 производителей со всей России: крупные и известные бренды, а также интересные, небольшие фабрики.<br>
  Мы сотрудничаем только с проверенными компаниями, чья мебель отличается высоким качеством.<br></div>
     
<div class="ht">Популярные категории</div>
<div class="dd">
<div class="pop">
  <div class="pdiv"><a href="#"><img src="media/k6.png" alt=""></div>
  <div class="ptext">Компьютерные столы</div>
</div>
<div class="pop">
  <div class="pdiv"><a href="#"><img src="media/k1.png" alt=""></div>
  <div class="ptext">Шкафы</div>
</div>
<div class="pop">
  <div class="pdiv"><a href="#"><img src="media/k2.png" alt=""></div>
  <div class="ptext">Кухня</div>
</div>
<div class="pop">
  <div class="pdiv"><a href="#"><img src="media/k3.png" alt=""></div>
  <div class="ptext">Столы</div>
</div>
<div class="pop">
  <div class="pdiv"><a href="#"><img src="media/k4.png" alt=""></div>
  <div class="ptext">Освещение</div>
</div>
<div class="pop">
  <div class="pdiv"><a href="#"><img src="media/k5.png" alt=""></a> </div>
  <div class="ptext">Постель</div>
</div>
</div>
<div class="ht2">Хиты продаж</div>

<div class="dd2">
  <div class="hit">
   <a class="bab" href="?page=cardtov"><img src="media/rr.png" alt=""></a> 
    <div class="htext">
      <p1>
        Кресло для отдыха Сиеста<br></p1>
      <p2>5 <img src="media/Star.png" alt=""> </p2>
      <p3>|45 отзывов<br></p3>
      <p4>12 999 ₽</p4>
      <a class="himg1" href="#"><img src="media/Group 80.png" alt=""></a>
    </div>
  </div>
  <div class="hit">
    <a class="bab" href="#"><img src="media/ss (3).png" alt=""></a> 
     <div class="htext">
       <p1>Прихожая модуль Оскар<br></p1>
       <p2>4.7 <img src="media/Star.png" alt=""> </p2>
       <p3>|66 отзывов<br></p3>
       <p4>45 999 ₽</p4>
       <a class="himg1" href="#"><img src="media/Group 80.png" alt=""></a>
     </div>
   </div>
   <div class="hit">
    <a class="bab" href="#"><img src="media/ss (1).png" alt=""></a> 
     <div class="htext">
       <p1>Подушка MITTE Nettle 50<br></p1>
       <p2>4.2 <img src="media/Star.png" alt=""> </p2>
       <p3>|24 отзывов<br></p3>
       <p4>1 999 ₽</p4>
       <a class="himg1" href="#"><img src="media/Group 80.png" alt=""></a>
     </div>
   </div>
   <div class="hit">
    <a class="bab" href="#"><img src="media/ss (2).png" alt=""></a> 
     <div class="htext">
       <p1>Матрас SLEEPLAB 120х200<br></p1>
       <p2>4.7 <img src="media/Star.png" alt=""> </p2>
       <p3>|12 отзывов<br></p3>
       <p4>17 999 ₽</p4>
       <a class="himg1" href="#"><img src="media/Group 80.png" alt=""></a>
     </div>
   </div>
   
</div>
<div class="str">
  <a href="#"><img src="media/str (1).png" alt=""></a>
  <a href="#"><img src="media/str (2).png" alt=""></a>
</div>

<div class="ht3">Акции</div>
<div class="aaa">
  
<div class="act">
  <img class="aaz" src="media/qq1.png" alt="">
  <a href="#" class="aimg"><img src="media/qq.png" alt=""></a>
  <div class="atext">
    <p1>действует до 27.04.24</p1></div>
</div>
<div class="act">
  <img class="aaz" src="media/actions1 (1).png" alt="">
  <a href="#" class="aimg"><img src="media/qq.png" alt=""></a>
  <div class="atext">
    <p1>действует до 20.04.24</p1></div>
</div>
<div class="act">
  <img class="aaz" src="media/actions1 (2).png" alt="">
  <a href="#" class="aimg"><img src="media/qq.png" alt=""></a>
  <div class="atext">
    <p1>действует до 11.04.24</p1></div>
</div>
</div>

<div class="roz">
  <img src="media/roz.png" alt="">
  <div class="rtext">Подбор и расстановка мебели<br>
  <span class="rspan">с профессиональным дизайнером</span></div>
  <a class="ra" href="#">Подробнее</a>
</div>
<div class="ht4">Наши преимущества</div>
<div class="prr">
<div class="pr">
  <img src="media/Delivery.png" alt="">
  <div class="prtxt">
  <p1>Бесплатная и быстрая доставка товаров от 2000 ₽.
    Отгрузим вашу старую мебель </p1>
  </div>
  <a href="#" class="prbtn">
    Подробнее
  </a>
</div>
<div class="pr">
  <img src="media/Guarantee.png" alt="">
  <div class="prtxt">
  <p1>Лучшее качество в стране и грамотная система возврата товаров </p1>
  </div>
  <a href="#" class="prbtn">
    Подробнее
  </a>
</div>
<div class="pr">
  <img src="media/Customer Support.png" alt="">
  <div class="prtxt">
  <p1>Быстрая и отзывчивая тех. поддержка, которая ответит на любые вопросы </p1>
  </div>
  <a href="#" class="prbtn">
    Подробнее
  </a>
</div>
</div>
<div class="ht5">Блог</div>
<div class="blo">
  <div class="bld">
    <a href="#"><img src="media/bl.png" alt=""></a>
    
    <div class="bltxt"><p1>7 главных ошибок при расстановке мебели<br></p1>

     <p2>Расказываем как сделать ваш дом комфортнее!</p2></div>
  </div>
  <div class="bld">
    <a href="#"><img src="media/es1 (1).png" alt=""></a>
    
    <div class="bltxt"><p1>Необычные блюда из капусты: 4 простых рецепта<br></p1>

      <p2>Расказываем как сделать ваш обед вкуснее!</p2></div>
  </div>
  <div class="bld">
    <a href="#"><img src="media/es1 (2).png" alt=""></a>
    
    <div class="bltxt"><p1>Врываемся в лето: 7 интересных и полезных лайфхаков<br></p1>

     <p2>Расказываем как сделать ваше лето комфортнее!</p2></div>
  </div>
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