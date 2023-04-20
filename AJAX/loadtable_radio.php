<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["sql"])){
     
        $sql=$_POST["sql"];
        $header=$_POST["hdr"];
        $class=$_POST["class"];
        $check=$_POST["check"];
        $all=$_POST["all"];
        $func=$_POST["func"];
        $headers=explode("%",$header);
        $class=explode("%",$class);
       
        loadtable_radio($sql,$headers,$check,$all,$class, $func);
    }
    else{
        include "ajax_out.php";
      }

?>