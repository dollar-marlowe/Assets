<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["stat"])){
        $stat=$_POST["stat"];//level if for either regional or national
        $office=decrypt($_POST["office"]);
        $arr_data=explode("%",$office);//office_id officename 
        $mydb = new Database();
        $mydb->connect();
        $str="";
        
        if($stat=="available"){
            $str="";
        }else{
            $str="SELECT  GROUP_CONCAT( `category` SEPARATOR ', ') as category  , GROUP_CONCAT( `serial` SEPARATOR ', ') as  `serial`, brgy_id,lat,`long`, count(*) as `count` FROM deployed_assets_loc i where id=". $arr_data[0]." group by  brgy_id order by brgy_id";
            $cols=array("brgy_id", "lat", "long", "category", "serial", "count");
            echo get_rows_implode($str,"@","%",$cols);
        }
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>  