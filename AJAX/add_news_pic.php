<?php

    include "../ALGO/codes.php";
    $src = $_FILES['myFile']['tmp_name'];
    $extension = pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);
    $date = date("Y-m-d");
    $increment = 1;
    do {
        $filname = "News" . $date . "_img_" . str_pad($increment, 3, '0', STR_PAD_LEFT);
        $basename = $filname . "." . $extension;
        $destination = "../../news_images/news_pic/" . $basename;
        $destination1 = "../news_images/news_pic/" . $basename;
        $increment++;
    } while (file_exists($destination));
    
    if(move_uploaded_file($src, $destination)) {
        echo $destination1;
        // $_SESSION["url"] = $destination1;
    } else {
        echo "error";
    }
    


//    $src=$_FILES['myFile']['tmp_name'];
//    $extension =pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);
//    $filname=rand_aphanumeric(40);
//    $basename=$filname.".". $extension;
//    $destination = "../../news_images/news_pic/".$basename;//this is the file path based on this ajax file
//    $destination1=  "../news_images/news_pic/".$basename;//this is the file path that will appear on tthe database
//    if(move_uploaded_file($src,  $destination )){
//     echo  $destination1;
//     $_SESSION["url"]=$destination1;
//    }else{
//     echo "error";
//    }

?>