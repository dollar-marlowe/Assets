<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["etc_disaster"])){
        $etc_disaster=$_POST["etc_disaster"];
        $date=$_POST["date"];       
        $attchfileurl=$_POST["attchfileurl"];

        
        $db = new Database();
        $db->connect();
        $sql="update etc_disaster set status='deactivated', file_deactivation='$attchfileur', date_end='$date' where id =$etc_disaster;
        update disaster set status='deactivated', dateended='$date' where id=(select disaster_id from etc_disaster t where t.id=$etc_disaster);
        update disaster_affected set status='deactivated', date_end='$date' where etc_disaster_id=$etc_disaster;";
          $msg=$db->insertmultiple($sql);
          if( $msg=="New records created!"){
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