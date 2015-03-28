<?php
require("config.php");
header('Content-Type: text/html; charset=utf-8');
$link = db_connect();
$q_from_dest = "SELECT `from` FROM timetable GROUP BY `from`;";
$from_dest = array();
if ($result = mysqli_query($link, $q_from_dest)) {
    while ($row = mysqli_fetch_row($result)) {
        $from_dest[] = $row[0];
    }
    mysqli_free_result($result);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Расписание автовокзала г. Петрозаводск">
    <meta name="keywords" content="Расписание, автовокзал">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Расписание | Карелавтотранс</title>

    <script src="jquery-2.1.1.min.js"></script>
<<<<<<< HEAD
     <script type="text/javascript"> 
     $('.selectpicker').selectpicker({ 
         style: 'btn-info', 
        size: 6 
     });
    </script> 
=======
    <!-- <script type="text/javascript"> -->
    <!-- $('.selectpicker').selectpicker({ -->
    <!--       style: 'btn&#45;info', -->
    <!--       size: 4 -->
    <!--   }); -->
    <!-- </script> -->
>>>>>>> origin/master

  <script src="js/bootstrap-select.js"></script>
  <script src="js/bootstrap.js"></script>

   <script src="timetable.js"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->

    
  </head>

  <body>

    <div class="container">
     
      <div class="row-fluid">
       <span class="visible-lg">
       <div id="header">
          <a href="/v2/" id="logo">
            <div id="logo_rus">  
            </div>
         </a>
          <div class="top_contacts">
            <p>ПЕТРОЗАВОДСК</p>
            <p>Телефон горячей линии:</p>
            <p><strong>+7 (8142) 76-10-44</strong></p>
          </div>
        </div></span>
      </div>
     
                
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

          

          <span class="visible-xs visible-sm">
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="schedule.php">Расписание</a></li>
              <li><a href="#">Новости</a></li>
              <li><a href="actions.php">Акции</a></li>
              <li><a href="contact.php">Контакты</a></li>
              <li><a href="adress.php">Как добраться</a></li>
            </ul>
            <!--<ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>-->
          </div><!--/.nav-collapse -->
          </span>

          <span class="visible-md visible-lg">
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
          </span>
        </div><!--/.container-fluid -->
      </nav>
                    
                
<br>
<br>
      <div class="row">
      <span class="visible-md visible-lg">
        <div class="col-lg-9">
          
            <p>
                Откуда:
                <select class="selectpicker" id="from_sel" onchange="fetch_to_dest();">
            <?php
            foreach ($from_dest as $d) 
            if ($d == "Петрозаводск")
            echo "<option selected>" . $d ."</option>";
            else
            echo "<option>" . $d ."</option>";
            ?>
            </select>
                  Куда:
                <select class="selectpicker" id="to_sel" onchange="fetch_tbl();"></select>
                </p>

                <div class="panel panel-default">
              <!-- Default panel contents -->
              <div class="panel-heading"> </div>

              <!-- Table -->
              <table class="table" id="tbl">
              </table>
            </div>
      
        </div>
        <div class="col-lg-3">
          <!-- VK Widget -->
          <div id="vk_groups"></div>
          

          <h2>Акции</h2>
          <p>Билет до Пряжи всего за 300 рублей</p><hr>
          <p>Билет до Беломорска всего за 300 рублей</p><hr>
          <p>Билет до Сортавала всего за 300 рублей</p>
          <p><a class="btn btn-primary" href="actions.php" role="button">Подробнее &raquo;</a></p>

       </div>
     </span>


     <span class="visible-xs visible-sm">
     <div class="row-fluid">
     <div class="col-lg-3">
        <p>Откуда:
        <select class="selectpicker" id="from_sel_mob" onchange="fetch_to_dest_mob();">
            <?php
            foreach ($from_dest as $d) 
            if ($d == "Петрозаводск")
            echo "<option selected>" . $d ."</option>";
            else
            echo "<option>" . $d ."</option>";
            ?>
            </select></p>
            <p>Куда:   
            <select class="selectpicker" id="to_sel_mob" onchange="fetch_tbl_mob();"></select>
                </p>


                <div id="mob_table">
                </div>

<<<<<<< HEAD
      <!--  <div class="schedule-block"> -->
      <!--  <div class="number-bus"><i class="fa fa-bus"></i> 200</div> -->
      <!--   <div class="time-info pull-right"> -->
      <!--     <p><i class="fa fa-sign-out"></i> 10:00</p> -->
      <!--     <p><i class="fa fa-sign-in"></i> 18:00</p> -->
      <!--   </div> -->
      <!--   <div class="more-info"> -->
      <!--     <button type="button" class="info collapsed" data-toggle="collapse" data-target="#info" aria-expanded="false" aria-controls="info"> -->
      <!--     <i id="info-ico" class="fa fa-chevron-down pull-right"></i> -->
=======
      <!--  <div class="schedule&#45;block"> -->
      <!--  <div class="number&#45;bus"><i class="fa fa&#45;bus"></i> 200</div> -->
      <!--   <div class="time&#45;info pull&#45;right"> -->
      <!--     <p><i class="fa fa&#45;sign&#45;out"></i> 10:00</p> -->
      <!--     <p><i class="fa fa&#45;sign&#45;in"></i> 18:00</p> -->
      <!--   </div> -->
      <!--   <div class="more&#45;info"> -->
      <!--     <button type="button" class="info collapsed" data&#45;toggle="collapse" data&#45;target="#info" aria&#45;expanded="false" aria&#45;controls="info"> -->
      <!--     <i id="info&#45;ico" class="fa fa&#45;chevron&#45;down pull&#45;right"></i> -->
>>>>>>> origin/master
      <!--     </button> -->
      <!--   </div> -->
      <!-- <div id="info" class="info collapse">1</div> -->
      <!-- </div> -->

<<<<<<< HEAD
      <!-- <div class="schedule-block"> -->
      <!--  <div class="number-bus"><i class="fa fa-bus"></i> 200</div> -->
      <!--   <div class="time-info pull-right"> -->
      <!--     <p><i class="fa fa-sign-out"></i> 10:00</p> -->
      <!--     <p><i class="fa fa-sign-in"></i> 18:00</p> -->
      <!--   </div> -->
      <!--   <div class="more-info"> -->
      <!--     <button type="button" class="info collapsed" data-toggle="collapse" data-target="#info2" aria-expanded="false" aria-controls="info2"> -->
      <!--     <i id="info-ico" class="fa fa-chevron-down pull-right"></i> -->
=======
      <!-- <div class="schedule&#45;block"> -->
      <!--  <div class="number&#45;bus"><i class="fa fa&#45;bus"></i> 200</div> -->
      <!--   <div class="time&#45;info pull&#45;right"> -->
      <!--     <p><i class="fa fa&#45;sign&#45;out"></i> 10:00</p> -->
      <!--     <p><i class="fa fa&#45;sign&#45;in"></i> 18:00</p> -->
      <!--   </div> -->
      <!--   <div class="more&#45;info"> -->
      <!--     <button type="button" class="info collapsed" data&#45;toggle="collapse" data&#45;target="#info2" aria&#45;expanded="false" aria&#45;controls="info2"> -->
      <!--     <i id="info&#45;ico" class="fa fa&#45;chevron&#45;down pull&#45;right"></i> -->
>>>>>>> origin/master
      <!--     </button> -->
      <!--   </div> -->
      <!-- <div id="info2" class="info collapse">1</div> -->
      <!-- </div> -->
<<<<<<< HEAD
      <!-- <div class="schedule-block"> -->
      <!--  <div class="number-bus"><i class="fa fa-bus"></i> 200</div> -->
      <!--   <div class="time-info pull-right"> -->
      <!--     <p><i class="fa fa-sign-out"></i> 10:00</p> -->
      <!--     <p><i class="fa fa-sign-in"></i> 18:00</p> -->
      <!--   </div> -->
      <!--   <div class="more-info"> -->
      <!--     <button type="button" class="info collapsed" data-toggle="collapse" data-target="#info3" aria-expanded="false" aria-controls="info3"> -->
      <!--     <i id="info-ico" class="fa fa-chevron-down pull-right"></i> -->
=======
      <!-- <div class="schedule&#45;block"> -->
      <!--  <div class="number&#45;bus"><i class="fa fa&#45;bus"></i> 200</div> -->
      <!--   <div class="time&#45;info pull&#45;right"> -->
      <!--     <p><i class="fa fa&#45;sign&#45;out"></i> 10:00</p> -->
      <!--     <p><i class="fa fa&#45;sign&#45;in"></i> 18:00</p> -->
      <!--   </div> -->
      <!--   <div class="more&#45;info"> -->
      <!--     <button type="button" class="info collapsed" data&#45;toggle="collapse" data&#45;target="#info3" aria&#45;expanded="false" aria&#45;controls="info3"> -->
      <!--     <i id="info&#45;ico" class="fa fa&#45;chevron&#45;down pull&#45;right"></i> -->
>>>>>>> origin/master
      <!--     </button> -->
      <!--   </div> -->
      <!-- <div id="info3" class="info collapse">1</div> -->
      <!-- </div> -->




      </div>
    </div>
  </span>
        </div> <!-- /container -->

      <!-- Site footer-->
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
      
   <script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>
          <script type="text/javascript">
            VK.Widgets.Group("vk_groups", {mode: 0, width: "250", height: "300", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 87184191);
          </script>
  </body>
</html>
