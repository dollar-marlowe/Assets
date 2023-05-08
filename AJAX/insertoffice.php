<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["name"])){
        $cat=removepecialchars($_POST["cat"]);
        $id=removepecialchars($_POST["id"]);
        $name=removepecialchars($_POST["name"]);
        $region=removepecialchars($_POST["reg"]);
        $prov=removepecialchars($_POST["prov"]);
        $muni=removepecialchars($_POST["muni"]);
        $brgy=removepecialchars($_POST["brgy"]);
        $lat=removepecialchars($_POST["lat"]);
        $long=removepecialchars($_POST["long"]);
        $operations=removepecialchars($_POST["operations"]);
        $today=date("Y-m-d H:m:s");     
        $str="";   
        if($operations=="ADD NEW"){
        $str="insert into office (office_name,category,region_id,province_id,muni_id,brgy_id,date ) values (
            '".$name."','".$cat."',".$region.",".$prov.",".$muni.",".$brgy.",'".$today."')";
        }
        if($operations=="SAVE EDITS"){
            $str="update office set office_name='".$name."',category='".$cat."',
            region_id=".$region.",
            province_id=".$prov.",
            muni_id=".$muni.",
            brgy_id=".$brgy.",
            date='".$today."',
            `lat`='". $lat."',
            `long`='". $long."' where id=".$id;
        }
       $mydb = new Database();
       $mydb->connect();
       echo "<h4 id='msg1' style='font:bold'>".$mydb->insert($str)."</h4>";
    }
    else{
        include "ajax_out.php";
      }

?>