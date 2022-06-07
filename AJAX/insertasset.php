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
        $type=removepecialchars($_POST["type"]);
        $today=date("y-m-d h:m:sa");
        $month=date("ymd");
        $aid=1;
        $str="select max(id) as id from assets";
        $data=$mydb->selectrows($str,1);
        if($data!=null){
            $aid=$data[0]["id"];
            $aid=intval($aid)+1;

        }
      

        $officeid=$_SESSION["officeid"];
        $officialid=$_SESSION["officialid"];
        $region=$_SESSION["region_id"];
        $province=$_SESSION["province_id"];
        $muni=  $_SESSION["muni_id"];
        $brgy=  $_SESSION["brgy_id"];
        $msg="";
        //this insertion in asset owner does not use the office dropdown as of yet will be adding access level for this
        if($type=="single"){
            $str="insert into assets (id, assetid,category,name,serial,IMEI,brand,model,provider,fundsource,donor,status,remarks,date)
            values (".$aid.",'".$month."-".$serial."','".$category."','".$aname."','".$serial."','".$ime."','".$brand."','".$model."','".$provider."','".$fundsource."',
            '".$donor."','".$status."','".$remarks."','".$today."')";
        }
        else{
            $str="insert into assets (id, assetid,category,name, status,remarks,date)
            values (".$aid.",'".$month."','".$category."','".$aname."',
            '".$status."','".$remarks."','".$today."')";
            $msg="Sub-inventory entry with asset enrty no ".$month." is now open for entry!";
        }
       
      
       $mydb->insert($str);

       $str="insert into assetowner (office_id,assets_id,date_aquired,status,reg_id,prov_id,muni_id,brgy_id) 
       values(".$officeid.",".$aid.",'".$today."','".$status."',".$region.",".$province.",".$muni.",".$brgy.")";
       $msg2=$mydb->insert($str);
       if($type=="single"){
           $msg=$msg2;
       }
       echo "<h4 id='msgaddasset'>".$msg."</h4>
       <input type='hidden' value='".$aid."' id='new_asset'>";
    }

?>