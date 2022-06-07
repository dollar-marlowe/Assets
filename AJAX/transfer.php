<?php
    include "../ALGO/codes.php";
    if(isset($_POST["assetowned"])){
        $assetowned=$_POST["assetowned"];
        $office=$_POST["office"];
        $to=$_POST["to"];
        $remarks=removepecialchars($_POST["remarks"]);
        
        $mydb = new Database();
        $mydb->connect();
        $etc_disaster=0;
        $today=date("Y-m-d");
       $data=$mydb->select("SELECT * FROM current_etc c;");
        if($data!=null){
            $row=mysqli_fetch_assoc($data);
            $etc_disaster=$row["id"];
            $status="Transfered under ".$row["etc_act_name"];
        }
        else{
            $status="Transfered under normal circumstances";
        }
        $assetid=0;
        $asset_data=$mydb->select("SELECT asset_id FROM owned_assets where ownerid=".$assetowned);
        if($asset_data!=null){
            $row=mysqli_fetch_assoc($asset_data);
            $assetid=$row["asset_id"];
          
        }
       
        $str="insert into transferhistory (asset_owner_id,`from`,`to`,datetransfered,reason,etcdisaster,status)
         values(".$assetowned.",".$office.",".$to.",'".$today."','".$remarks."',".$etc_disaster.",'To Receive');
        update assetowner set office_id=".$to.", status='To Receive' where id=".$assetowned.";update assets set `status`='To Receive' where id=".$assetid;;
        $msg=$mydb->insertmultiple($str);
        if( $msg=="New records created!"){
            echo "<h4 id='msg1' style='font:bold'>Transfered!</h4>";
        }
        else{
            echo "<h4 id='msg1' style='font:bold'>".$msg."!</h4>";
        }
      
       
    }

?>