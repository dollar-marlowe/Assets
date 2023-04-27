<?php

    include "../ALGO/codes.php";
    //this ajax is for loading dropdowns whose sql comman and id are encrypted
    //USES:
    //thbis has been used in risk_managhement for loading disater affected logs
    
    if(isset($_POST["id"])){
     
        $id=decrypt($_POST["id"]);
        $sql=decrypt($_POST["sql"]);
        $col1=removepecialchars($_POST["col1"]);
        $col2=removepecialchars($_POST["col2"]);
        $from=removepecialchars($_POST["from"]);
        $sql.="".$id;
       
        loadropdown($sql,$col1,$col2,$from);
        //echo "<option>".$sql."</option>";
    }
    else{
        include "ajax_out.php";
      }

?>