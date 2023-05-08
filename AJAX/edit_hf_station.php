<?php

    include "../ALGO/codes.php";

    if(isset($_POST["hf_name"])){
        $hf_id=decrypt($_POST["hf_id"]);
        $hf_name=removepecialchars($_POST["hf_name"]);
        $hf_code=removepecialchars($_POST["hf_code"]);
        $region=($_POST["region"]);
        $province=($_POST["province"]);
        $municipality=($_POST["municipality"]);
        $barangay=($_POST["barangay"]);
        $status=removepecialchars($_POST["status"]);
        $hf_lat=($_POST["hf_lat"]);
        $hf_long=($_POST["hf_long"]);
        $description=($_POST["description"]);

        $db = new Database();
        $db->connect();
        $sql="update hf_data set 
        station_name='".$hf_name."',
        station_code='".$hf_code."', 
        station_region=".$region.",
        station_province=".$province.",
        station_municipality=".$municipality.",
        station_barangay=".$barangay.",
        station_status='".$status."',
        station_lat='".$hf_lat."',
        station_long='".$hf_long."',
        station_desc='".$description."'
        where hf_id=".$hf_id;

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