<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["disaster"])){
        $disaster=removepecialchars($_POST["disaster"]);
        $id=decrypt($_POST["disaster_id"]);
        $category=$_POST["category"];
        $category_array=explode("%", $category);
        $myFile=$_POST["myFile"];
        $description=removepecialchars($_POST["description"]);
        $datestart=removepecialchars($_POST["datestart"]);
        $db = new Database();
        $db->connect();
        $sql="update disaster set
         name='".$disaster."',category='".$category_array[1]."',
         natureofdisaster='".$category_array[0]."',
         description='".$description."',datestarted='".$datestart."',file_upload='". $myFile."' where id=". $id;
          $msg=$db->insert($sql);
          if( $msg=="New record created!"){
            echo $msg;
          }
          else{
            echo $msg;
          }

     
    }
    
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>