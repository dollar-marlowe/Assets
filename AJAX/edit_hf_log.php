<?php

    include "../ALGO/codes.php";

    if(isset($_POST["station_name"])){

        $station_name=decrypt($_POST["station_name"]);
        $station_assignee=removepecialchars($_POST["station_assignee"]);
        $get_date=($_POST["get_date"]);
        $get_time=($_POST["get_time"]);
        $weather_status=($_POST["weather_status"]);
        $check_hf_id=decrypt($_POST["check_hf_id"]);
        $signal_status=($_POST["signal_status"]);

        $db = new Database();
        $db->connect();

        $sql="update hf_daily set 
        station_name = ".$check_hf_id.",
        station_assignee = '".$station_assignee."',
        log_date = '".$get_date."',
        log_time = '".$get_time."',
        weather = '".$weather_status."',
        signal_status= '".$signal_status."', 
        date_date= ".$get_date."
        where hf_log_id=".$station_name;

        $msg=$db->insert($sql);
          if($msg=="New record created!"){
            echo $msg;
            //update_session($data);
         }else{
            echo $msg;
            //echo "%none";
              }   
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>
