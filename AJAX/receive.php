<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["id"])){
        $id=$_POST["id"];
      
        $mydb = new Database();
        $mydb->connect();
        
        $today=date("Y-m-d H:m:s");

    
       
       
        $str="update assetowner set status='Available' where id=".$id.";update assets set `status`='Available' where id = (select assets_id from assetowner where id=".$id.");".
        "update transferhistory set status='Received', datereceived='".$today."' where asset_owner_id=".$id;
       
       if($mydb->insertmultiple($str)=="New records created!"){
           echo "Sucess";
       }else{
        echo "Error executing query!";
       }
       
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>