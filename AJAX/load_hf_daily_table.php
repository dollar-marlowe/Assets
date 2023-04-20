<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["filter_type"])){
        $db= new Database();
        $db->connect();

        $filter_type = $_POST["filter_type"];
        $data = $_POST["data"]; 
        $data2= $_POST["data2"]; 
        $table_header = explode("%",$_POST["my_head"]);
        $table_columns = $_POST["my_columns"];
        $table_classes = explode("%",$_POST["my_classes"]);
        $chk = $_POST["chk"]=="true" ? true:false;
        $all_chk = $_POST["all_chk"]=="true" ? true:false;
        $today =date("Y-m-d");
        $sql ="";

        //switch case for filtration
        switch($filter_type){
            case "default":
                $sql = "Select $table_columns from hf_daily_log where log_date= '$today' order by log_time desc";
                break;

            case "weather":
                $sql = "Select $table_columns from hf_daily_log where log_date='$today' AND weather='$data'";
                break;

            case "signal":
                $sql = "Select $table_columns from hf_daily_log where log_date='$today' AND signal_status='$data'";
                break;

            case "time":
                $sql = "Select $table_columns from hf_daily_log where log_date='$today' AND log_time=$data";
                break;
            case "region":
                $sql = "Select $table_columns from trial_daily_log where log_date='$today' AND location_region=$data";
                break;
            case "date":
                $sql = "Select $table_columns from trial_daily_log where date_logged between '$data' AND '$data2'";
                break;

            case "open":
                $sql = "Select $table_columns from hf_daily_log where log_date='$today' AND station_name like '%$data%'";
                break;
        }
       // echo $sql;
        loadtable($sql, $table_header, $chk, $all_chk, $table_classes);

    }
    else{
        include "ajax_out.php";
      }

?>