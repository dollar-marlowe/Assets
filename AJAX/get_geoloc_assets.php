<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["level"])){
        $level=$_POST["level"];//level if for either regional or national
      
        $mydb = new Database();
        $mydb->connect();
        
        $str="";

        switch($level){
            case 1:
            break;

        }
        $str="update assetowner set status='Available' where id=".$assetowned.";update assets set `status`='Available' where id=".$assetid.";".
        "update transferhistory set status='Received', datereceived='".$today."' where id=".$transferid;
       
       if($mydb->insertmultiple($str)=="New records created!"){
           echo "<p id='tblmsg'>Inventory item(s) is/are now received and tagged available  </p>";
       }else{
        echo "Error executing query!";
       }
       
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>