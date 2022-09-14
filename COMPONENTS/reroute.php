<?php
 if(!isset($_SESSION["auth"]) || $_SESSION["auth"]!=true || $_SESSION["status"]!="active" ){
    header("Location:login.php");
  }


?>