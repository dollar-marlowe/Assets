<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["sql"])){
     
        $sql=$_POST["sql"];
        $col=$_POST["id"];
       total($sql,$col);
    }else{
        echo "<script>window.location='../login.php';</script>";
    }

?>