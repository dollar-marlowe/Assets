<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["disaster"])){
     
        $disaster=decrypt($_POST["disaster"]);
        $header=$_POST["header"];
        $class=$_POST["class"];
        $etc=$_POST["etc"];
        $headers=explode("%",$header);
        $class=explode("%",$class);
        $sql="SELECT 
        id,trim(area),scale,date_start,impact,epr_protocol,`status` 
        FROM disaster_affected_areas where disaster_id=".$disaster." and etc_disaster_id=".$etc;
        loadtable($sql,$headers,true,false,$class);
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>