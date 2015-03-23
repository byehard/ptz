<?php
require("config.php");
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Контакты | Карелавтотранс</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



  <script src="contact.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->

    <style type="text/css">
    .form-container{width: 70%; margin: 0px auto 0;background: #fff;}

.form-container h2{font-size:24px;text-align: center;}
input[type="text"], input[type="email"], textarea{margin: 10px;}
hr {
  
  border-color: #EEEEEE -moz-use-text-color #FFFFFF;
  border-style: solid none;
  border-width: 1px 0;
  margin: 18px 0;
}
  </style>
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
        <div class="col-lg-7">
            <div class="row">
              <div class="col-lg-11 col-lg-offset-1">
              <h2>Контакты</h2><br>
              <center>
            <h4>Генеральный директор ГУП РК "Карелавтотранс"</h4>
            <img src="http://panorama.petrsu.ru/img/img_2.png">
              <p>Каштанова Эльвира Эдуардовна</p>
            <p><i class="fa fa-phone"></i> (8142) 72-20-12</p></center>

            <h4>Приёмная, отдел кадров</h4><p><i class="fa fa-phone"></i> (8142) 72-20-12</p>
 
              <h4>Производственный отдел</h4><p><i class="fa fa-phone"></i> (8142)  72-20-04</p>
               
              <h4>Справочная служба</h4><p> <i class="fa fa-phone"></i>  004,<i class="fa fa-phone"></i> (8142) 76-10-44</p>
               
              <h4>Заказ, бронирование билетов</h4><p><i class="fa fa-phone"></i> 004,<i class="fa fa-phone"></i> (8142) 76-10-44</p>
            </div>

            
        </div></div>
        <div class="col-lg-5">
          <div class="form-container">
                  <h2><i class="fa fa-envelope-o fa-0.5x pull-left"></i>Напишите нам</h2>
                  
                  <div id="note"></div>

                  <div id="fields">
                    <form id="ajax-contact-form" action="">
                      <input type="text"  class="form-control" name="name" placeholder="Имя" />
                        <input type="email" class="form-control" name="email" placeholder="Email">
                      <input type="text"  class="form-control" name="subject" placeholder="Тема сообщения" />
                      <textarea class="form-control" name="message" rows="5" cols="25" placeholder="Текст сообщения"></textarea>
                      <input class="btn" type="submit" name="submit" value="Отправить" />
                    </form>
                  </div>
                  </div>
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