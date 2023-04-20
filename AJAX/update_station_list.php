<?php
include "../ALGO/codes.php";

$value = $_GET['value'];

$db = new Database();
$db->connect();
$str = "SELECT distinct station_name,log_date,hf_log_id,log_time,station_assignee, weather, signal_status, hf_id FROM hf_daily_log where log_date='$today' order by log_time desc";
$data = $db->selectrows($str, 0);

echo json_encode($data);

?>





