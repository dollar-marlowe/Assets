<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["stat"])){
        $stat=$_POST["stat"];//level if for either regional or national
        $office=decrypt($_POST["office"]);
        $arr_data=explode("%",$office);
        $mydb = new Database();
        $mydb->connect();
        $str="";

        if($stat=="available"){
            $str="";
        }else{
            $str="SELECT category,brgy_id,lat,`long`, COUNT(*) FROM deployed_assets_loc where id=".$arr_data[0]." group by  category";
            echo get_rows_string_delimeter($str,"|","%");
        }
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>