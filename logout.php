<?php
session_start();
$_SESSION["auth"]=false;
session_unset();
session_destroy();
header("Location:login");
?>