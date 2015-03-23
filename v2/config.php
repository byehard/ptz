<?php
$cfg["mysql_host"] = "localhost";
$cfg["mysql_user"] = "mamontov";
$cfg["mysql_password"] = "SO31eXS6GW9h";
$cfg["mysql_db_name"] = "mamontov";

function db_connect()
{
	global $cfg;

	$link = mysqli_connect($cfg["mysql_host"], $cfg["mysql_user"], $cfg["mysql_password"], $cfg["mysql_db_name"]);
	if (mysqli_connect_errno()) {
		printf("Unable to connect to db: %s\n", mysqli_connect_error());
		exit();
	}

    mysqli_set_charset($link, "utf8");

	return $link;
}
?>
