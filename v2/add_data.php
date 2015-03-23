<?php
require("config.php");
header('Content-Type: text/html; charset=utf-8');
$link = db_connect();

$no          = mysqli_real_escape_string($link, @$_POST["no"]);

$cost_full   = mysqli_real_escape_string($link, @$_POST["cost_full"]);
$cost_child  = mysqli_real_escape_string($link, @$_POST["cost_child"]);
$cost_stud   = mysqli_real_escape_string($link, @$_POST["cost_stud"]);
$cost_bag    = mysqli_real_escape_string($link, @$_POST["cost_bag"]);

$days = "";
$days .= (array_key_exists("day1", $_POST)) ? "1 " : "0 ";
$days .= (array_key_exists("day2", $_POST)) ? "1 " : "0 ";
$days .= (array_key_exists("day3", $_POST)) ? "1 " : "0 ";
$days .= (array_key_exists("day4", $_POST)) ? "1 " : "0 ";
$days .= (array_key_exists("day5", $_POST)) ? "1 " : "0 ";
$days .= (array_key_exists("day6", $_POST)) ? "1 " : "0 ";
$days .= (array_key_exists("day7", $_POST)) ? "1" : "0";

$bus = intval(@$_POST["bus"]);

$n = count($_POST["stops"]);

$added = "";

for ($i = 0; $i < $n; $i++) {
    $from   = mysqli_real_escape_string($link, @$_POST["stops"][$i]);
    $depart = mysqli_real_escape_string($link, @$_POST["depart"][$i]);

    if ($from == "")
        break; 

    $s = "";
    for ($j = $i + 1; $j < $n; $j++) {
        $to     = mysqli_real_escape_string($link, @$_POST["stops"][$j]);
        $arrive = mysqli_real_escape_string($link, @$_POST["arrive"][$j - 1]);

        if ($to == "")
            break;

        $q = 
            "INSERT INTO timetable SET " .
            "`from` = \"$from\", " .
            "`to` = \"$to\", " .
            "`no` = \"$no\", " .
            "`depart_date` = \"$depart\", " .
            "`arrive_date` = \"$arrive\", " .
            "`days` = \"$days\", " .
            "`cost_full` = \"$cost_full\", " .
            "`cost_stud` = \"$cost_stud\", " .
            "`cost_child` = \"$cost_child\", " .
            "`cost_bag` = \"$cost_bag\", " .
            "`stops` = \"$s\"";
        if ($bus != 0)
            $q .= ", `bus_id` = \"$bus\" ";
        $q .= "; ";

        mysqli_query($link, $q);
        // echo $q;
        // echo "\n";

        $added .= "$from -> $to <br/>";

        if ($s != "")
            $s .= ", ";
        $s .= $to;
    }
}

$q_from_dest = "SELECT * FROM busses ;";

$busses = array();
if ($result = mysqli_query($link, $q_from_dest)) {
    while ($row = mysqli_fetch_row($result)) {
        $busses[$row[0]] = $row[1] . ",  " . $row[2] . " мест, \"" . $row[3] . "\"";
    }
    mysqli_free_result($result);
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8; no-store">
    <script type="text/javascript" src="jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="add_data.js"></script>
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
</head>

<body>
<div class="container">
<div class="row">
<?php
if ($added != "") {
    echo "Добавлено:</br>";
    echo $added;
}
?>

<form action="add_data.php" method="post">
    <p>Номер:<input type="text" name="no"></p>

    <p>Дни:
    <input type="checkbox" name="day1" value="1">пн
    <input type="checkbox" name="day2" value="1">вт
    <input type="checkbox" name="day3" value="1">ср
    <input type="checkbox" name="day4" value="1">чт
    <input type="checkbox" name="day5" value="1">пт
    <input type="checkbox" name="day6" value="1">сб
    <input type="checkbox" name="day6" value="1">вс
    </p>


    <p>Цена полная:<input type="text" name="cost_full"></p>
    <p>Цена детская:<input type="text" name="cost_child"></p>
    <p>Цена студенч:<input type="text" name="cost_stud"></p>
    <p>Цена багажа:<input type="text" name="cost_bag"></p>

    <p>Автобус
        <select class="selectpicker" name="bus">
        <option value="0" selected>Не указан</option>";
 <?php
foreach ($busses as $i => $k) {
    echo "<option value=\"$i\">$k</option>";
}
 ?>
    </select><a href="add_bus.php">Добавить</a></p>

    <table class="table table-bordered" id="stops_table">
        <tr>
            <th>Остановка</th>
            <th>Прибытие</th>
            <th>Отправлениe</th>
        </tr>
        <tr>
            <td><input type="text" name="stops[]"></td>
            <td><input type="time" name="arrive[]" disabled=""></td>
            <td><input type="time" name="depart[]"></td>
        </tr>
        <tr>
            <td><input type="text" name="stops[]"></td>
            <td><input type="time" name="arrive[]"></td>
            <td><a href="javascript:void();" onclick="add_stop();"><center><i class="fa fa-plus" alt="Добавить остановку"></center></i></a></td>
        </tr>
    </table>

    <p><button type="submit" class="btn btn-success">Добавить</button></p>
</form>
</div>
</div>
</body>