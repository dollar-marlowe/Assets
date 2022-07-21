<?php
include "../ALGO/codes.php";

$command=$_REQUEST["command"];

    if($command=="session"){
        $name=$_REQUEST["name"];
       echo get_session($name);
    
    }

   


?>