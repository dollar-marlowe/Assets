<?php

    include "../ALGO/codes.php";

    if(isset($_POST["news_selected_title"])){
        $news_selected_title=($_POST["news_selected_title"]);
        $news_selected_value=($_POST["news_selected_value"]);
        $today =date("Y-m-d");
        $db = new Database();
        $db->connect();
    
        // Fetch the news_id using the news_selected_value
        $sql_news_id = "SELECT news_id FROM eoc_news_log WHERE DATE(date_logged) = '$today' AND news_title = '".$news_selected_title."'";
        $result = $db->select($sql_news_id);
        $news_id = mysqli_fetch_assoc($result)['news_id'];
    
        // Update the news_selected value for the fetched news_id
        $sql = "UPDATE eoc_news_log SET news_selected = '".$news_selected_value."' WHERE news_id = ".$news_id;
        $msg = $db->insert($sql);
    
        // if($msg=="New record created!"){
        //     echo $msg;
        // }else{
        //     echo $msg;
        // }
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }
    
    ?>

