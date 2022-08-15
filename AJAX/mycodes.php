<?php
include "../ALGO/codes.php";

if(isset($_REQUEST["command"])){
$command=$_REQUEST["command"];

    if($command=="session"){
        $name=$_REQUEST["name"];
       echo get_session($name);
    
    }

    if($command=="is_empty"){
        $str=$_REQUEST["sql"];
      $mydb = new Database();
      $mydb->connect();
      echo   $mydb->is_empty($str);

    }
    if($command=="enrcypt"){
        $data=$_REQUEST["values"];
        echo encrypt($data);

    }
    if($command=="dercypt"){
        $data=$_REQUEST["values"];
        echo dercypt($data);

    }
}/* 
else{
    echo "<script>window.location='../login.php';</script>";
} */

?>