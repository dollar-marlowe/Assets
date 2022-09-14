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
    if($command=="encrypt"){
        $data=$_REQUEST["values"];
        echo encrypt(removepecialchars($data));

    }
    if($command=="decrypt"){
        $data=$_REQUEST["values"];
        echo decrypt($data);

    }
   if($command=="update"){
        $mydb = new Database();
        $mydb->connect();

        $data=$_REQUEST["values"];
        $each_data=explode("|",$data);
        $str="update login set status='change_pass' where official_id=".each-data[0];
        if($mydb->insert($str)=="New record created!"){
            if(sizeof($each_data)>2){
                $new_str=decrypt($each_data[1]).$each_data[2];
            }
        
         

        }else{
            echo "";
        }
       // echo dercypt($data);

    } 
   
}
if($command=="check_url"){
    $data=$_REQUEST["values"];
    $pattern="/<script>/i";
    if(preg_match($pattern,$data)){
      echo "true";
    }else{
        echo "";
    }
}

/* 
else{
    echo "<script>window.location='../login.php';</script>";
} */
//echo "2";
?>