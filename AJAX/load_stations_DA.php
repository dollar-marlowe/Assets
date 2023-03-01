<?php
include "../ALGO/codes.php";
// Get the filter value from the query parameter
$filter = $_GET['filter'];

// Construct the SQL query using the filter value
$today = date("Y-m-d");
$str = "SELECT distinct hf_log_id, station_name, location_region FROM trial_daily_log WHERE log_date='$today' AND location_region='$filter'";

// Load the list of stations using the loadstationlist_region_log function
ob_start();
loadstationlist_region_log($str, "station_name", "location_region", "hf_log_id", "region");
$stationList = ob_get_clean();

// Return the list of stations as HTML
echo $stationList;
?>