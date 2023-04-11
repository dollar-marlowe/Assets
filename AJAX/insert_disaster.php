<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["disaster"])){
        $disaster=removepecialchars($_POST["disaster"]);
        $category=$_POST["category"];
        $category_array=explode("%", $category);
        $myFile=$_POST["myFile"];
        $description=removepecialchars($_POST["description"]);
        $time=date("H:m:s"); 
        $datestart=removepecialchars($_POST["datestart"])." ".$time;
        $db = new Database();
        $db->connect();
        $sql="Insert into disaster 
         (name,category,natureofdisaster,description,datestarted,status,file_upload)
          values('".$disaster."','".$category_array[1]."','".$category_array[0]."','".$description."','".$datestart."','activating','". $myFile."')";
          $msg=$db->insert($sql);
          if( $msg=="New record created!"){
            echo $msg;
          }
          else{
            echo "Error";
          }

     
    }
    
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>