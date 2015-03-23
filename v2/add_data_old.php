<?php
require("config.php");
header('Content-Type: text/html; charset=utf-8');

$link = db_connect();

if (array_key_exists("from", $_POST) && $_POST["from"] != "" &&
    array_key_exists("to", $_POST) && $_POST["to"] != "" &&
    array_key_exists("no", $_POST) && $_POST["no"] != "" &&
    array_key_exists("depart_date", $_POST) && $_POST["depart_date"] != "" &&
    array_key_exists("arrive_date", $_POST) && $_POST["arrive_date"] != "" &&
    array_key_exists("days", $_POST) && $_POST["days"] != "")
{
    $from        = mysqli_real_escape_string($link, $_POST["from"]);
    $to          = mysqli_real_escape_string($link, $_POST["to"]);
    $no          = mysqli_real_escape_string($link, $_POST["no"]);
    $depart_date = mysqli_real_escape_string($link, $_POST["depart_date"]);
    $arrive_date = mysqli_real_escape_string($link, $_POST["arrive_date"]);
    $days        = mysqli_real_escape_string($link, $_POST["days"]);

    $q_add_entry =
        "INSERT INTO timetable(`from`, `to`, `no`, `depart_date`, `arrive_date`, `days`) " .
        "VALUES (\"" . 
            $from . "\", \"" .
            $to . "\", \"" .
            $no . "\", \"" .
            $depart_date . "\", \"" .
            $arrive_date . "\", \"" .
            $days . "\") ;";

    echo $q_add_entry;
    mysqli_query($link, $q_add_entry);

    // echo $from . " -> " . $to . "<br>";
}
?>

<form action="add_data.php" method="post">
    <p>From:</p>
    <p><input type="text" name="from"></p>
    <p>To:</p>
    <p><input type="text" name="to"></p>
    <p>Номер:</p>
    <p><input type="text" name="no"></p>
    <p>Время отправления:</p>
    <p><input type="text" name="depart_date"></p>
    <p>Время прибытия:</p>
    <p><input type="text" name="arrive_date"></p>
    <p>Дни:</p>
    <p><input type="text" name="days"></p>

    <!-- <p>Цена:</p> -->
    <!-- <p><input type="text" name="cost_full"></p> -->
    <!-- <p>Цена:</p> -->
    <!-- <p><input type="text" name="cost_child"></p> -->
    <!-- <p>Цена:</p> -->
    <!-- <p><input type="text" name="cost_stud"></p> -->
    <!-- <p>Цена:</p> -->
    <!-- <p><input type="text" name="cost_bag"></p> -->

    <p><input type="submit" value="Add"></p>
</form>

<?php
$q_find = 
    "SELECT * " .
    "FROM timetable ";

// echo $q_find;

if ($result = mysqli_query($link, $q_find)) {
    if (mysqli_num_rows($result) == 0) {
        echo "<br><br>None";
    } else {
        echo "<table border=1>\n";

        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>No</th>";
        echo "<th>from</th>";
        echo "<th>to</th>";
        echo "<th>Время отправления:</th>";
        echo "<th>Время прибытия:</th>";
        echo "<th>Дни</th>";
        echo "</tr>\n";

        while ($row = mysqli_fetch_row($result)) {
            $id = $row[0];
            $no = $row[1];
            $from = $row[2];
            $to = $row[3];
            $depart_date = $row[4];
            $arrive_date = $row[5];
            $days = $row[6];

            echo "<tr>";

            echo "<td>" . $id . "</td>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $from . "</td>";
            echo "<td>" . $to . "</td>";
            echo "<td>" . $depart_date . "</td>";
            echo "<td>" . $arrive_date . "</td>";
            echo "<td>" . $days . "</td>";

            echo "</tr>\n";
        }

        echo "</table>";
    }

    mysqli_free_result($result);
}
?>
