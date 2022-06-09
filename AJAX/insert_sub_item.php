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
        $today=date("y-m-d h:m:sa");
        $month=date("ymdhms");
        //this insertion in asset owner does not use the office dropdown as of yet will be adding access level for this
        $str="insert into sub_assets (assets_id, assetnumber,category,name,serial,IMEI,brand,model,provider,fundsource,donor,status,remarks)
        values (".$assetid.",'".$month."-".$serial."','".$category."','".$aname."','".$serial."','".$ime."','".$brand."','".$model."','".$provider."','".$fundsource."',
        '".$donor."','".$status."','".$remarks."')";
        echo $mydb->insert($str);

    }

?>