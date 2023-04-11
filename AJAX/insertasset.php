<?php
    
    include "../ALGO/codes.php";
    if(isset($_POST["aname"])){
        $mydb = new Database();
        $mydb->connect();

        $aname=removepecialchars($_POST["aname"]);
        $category=removepecialchars($_POST["category"]);
        $status=removepecialchars($_POST["status"]);
        $brand=removepecialchars($_POST["brand"]);
        $model=removepecialchars($_POST["model"]);
        $serial=removepecialchars($_POST["serial"]);
        $ime=removepecialchars($_POST["ime"]);
        $provider=removepecialchars($_POST["provider"]);
        $fundsource=removepecialchars($_POST["fundsource"]);
        $donor=removepecialchars($_POST["donor"]);
        $office=removepecialchars($_POST["office"]);
        $remarks=removepecialchars($_POST["remarks"]);
        $set_info=removepecialchars($_POST["set"]);
        $type=removepecialchars($_POST["type"]);
        $new_asset=$_POST["new_asset"];
        $today=date("y-m-d H:m:s");
        $month=date("ymdhms");
        $aid=1;

        $officeid=$_SESSION["officeid"];
        $officialid=$_SESSION["officialid"];
        $region=$_SESSION["region_id"];
        $province=$_SESSION["province_id"];
        $muni=  $_SESSION["muni_id"];
        $brgy=  $_SESSION["brgy_id"];
      
        //this is for slectign the max id
        $str="select max(id) as id from assets";
        $data=$mydb->selectrows($str,1);
        try{
    
        if($data!=null){
            $aid=$data[0]["id"];
            $aid=intval($aid)+1;
         }
        } catch(Exception  $e){
            $aid=1;
        }

         $qrcode="1";
         $str="select max(qrcode) as id from assetowner where office_id=".$officeid;

         try{
            $data=$mydb->selectrows($str,1);
         }
         catch(Exception  $e){
            $data=null;
        }
        
         if($data!=null){
             $qrcode=$data[0]["id"]; 
             $qrint=(int)get_string_at($qrcode,3);
             $qrint++;
             $qrcode="".$qrint;
            // $qrcode= substr(str_repeat(0, 11).$qrint, - 11);
         }
         
        $cat_code=abreviate( $category,2);

     

        $msg="";
        $valids="";
        $qrcode=officecode()."-".$cat_code."-". $set_info."-". $qrcode;
        if($new_asset!=0){
            $valids=$new_asset."/".$aid;
        }
        else{
            $valids="".$aid;
        }
        //this insertion in asset owner does not use the office dropdown as of yet will be adding access level for this
        if($type=="single"){
            $str="insert into assets (id, assetid,category,name,serial,IMEI,brand,model,provider,fundsource,donor,status,remarks,date,cat_code)
            values (".$aid.",'". $officeid."-".$cat_code."-".$serial."','".$category."','".$aname."','".$serial."','".$ime."','".$brand."','".$model."','".$provider."','".$fundsource."',
            '".$donor."','".$status."','".$remarks."','".$today."','". $cat_code."')";
        }
        else{
            $str="insert into assets (id, assetid,category,name, status,remarks,date,cat_code)
            values (".$aid.",'". $officeid."-".$cat_code."-".$serial."','".$category."','".$aname."',
            '".$status."','".$remarks."','".$today."','". $cat_code."')";
            $msg="Sub-inventory entry with asset enrty no ".$month." is now open for entry!";
        }
       
      
       $mydb->insert($str);

       $str="insert into assetowner (office_id,assets_id,date_aquired,status,reg_id,prov_id,muni_id,brgy_id,qrcode) 
       values(".$officeid.",".$aid.",'".$today."','".$status."',".$region.",".$province.",".$muni.",".$brgy.",'". $qrcode."')";
       $msg2=$mydb->insert($str);
       if($type=="single"){
           $msg=$msg2;
       }
       echo $msg."%".$valids;
      
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>