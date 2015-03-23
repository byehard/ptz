<?php
require("config.php");
header('Content-Type: text/html; charset=utf-8');
$day_str = array("пн", "вт", "ср", "чт", "пт", "сб", "вс");
$link = db_connect();

$action     = @$_GET["act"];
$id         = intval(@$_GET["id"]);

$res = "";
if ($action == "del" && $id != 0) {
    $q = "DELETE FROM timetable WHERE `id` = $id ;";
    mysqli_query($link, $q);

    $res = "$id deleted <br>";
} else if ($action == "upd" && $id != 0) {
    $no          = mysqli_real_escape_string($link, @$_POST["no"]);

    $cost_full   = mysqli_real_escape_string($link, @$_POST["cost_full"]);
    $cost_child  = mysqli_real_escape_string($link, @$_POST["cost_child"]);
    $cost_stud   = mysqli_real_escape_string($link, @$_POST["cost_stud"]);
    $cost_bag    = mysqli_real_escape_string($link, @$_POST["cost_bag"]);

    $stops       = mysqli_real_escape_string($link, @$_POST["stops"]);
    $bus         = intval(@$_POST["bus"]);

    $from        = mysqli_real_escape_string($link, @$_POST["from"]);
    $to          = mysqli_real_escape_string($link, @$_POST["to"]);
    $depart      = mysqli_real_escape_string($link, @$_POST["depart_date"]);
    $arrive      = mysqli_real_escape_string($link, @$_POST["arrive_date"]);

    $days = "";
    for ($i = 1; $i <= 7; $i++) {
        $days .= (array_key_exists("day$i", $_POST)) ? "1 " : "0 ";
    }

    if ($no != "" && $from != "" && $to != "") {
        $q = 
            "UPDATE timetable SET " .
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
            "`stops` = \"$stops\"";
        if ($bus != 0)
            $q .= ", `bus_id` = \"$bus\" ";
        $q .= "WHERE `id` = $id ;";

        mysqli_query($link, $q);
        // echo $q;
        // echo "\n";

        $res = "$id updated <br>";
    }
}

$q_busses = "SELECT * FROM busses ;";

$busses = array();
if ($result = mysqli_query($link, $q_busses)) {
    while ($row = mysqli_fetch_row($result)) {
        $busses[$row[0]] = $row[1] . ",  " . $row[2] . " мест, \"" . $row[3] . "\"";
    }
    mysqli_free_result($result);
}

$q_bus_no = "SELECT `no` FROM timetable GROUP BY `no`;";

$bus_no = array();
if ($result = mysqli_query($link, $q_bus_no)) {
    while ($row = mysqli_fetch_row($result)) {
        $bus_no[] = $row[0];
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
<div class="container-fluid">
<?php
if ($res != "")
    echo $res;
?>

<form action="upd_data.php" method="GET">
Номер автобуса:
<select name="bus_no">
    <option value="0">Не указан</option>
<?php
foreach ($bus_no as $no){
    if (array_key_exists("bus_no", $_GET) && $no == $_GET["bus_no"])
        echo "<option value=\"$no\" selected>$no</option>";
    else 
        echo "<option value=\"$no\">$no</option>";
}
?>
</select>
<input type="submit" value="Find">
</form>

<?php
$bus_no = mysqli_real_escape_string($link, @$_GET["bus_no"]);

$q_find = 
    "SELECT * " .
    "FROM timetable ";
if ($bus_no != 0)
    $q_find .= "WHERE `No` = \"$bus_no\" ";
$q_find .= ";";

if ($result = mysqli_query($link, $q_find)) {
    if (mysqli_num_rows($result) == 0) {
        echo "<br><br>None";
    } else {
        echo "<div class=\"table-responsive\">";
        echo "<table class=\"table-responsive\">\n";

        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>Номер</th>";
        echo "<th>Откуда</th>";
        echo "<th>Куда</th>";
        echo "<th>Отправлениe:</th>";
        echo "<th>Прибытиe:</th>";
        echo "<th>Дни</th>";
        echo "<th>Цена полная</th>";
        echo "<th>Цена десткая</th>";
        echo "<th>Цена студенч</th>";
        echo "<th>Цена багаж</th>";
        echo "<th>Автобус</th>";
        echo "<th>Остановки</th>";
        echo "<th></th>";
        echo "</tr>\n";

        while ($row = mysqli_fetch_row($result)) {
            $id = $row[0];
            $no = $row[1];
            $from = $row[2];
            $to = $row[3];
            $depart_date = $row[4];
            $arrive_date = $row[5];
            $cost_full = $row[7];
            $cost_child = $row[8];
            $cost_stud = $row[9];
            $cost_bag = $row[10];
            $bus = $row[11];
            $stops = $row[12];

            $days = explode(" ", $row[6]);


            echo "<tr>";

            echo "<form action=\"upd_data.php?act=upd&id=$id&bus_no=$bus_no\" method=\"POST\">";
            echo "<td>" . $id . "</td>";
            echo "<td><input type=\"text\" name=\"no\" value=\"$no\"></td>";
            echo "<td><input type=\"text\" name=\"from\" value=\"$from\"></td>";
            echo "<td><input type=\"text\" name=\"to\" value=\"$to\"></td>";
            echo "<td><input type=\"text\" name=\"depart_date\" value=\"$depart_date\"></td>";
            echo "<td><input type=\"text\" name=\"arrive_date\" value=\"$arrive_date\"></td>";

            echo "<td>";
            echo "<div style=\"width:300px\">";
            for ($i = 1; $i <= 7; $i++) {
                echo "<input type=\"checkbox\" name=\"day$i\" value=\"1\"";
                if ($days[$i - 1])
                    echo " checked ";
                echo ">" . $day_str[$i - 1];
            }
            echo "</div>";
            echo "</td>";

            echo "<td><input type=\"text\" name=\"cost_full\" value=\"$cost_full\"></td>";
            echo "<td><input type=\"text\" name=\"cost_child\" value=\"$cost_child\"></td>";
            echo "<td><input type=\"text\" name=\"cost_stud\" value=\"$cost_stud\"></td>";
            echo "<td><input type=\"text\" name=\"cost_bag\" value=\"$cost_bag\"></td>";
            
            echo "<td><select name=\"bus\">\n";

            if ($bus == "")
                echo "<option value=\"0\">Не указан</option>";
            foreach ($busses as $i => $k) {
                if ($i == $bus)
                    echo "<option value=\"$i\" selected>$k</option>";
                else 
                    echo "<option value=\"$i\">$k</option>";
            }
            echo "</select></td>";
            echo "<td><input type=\"text\" name=\"stops\" value=\"$stops\"></td>";
            echo "<td>";
            echo "<a href=\"upd_data.php?act=del&id=$id\">Delete</a>";
            echo "<input type=\"submit\" value=\"Update\">";
            echo "</td>";

            echo "</form>";

            echo "</tr>\n";
        }

        echo "</table></div>";
    }

    mysqli_free_result($result);
}
?>
</div>
</body>