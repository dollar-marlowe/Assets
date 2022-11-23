<?php

    include "../ALGO/codes.php";
   
   $src=$_FILES['myFile']['tmp_name'];
   $extension =pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);
   $filname=rand_aphanumeric(40);
   $basename=$filname.".". $extension;
   $destination = "../../profile_images/profile/".$basename;//this is the file path based on this ajax file
   $destination1=  "../profile_images/profile/".$basename;//this is the file path that will appear on tthe database
   if(move_uploaded_file($src,  $destination )){
    echo  $destination1;
   }else{
    echo "error";
   }

?>