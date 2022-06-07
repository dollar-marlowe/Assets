<?php
    include "../ALGO/codes.php";
    if(isset($_POST["name"])){
        $cat=removepecialchars($_POST["cat"]);
        $name=removepecialchars($_POST["name"]);
        $region=removepecialchars($_POST["reg"]);
        $prov=removepecialchars($_POST["prov"]);
        $muni=removepecialchars($_POST["muni"]);
        $brgy=removepecialchars($_POST["brgy"]);
        $today=date("Y-m-d");
        $str="insert into office (office_name,category,region_id,province_id,muni_id,brgy_id,date) values (
            '".$name."','".$cat."',".$region.",".$prov.",".$muni.",".$brgy.",'".$today."')";
       $mydb = new Database();
       $mydb->connect();
       echo "<h4 id='msg1' style='font:bold'>".$mydb->insert($str)."</h4>";
    }

?>