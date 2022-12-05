<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["reso"])){
      
      $etc_id=decrypt($_POST["etc_id"]);
      $date_activated=$_POST["date_activated"];
      $file=$_POST["file"];
      $reso=$_POST["reso"];
      $etc_stat=$_POST["etc_stat"];
        
      $db = new Database();
      $db->connect();
      $sql="select id,disaster_id from etc_disaster e where e.disaster_id=(select d.disaster_id from etc_disaster d where d.id=$etc_id) order by id desc";
      $etcs=$db->selectrows($sql,0);
      echo sizeof($etcs);
     
    }
    
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>