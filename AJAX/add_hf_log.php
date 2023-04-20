<?php

    include "../ALGO/codes.php";

    if(isset($_POST["station_name"])){

        $station_name=decrypt($_POST["station_name"]);
        $station_assignee=removepecialchars($_POST["station_assignee"]);
        $get_date=($_POST["get_date"]);
        $get_time=($_POST["get_time"]);
        $hf_remarks=removepecialchars($_POST["hf_remarks"]);
        $weather_status=($_POST["weather_status"]);
        $signal_status=($_POST["signal_status"]);

        $db = new Database();
        $db->connect();
        $sql="insert into hf_daily (station_name, station_assignee, log_date, log_time, weather, signal_status,date_date,hf_remarks) values
        ('".$station_name."', '".$station_assignee."', '".$get_date."', '".$get_time."', '".$weather_status."', '".$signal_status."', '".$get_date."','".$hf_remarks."')";

        $msg=$db->insert($sql);
          if( $msg=="New record created!"){
            echo $msg;
            //update_session($data);
         }else{
            echo $msg;
            //echo "%none";
              }   
    }
    else{
      include "ajax_out.php";
    }
    
?>