<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["id"])){

        $officials_id=decrypt($_POST["id"]);
        $destination=$_POST["destination"];
        //$cat=removepecialchars($_POST["cat"]);
        
        $str="insert into profilepic (officials_id,url) values (".$officials_id.",'".$destination."')";
           
       $mydb = new Database();
       $mydb->connect();
       echo "<h4 id='msg1' style='font:bold'>".$mydb->insert($str)."</h4>";
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>