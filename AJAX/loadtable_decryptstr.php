<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["sql"])){
     
        $sql=decrypt($_POST["sql"]);
        $header=decrypt($_POST["hdr"]);
        $class=$_POST["class"];
        $check=$_POST["check"];
        $all=$_POST["all"];
        $headers=explode("%",$header);
        $class=explode("%",$class);
       
        loadtable($sql,$headers,$check,$all,$class);
    }
    else{
        include "ajax_out.php";
      }

?>