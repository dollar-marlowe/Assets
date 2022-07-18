<?php
include "../ALGO/codes.php";
if(isset($_POST["command"])){
    $command=$_POST["command"];

    if($command=="session"){
        get_session($name);
    }

    
}
?>