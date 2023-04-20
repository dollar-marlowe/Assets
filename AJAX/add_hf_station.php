<?php

    include "../ALGO/codes.php";

    if(isset($_POST["hf_name"])){
    
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
        $sql="insert into hf_data (station_name, station_code, station_region, station_province, station_municipality, station_barangay, station_status, station_lat, station_long, station_desc) values
        ('".$hf_name."', '".$hf_code."', ".$region.", ".$province.", ".$municipality.", ".$barangay.", '".$status."', '".$hf_lat."', '".$hf_long."', '".$description."')";

        $msg=$db->insert($sql);
          if( $msg=="New record created!"){
            echo $msg;
            //update_session($data);
         }else{
            echo $msg;
            //echo "%none";s
              }   
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>