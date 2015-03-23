<?php
require("config.php");
header('Content-Type: text/html; charset=utf-8');
$link = db_connect();

$model          = mysqli_real_escape_string($link, @$_POST["model"]);
$volume         = intval(@$_POST["volume"]);
$owner          = mysqli_real_escape_string($link, @$_POST["owner"]);

$added = "";

if ($model != "" && $owner != "") {
    $q = 
        "INSERT INTO busses SET " .
        "`model`  = \"$model\", " .
        "`volume` = \"$volume\", " .
        "`owner`  = \"$owner\"; ";

    mysqli_query($link, $q);

    $added = "$model, $volume мест, \"$owner\"";
}

// $q_from_dest = "SELECT * FROM busses ;";
// 
// $busses = array();
// if ($result = mysqli_query($link, $q_from_dest)) {
//     while ($row = mysqli_fetch_row($result)) {
//         $busses[$row[0]] = $row[1] . ",  " . $row[2] . " мест, \"" . $row[3] . "\"";
//     }
//     mysqli_free_result($result);
// }

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8; no-store">
	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
</head>

<body>

<?php
if ($added != "")
    echo "Добавлен: ";
    echo $added . "<br>";
?>

<form action="add_bus.php" method="post">
    <p>Модель:<input type="text" name="model"></p>
    <p>Количество мест:<input type="text" name="volume"></p>
    <p>Владелец:<input type="text" name="owner"></p>

    <p><input type="submit" value="Add"></p>
</form>

</body>
</html>
