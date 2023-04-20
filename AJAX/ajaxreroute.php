<?php

$path= realpath(basename($_SERVER["SCRIPT_FILENAME"], '.php').".php");
$arr_path= explode("\\",$path);
$arr_size= count($arr_path);

if($arr_path[$arr_size-2]=="AJAX" && !isset($_SESSION["auth"])){
    header("Location:../login.php");
}
?>