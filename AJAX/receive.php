<?php
    include "../ALGO/codes.php";
    if(isset($_POST["assetowned"])){
        $assetowned=$_POST["assetowned"];
      
        $mydb = new Database();
        $mydb->connect();
        
        $today=date("Y-m-d");

        $assetid=0;
        $asset_data=$mydb->select("SELECT asset_id FROM owned_assets where ownerid=".$assetowned);
        if($asset_data!=null){
            $row=mysqli_fetch_assoc($asset_data);
            $assetid=$row["asset_id"];
          
        }
        
        $transferid=0;
        $deploy_data=$mydb->select("SELECT id FROM transferhistory where  asset_owner_id=".$assetowned."and deployment_stat='To Receive'");
        if($deploy_data!=null){
            $row=mysqli_fetch_assoc($asset_data);
            $transferid=$row["id"];
          
        } 
      
       
        $str="update assetowner set status='Available' where id=".$assetowned.";update assets set `status`='Available' where id=".$assetid.";".
        "update transferhistory set status='Received', datereceived='".$today."' where id=".$transferid;
       
       if($mydb->insertmultiple($str)=="New records created!"){
           echo "<p id='tblmsg'>Inventory item(s) is/are now received and tagged available  </p>";
       }else{
        echo "Error executing query!";
       }
       
    }

?>