<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["office"])){
       
        $office=decrypt($_POST["office"]);
        $arr_data=explode("%",$office);//office_id and  officename in an array
        $mydb = new Database();
        $mydb->connect();
        $sql="SELECT count(category) as category FROM assets.avail_assets_loc where id=". $arr_data[0];
        $avail=$mydb->select_one($sql,"category");
        $sql="SELECT  count(category) as category FROM assets.deployed_assets_loc where id=". $arr_data[0];     
        $deployed=$mydb->select_one($sql,"category");
        $total=intval($avail)+intval($deployed);
        echo $avail."%".$deployed."%".$total;

    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>  