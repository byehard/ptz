<?php
require("config.php");

$link = db_connect();

if (!array_key_exists("from", $_GET) || $_GET["from"] == "")
    exit();

$from = mysqli_real_escape_string($link, $_GET["from"]);

$q_destinations = "SELECT `to` FROM timetable WHERE `from` = \"" . $from ."\" GROUP BY `to`;";

$destinations = array();
if ($result = mysqli_query($link, $q_destinations)) {
    while ($row = mysqli_fetch_row($result)) {
        $destinations[] = $row[0];
    }
    mysqli_free_result($result);
}

echo json_encode($destinations);
