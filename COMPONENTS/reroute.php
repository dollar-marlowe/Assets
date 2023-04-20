<?php
 if(!isset($_SESSION["auth"]) || $_SESSION["auth"]!=true || $_SESSION["status"]!="active" ){
    header("Location:login.php");
  }

  function auth_validatation($level){
    if($_SESSION["auth_level"]<$level && isset($_SESSION["auth"])){
     // echo "
    //  <script>alert('ok');</script>";
      header("Location:home.php");
    }
    else{
     // echo "
     // <script>alert('".$_SESSION["auth_level"]."');</script>";
    }
  }
  


?>