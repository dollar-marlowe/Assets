<?php

    include "../ALGO/codes.php";

    if(isset($_POST["station_id"])){

        $station_id=        decrypt($_POST["station_id"]);
        $station_assignee=  removepecialchars($_POST["station_assignee"]);
        $get_date=          ($_POST["get_date"]);
        $get_time=          ($_POST["get_time"]);
        $weather_status=    ($_POST["weather_status"]);
        $signal_status=     ($_POST["signal_status"]);
        $hf_remarks=        ($_POST["hf_remarks"]);
        $hf_log_gem=        decrypt($_POST["log_gem"]);
        $hf_log_gem2=       decrypt($hf_log_gem);

        $db = new Database();
        $db->connect();

        $sql="update hf_daily set 
        station_name = ".$station_id.",
        station_assignee = '".$station_assignee."',
        log_date = '".$get_date."',
        log_time = '".$get_time."',
        weather = '".$weather_status."',
        signal_status= '".$signal_status."', 
        date_date= ".$get_date.",
        hf_remarks= '".$hf_remarks."'
        where hf_log_id=".$hf_log_gem2;

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
      include "ajax_out.php";
    }

?>
