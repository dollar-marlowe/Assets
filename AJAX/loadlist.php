<?php

    include "../ALGO/codes.php";
    if(isset($_POST["sql"])){
     
        $sql=$_POST["sql"];
        $cols=$_POST["cols"];
        $cols=explode("%",$cols);
        $head=$_POST["head"];
        $label=$_POST["label"];
        loadlist($sql,$cols,$head,$label);
    }

?>