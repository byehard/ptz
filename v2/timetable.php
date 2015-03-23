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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8; no-store">
	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="timetable.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript">
$('.selectpicker').selectpicker({
      style: 'btn-info',
      size: 4
  });
</script>
	<script type="text/javascript" src="js/bootstrap-select.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
</head>

<body>
    <p>
    Откуда:
    <select class="selectpicker" data-live-search="true" id="from_sel" onchange="fetch_to_dest();">
<?php
foreach ($from_dest as $d) 
if ($d == "Петрозаводск")
echo "<option selected>" . $d ."</option>";
else
echo "<option>" . $d ."</option>";
?>
    </select></div>
    </p>

    <p>
    Куда:
    <select class="selectpicker" id="to_sel" onchange="fetch_tbl();"></select>
    </p>

    <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>

  <!-- Table -->
  <table class="table" id="tbl">
  </table>
</div>

</body>
</html>

