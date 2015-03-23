<?php
require("config.php");
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Карелавтотранс</title>
<script src="jquery-2.1.1.min.js"></script>
 
  <script src="js/bootstrap.js"></script>

   <script src="timetable.js"></script>
    <script type="text/javascript">
$('.selectpicker').selectpicker({
      style: 'btn-info',
      size: 4
  });
</script>
  <script type="text/javascript" src="js/bootstrap-select.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->

    
  </head>

  <body>

    <div class="container">
     
      
      <div id="header">
      <a href="/v2/" id="logo">
      <div id="logo_rus"></div>
    </a>


                
                <div class="top_contacts">
            <p>ПЕТРОЗАВОДСК</p>
          <p>Телефон горячей линии:</p>
          <p><strong>+7 (8142) 76-10-44</strong></p>
                </div></div>

                
                  <nav class="navbar navbar-blue">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/v2/">Автовокзал</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a class="dropdown" role="button" aria-expanded="false">О компании <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="history.php">История</a></li>
                  <li><a href="services.php">Услуги</a></li>
                  <li><a href="vacancy.php">Вакансии</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown" role="button" aria-expanded="false">Пассажирам <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="actions.php">Акции</a></li>
                  <li><a href="rules.php">Правила</a></li>
                  <li><a href="infr.php">Инфраструктура вокзала</a></li>
                </ul>
              </li>
              <li><a href="schedule.php">Расписание</a></li>
              <li><a href="#">Новости</a></li>
              <li class="dropdown">
                <a class="dropdown" role="button" aria-expanded="false">Контакты <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="contact.php">Контакты</a></li>
                  <li><a href="adress.php">Как добраться</a></li>
                </ul>
              </li>
            </ul>
            <!--<ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>-->
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
<br>
<br>
      <!-- Jumbotron -->
      

      <!-- Example row of columns -->
     <div class="row">
        <div class="col-lg-9">
            <div class="row">
              <div class="col-lg-11 col-lg-offset-1">
              <h2>Инфраструктура</h2><br>
              <h3>1. Буфет (кафе-бистро)</h3>
 
<p>Буфет в здании автовокзала открыт ежедневно с 9:00 до 21:00. Примерный уровень цен: выпечка 20 - 30  руб. за одно изделие; салат 40 руб. за 100 гр.; котлета 40 руб.; свинина тушеная 60 руб. за 100 гр.; гарнир 25 руб. за 100 гр.; мясное жаркое в горшочке 90 руб.; сок 20 руб. за стакан, чай 10 руб., пиво от 70 руб. за 0,5 л; мороженое 45 руб. за 100 гр. Внимание: пиво можно употреблять только на территории буфета. Любые напитки и еду, принесенные с собой, употреблять на территории буфета не разрешается.</p>
 
<h3>2. Туалет.</h3>
 
<p>Туалет открыт с 5:30 до 22:00, с двумя регламентными перерывами на уборку: с 12:30 до 13:00 и с 17:15 до 17:45.</p>
<p>Стоимость одного посещения 15 руб. О бесплатном пользовании туалетами:</p>
 
<p>"Пассажир имеет право на бесплатное пользование залами ожидания и туалетами, размещенными в зданиях автовокзала, автостанции, если у него есть билет, срок действия которого не истек и который обеспечивает право проезда по маршруту регулярных перевозок, в состав которого включен остановочный пункт, расположенный на территории этого автовокзала или автостанции."
Основание:"Изменения, которые вносятся в Правила перевозок пассажиров и багажа автомобильным транспортом и городским электрическим транспортом", утвержденные постановлением Правительства Российской Федерации от 26 ноября 2013 г. N 1073, пункт N 21.</p>
 
<h3>3. Справочное бюро.</h3>
 
<p>Cправочное бюро Петрозаводского автовокзала работает ежедневно с 7:30 до 9:30, с 10:00 до 12:00, с 12:30 до 14:30, с 15:00 до 17:00 и с 17:30 до 19:30. Телефоны 76-10-44 и 004. Короткий номер 004 доступен только со  cтационарных телефонов Петрозаводска, и для карельских абонентов Мегафона.</p>
 
<h3>4. Камера хранения.</h3>
 
<p>Расположена во дворе автовокзала, в 20 метрах от здания автовокзала. (см. рисунок). Для размещения вещей обращаться в кафе "Вкусное удовольствие - Ланч" (см. рисунок). Камера хранения работает с 9:00 до 21:00 ежедневно.
Стоимость хранения (до 21:00 текущего дня) одного места багажа* - 100 руб., одного места ручной клади** - 70 руб. Каждая привязь считается отдельным местом.
(*Багаж – если сумма длины,  ширины и высоты одного места багажа составляет от 120 до 180 см.
**Ручная кладь - если сумма длины, ширины и высоты одного места ручной клади не превышает 120 см (№ 259-ФЗ, статья 22).</p>
 
              </div>

            
        </div></div>
        <div class="col-lg-3">
          <!-- VK Widget -->
          <div id="vk_groups"></div>
          <script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>
          <script type="text/javascript">
            VK.Widgets.Group("vk_groups", {mode: 0, width: "250", height: "300", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 87184191);
          </script>

          <h2>Акции</h2>
          <p>Билет до Пряжи всего за 300 рублей</p><hr>
          <p>Билет до Беломорска всего за 300 рублей</p><hr>
          <p>Билет до Сортавала всего за 300 рублей</p>
          <p><a class="btn btn-primary" href="actions.php" role="button">Подробнее &raquo;</a></p>
       </div>
        </div> <!-- /container -->

      <!-- Site footer -->
      <div class="footer">
        <div class="row">
          <div class="footer-info">
            <div class="info">
            <div class="col-lg-2">
              <ul class="list-unstyled">
                <li><p><b>Компания</b></p></li>
                <li><a href="history.php">История</a></li>
                  <li><a href="services.php">Услуги</a></li>
                  <li><a href="vacancy.php">Вакансии</a></li>
              </ul>
            </div>
            <div class="col-lg-2">
              <ul class="list-unstyled">
              <li><p><b>Пассажирам</b></p></li>
                  <li><a href="actions.php">Акции</a></li>
                  <li><a href="rules.php">Правила</a></li>
                  <li><a href="infr.php">Инфраструктура вокзала</a></li>
              </ul>
            </div>
            <div class="col-lg-2">
              <ul class="list-unstyled">
                <li><a href="schedule.php">Расписание</a></li>
              </ul>
            </div>
            <div class="col-lg-2">
              <ul class="list-unstyled">
              <li><a href="#">Новости</a></li>
              </ul>
            </div>
            <div class="col-lg-2">
              <ul class="list-unstyled">
              <li><p><b>Контакты</b></p></li>
              <li><a href="contact.php">Контакты</a></li>
              <li><a href="adress.php">Как добраться</a></li>
              </ul>
            </div>
            </div>
            <div class="col-lg-2">
            <div class="social">
              <center>
                <h5>Карелавтотранс</h5>
                <hr>
                <p><i class="fa fa-vk"></i> <a href="https://vk.com/busptz">ВКонтакте</a></p>
                <p><i class="fa fa-envelope-o"></i> <a href="mailto:karelavtotrans@yandex.ru">E-mail</a></p>
                <p>2015 &copy;</p>
              </center>
               
               </div>
            </div>
          </div>
        </div>
      </div>
      </div>
  </body>
</html>