<?php
require("config.php");

$link = db_connect();

$q_create_buses = 
    "CREATE TABLE IF NOT EXISTS `busses` (" .
    "   `id` int(11) NOT NULL AUTO_INCREMENT," .
    "   `model`  varchar(60) COLLATE utf8_bin DEFAULT NULL," .
    "   `volume` varchar(60) COLLATE utf8_bin DEFAULT NULL," .
    "   `owner`  varchar(60) COLLATE utf8_bin DEFAULT NULL," .
    "  PRIMARY KEY (`id`)" .
    ") ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ; ";

mysqli_query($link, $q_create_buses);

$q_create_timetable = 
    "CREATE TABLE IF NOT EXISTS `timetable` (" .
    "   `id` int(11) NOT NULL AUTO_INCREMENT," .
    "   `No` varchar(6) COLLATE utf8_bin NOT NULL," .

    "   `from` varchar(256) COLLATE utf8_bin NOT NULL," .
    "   `to` varchar(256) COLLATE utf8_bin NOT NULL," .

    "   `depart_date` time NOT NULL," .
    "   `arrive_date` time NOT NULL," .
    "   `days` varchar(128) COLLATE utf8_bin DEFAULT NULL," .

    "   `cost_full`  varchar(16) COLLATE utf8_bin DEFAULT NULL," .
    "   `cost_child` varchar(16) COLLATE utf8_bin DEFAULT NULL," .
    "   `cost_stud`  varchar(16) COLLATE utf8_bin DEFAULT NULL," .
    "   `cost_bag`   varchar(16) COLLATE utf8_bin DEFAULT NULL," .

    "   `bus_id` int(11) DEFAULT NULL," .

    "   `stops` varchar(256) COLLATE utf8_bin NOT NULL," .

    "  PRIMARY KEY (`id`), " .
    "  FOREIGN KEY (`bus_id`) REFERENCES busses(id)" .
    ") ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ; ";

mysqli_query($link, $q_create_timetable);

?>
