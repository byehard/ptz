<?php
require("config.php");

$link = db_connect();

if (!array_key_exists("from", $_GET) || $_GET["from"] == "")
    exit();
if (!array_key_exists("to", $_GET) || $_GET["to"] == "")
    exit();

$from = mysqli_real_escape_string($link, $_GET["from"]);
$to = mysqli_real_escape_string($link, $_GET["to"]);

$q_find = 
    "SELECT " . 
        "timetable.id, `No`, `from`, `to`, " . 
        "TIME_FORMAT(`depart_date`, '%H:%i'), TIME_FORMAT(`arrive_date`, '%H:%i'), " .
        "`days`, `cost_full`, `cost_child`, `cost_stud`, `cost_bag`, `bus_id`, `stops`, " .
        "`model`, `volume`, `owner` " .
    "FROM timetable " .
    "LEFT JOIN busses ON timetable.bus_id = busses.id " .
    "WHERE 1 " .
    "AND `from` LIKE '". $from ."' " .
    "AND `to`   LIKE '". $to   ."' " .
    "ORDER BY `depart_date` ASC;";

if (!($result = mysqli_query($link, $q_find)) || (mysqli_num_rows($result) <= 0)) {
    echo "[]";
    exit();
}

$data = array();

while ($row = mysqli_fetch_row($result)) {
    $data[] = $row;
}

mysqli_free_result($result);

echo json_encode($data);
?>
