<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["reg_data"])){
       
        $reg_data=decrypt($_POST["reg_data"]);
        $arr_data=explode("%",$reg_data);//region id and anme in array
        $mydb = new Database();
        $mydb->connect();
        //$sql=
        $cols1=array("id","lat","long");
        $str="SELECT * FROM assets.offices_latlong where region_id=". $arr_data[0];
        loadropdown_encrypt($str,$cols1,"office_name","below",0);
        echo"%".$arr_data[1]."%".$arr_data[2]."%".$arr_data[3];

    }
    else{
        include "ajax_out.php";
      }

?>  