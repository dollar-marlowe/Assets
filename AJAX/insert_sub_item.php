<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["asset"])){
        $mydb = new Database();
        $mydb->connect();
        $assetid= removepecialchars($_POST["asset_id"]);
        $aname=removepecialchars($_POST["asset"]);
        $category=removepecialchars($_POST["cat"]);
        $status=removepecialchars($_POST["status"]);
        $brand=removepecialchars($_POST["brand"]);
        $model=removepecialchars($_POST["model"]);
        $serial=removepecialchars($_POST["serial"]);
        $ime=removepecialchars($_POST["ime"]);
        $provider=removepecialchars($_POST["provider"]);
        $fundsource=removepecialchars($_POST["fundsource"]);
        $donor=removepecialchars($_POST["donor"]);
        $remarks=removepecialchars($_POST["remarks"]);
        $set_info=removepecialchars($_POST["set"]);
        $subqty=$_POST["subqty"];
        $today=date("y-m-d H:m:s");
        $month=date("ymdhms");
        $officeid=$_SESSION["officeid"];


        $qrcode="1";
        $str="select qrcode from assetowner where assets_id=".$assetid;
        $data=$mydb->selectrows($str,1);
        if($data!=null){
            $qrcode=$data[0]["qrcode"]; 
            $qrint=(int)get_string_at($qrcode,3);
            $qrcode=$qrint."";
           
        }
        

       $cat_code=abreviate( $category,2);
       $qrcode=officecode()."-".$cat_code."-". $set_info."-". $qrcode."-".$subqty;
        //this insertion in asset owner does not use the office dropdown as of yet will be adding access level for this
        $str="insert into sub_assets (assets_id, assetnumber,category,name,serial,IMEI,brand,model,provider,fundsource,donor,status,remarks,cat_code,qrcode)
        values (".$assetid.",'". $officeid."-".$cat_code."-".$serial."','".$category."','".$aname."','".$serial."','".$ime."','".$brand."','".$model."','".$provider."','".$fundsource."',
        '".$donor."','".$status."','".$remarks."','". $cat_code."','". $qrcode."')";
        echo $mydb->insert($str);

    }
    else{
        include "ajax_out.php";
      }

?>