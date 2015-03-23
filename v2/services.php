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

    <title>Услуги | Карелавтотранс</title>
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
              <h2>Услуги</h2><br>
              <p>Кроме пассажирских перевозок автобусами большой вместимости городского. пригородного и туристического классов по регулярным маршрутам Республики Карелия и в межрегиональном сообщении, группа компаний "Карелавтотранс" предоставляет следующие услуги:</p>
 
<p>- услуги охраняемой автостоянки  в центре Петрозаводска;</p>
<p>- услуги по проведению предрейсовых и послерейсовых медицинских осмотров;</p>
<p>- размещение рекламы на Петрозаводском автовокзале и в автобусах;</p>
<p>- объявления, в том числе рекламного характера, по радиосети автовокзала в Петрозаводске;</p>
<p>- выдача письменных справок о расстоянии и стоимости проезда между населенными пунктами как Республики Карелия, так и по территории РФ по междугородным и межобластным автобусным маршрутам регулярного сообщения</p>
 
<p>По вопросам предоставления всех этих услуг обращаться по тел. (8142) 72 20 04.</p>
 
<p>ВНИМАНИЕ: автобусы "на заказ" группой компнаий "Карелавтотранс" - временно не предоставляются. Рекомендуем обращаться по вопросу заказных автобусных перевозок к частным перевозчикам.</p>
            </div>

            
        </div></div>
        <div class="col-lg-3">
          <h2>Акции</h2>
          <p>Билет до Пряжи всего за 300 рублей</p><hr>
          <p>Билет до Беломорска всего за 300 рублей</p><hr>
          <p>Билет до Сортавала всего за 300 рублей</p>
          <p><a class="btn btn-primary" href="actions.php" role="button">Подробнее &raquo;</a></p>

          <h2>Борьба с нелегальными перевозками</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>

          <h2>Социальная сфера</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
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