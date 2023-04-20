<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["sql"])){
     
        $sql=$_POST["sql"];
        $col1=$_POST["col1"];
        $col2=$_POST["col2"];
        $from=$_POST["from"];
       
        loadropdown($sql,$col1,$col2,$from);
    }
    else{
        include "ajax_out.php";
      }

?>