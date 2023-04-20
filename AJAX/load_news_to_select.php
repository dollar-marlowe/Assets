<?php
     include "../ALGO/codes.php";

     if(isset($_POST["filter_type"])){
       $db= new Database();
       $db->connect();
   
       $filter_type = $_POST["filter_type"];
       $news_columns = $_POST["my_columns"];
       $today =date("Y-m-d");
       $sql ="";
   
       //switch case for filtration
       switch($filter_type){
         case "default":
           $sql = "SELECT $news_columns FROM eoc_news_log WHERE DATE(date_logged) = '$today' ORDER BY date_logged DESC";
           break;
   
         case "asc":
           $sql = "SELECT $news_columns FROM eoc_news_log WHERE DATE(date_logged) = '$today' ORDER BY date_logged ASC";
           break;
       }
       // echo $sql;
       echo load_news($sql);
     }
     else{
      include "ajax_out.php";
    }
?>