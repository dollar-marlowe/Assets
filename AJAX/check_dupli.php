<?php
    include "../ALGO/codes.php";

    if(isset($_POST["existing_station_name_log"])){
        $station_name = $_POST['existing_station_name_log'];
        $station_log_date = $_POST['existing_station_date_log'];
        $station_log_time = $_POST['existing_station_time_log'];

        
        $db = new Database();
        $db->connect();
        // $sql = "";

        // Check for duplicates
        $sql = "SELECT COUNT(*) AS count FROM trial_daily_log WHERE log_date = '$station_log_date' AND station_name = '$station_name' AND log_time = '$station_log_time'";
        $dupli = $db->select_one($sql,"count");
        // $count = $result->fetch_array()[0];


        if ($dupli >= 1) {
            // Duplicate found
            $message = "Duplicate found!";
            echo $message;
        } else{
            // No duplicate found
            echo $message;
        }
    } else {
        include "ajax_out.php";
    }
?>
