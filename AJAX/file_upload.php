<?php

    include "../ALGO/codes.php";
   
   $src=$_FILES['myFile']['tmp_name'];
   $extension =pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);
   $filname=rand_aphanumeric(40);
   $basename=$filname.".". $extension;
   $destination = "../butang/disaster/".$basename;
   $destination1=  "butang/disaster/".$basename;
   if(move_uploaded_file($src,  $destination )){
    echo  $destination1;
   }else{
    echo "error";
   }




?>