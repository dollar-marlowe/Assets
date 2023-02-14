<?php

    include "../ALGO/codes.php";

    if(isset($_POST["station_name_grp"])){

      $db = new Database();
      $db->connect();

        $station_name = $_POST["station_name_grp"];
        $arr_name_grp  = explode(" % ", $station_name);  

        $station_assignee=removepecialchars($_POST["station_assignee"]);
        $get_date=($_POST["get_date"]);
        $get_time=($_POST["get_time"]);
        $weather_status=($_POST["weather_status"]);
        $signal_status=($_POST["signal_status"]);

        foreach($arr_name_grp as $data){
              $sql="insert into hf_daily (station_name, station_assignee, log_date, log_time, weather, signal_status, date_date) values
              ('".decrypt($data)."', '".$station_assignee."', '".$get_date."', '".$get_time."', '".$weather_status."', '".$signal_status."', '".$get_date."')";
              
              $msg=$db->insertmultiple($sql);
             
        }

        if( $msg=="New records created!"){
          echo $msg;
        }
        else{
          echo $msg;
        }
     
    }
    
    else{
        echo "<script>window.location='../login.php';</script>";
  
    }


?>