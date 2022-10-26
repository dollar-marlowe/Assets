<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["assetowned"])){
        $assetowned=$_POST["assetowned"];
        $regid=$_POST["regid"];
        $provid=$_POST["provid"];
        $muni=$_POST["muni"];
        $brgy=$_POST["brgy"];
        $remarks=removepecialchars($_POST["remarks"]);
        $status="";
        $reason="";
        $mydb = new Database();
        $mydb->connect();
        $etc_disaster=0;
        $today=date("Y-m-d");
       $data=$mydb->select("SELECT * FROM current_etc;");
        if($data!=null){
            $row=mysqli_fetch_assoc($data);
            $etc_disaster=$row["id"];
            $status="deployed under ".$row["etc_act_name"];
        }
        else{
            $status="deployed under normal circumstances";
        }
        $assetid=0;
        $asset_data=$mydb->select("SELECT asset_id FROM owned_assets where ownerid=".$assetowned);
        if($asset_data!=null){
            $row=mysqli_fetch_assoc($asset_data);
            $assetid=$row["asset_id"];
          
        }
        else{
            $assetid=0;
        }
       
       
        $str="insert into deployment (asset_owner_id,reg_id,prov_id,muni_id,brgy_id,status,datemobilized,etcdisaster_id,remarks,deployment_stat)
        values (".$assetowned.",".$regid.",".$provid.",".$muni.",".$brgy.",'".$status."','".$today."',".$etc_disaster.",'".$remarks."','Active');
        update assetowner set status='Deployed' where id=".$assetowned.";update assets set `status`='Deployed' where id=".$assetid;
       $msg=$mydb->insertmultiple($str);
       if($msg=="New records created!"){
        $msg="Asset(s) Deployed";
       }
       echo $msg;
       
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>