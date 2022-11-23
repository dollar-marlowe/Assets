<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["id"])){

        $id=decrypt($_POST["id"]);
        //$cat=removepecialchars($_POST["cat"]);
        //
        //
        $str="insert into profilepic (officials_id,url) values (
            '".$name."','".$cat."',".$region.",".$prov.",".$muni.",".$brgy.",'".$today."')";
       $mydb = new Database();
       $mydb->connect();
       echo "<h4 id='msg1' style='font:bold'>".$mydb->insert($str)."</h4>";
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>