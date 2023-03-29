
<?php
  include "../ALGO/codes.php";

  if(isset($_POST["filter_type"])){
    $db= new Database();
    $db->connect();
    $sql ="";
    $filter_type = $_POST["filter_type"];
    $today = date("Y-m-d");
    
    switch($filter_type){
      case "all":
          $sql = "SELECT station_name, region, station_lat, station_long, station_status FROM hf_locations ORDER BY station_status DESC";
          break;

      case "all_2":
        $sql = "SELECT station_name, location_region, station_lat, station_long, weather, signal_status FROM trial_daily_log WHERE log_date='$today' ORDER BY station_status DESC";
          break;
      }

   
    header('Content-Type: application/json'); // set content type header to JSON
    $stations = load_hf_map_2($db, $sql);
    if ($stations) {
      echo json_encode($stations); // encode the stations array as a JSON string
    } else {
      echo json_encode(array()); // return an empty array if there are no stations
    }

}
else{
    echo "<script>window.location='../login.php';</script>";
}

?>