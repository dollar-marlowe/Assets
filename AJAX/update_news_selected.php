<?php

    include "../ALGO/codes.php";

    if(isset($_POST["news_selected"])){
        $news_selected_title=($_POST["news_selected_title"]);
        $news_selected_value=($_POST["news_selected_value"]);
        $db = new Database();
        $db->connect();

        $sql="update eoc_news_log set 
        news_selected= ".$news_selected_value."
        where news_title=".$news_selected_title;

        // $msg=$db->insert($sql);
        //   if($msg=="New record created!"){
        //     echo $msg;
        //     //update_session($data);
        //  }else{s
        //     echo $msg;
        //     //echo "%none";
        //       }   
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>
