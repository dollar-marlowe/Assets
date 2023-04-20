<?php

    include "../ALGO/codes.php";

    if(isset($_POST["news_title"])){

        $news_cat=removepecialchars($_POST["news_cat"]);
        $news_title=removepecialchars($_POST["news_title"]);
        $news_desc=removepecialchars($_POST["news_desc"]);
        $news_ref=($_POST["news_ref"]);
        $news_url=($_POST["news_url"]);

          $db = new Database();
          $db->connect();
          $sql="insert into eoc_news_log (news_title, news_desc, news_cat, news_ref, news_url, date_logged) values
          ('".$news_title."', '".$news_desc."', '".$news_cat."', '".$news_ref."', '".$news_url."', NOW())";
          
          $msg=$db->insert($sql);
            if( $msg=="New record created!"){
              echo $msg;
              //update_session($data);
          }else{
              echo $msg;
              //echo "%none";

                }   
    }else{
        echo "<script>window.location='../login.php';</script>";
    }

?>
