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
        $to_receive=0;
        $sql="SELECT count('asset_id') as to_receive FROM owned_assets where  `status`='To Receive' and office_id=". $arr_data[0];     
        $to_receive=$mydb->select_one($sql,"to_receive");
        $total=intval($avail)+intval($deployed)+intval($to_receive);
        echo $avail."%".$deployed."%".$total."%".$to_receive;

    }
    else{
        include "ajax_out.php";
      }

?>  