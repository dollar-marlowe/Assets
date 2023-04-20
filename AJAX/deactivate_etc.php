<?php
      include "../ALGO/codes.php";
      if(isset($_POST["etc"])){
    
  
        $time=date("H:m:s"); 
        $date=$_POST["date"]." ".$time;   
        $etc_disaster=$_POST["etc"];    
        $attchfileurl=$_POST["attchfileurl"];
        $db = new Database();
        $db->connect();
        $sql="update etc_disaster set status='deactivated', file_deactivation='$attchfileurl', date_end='$date' where id =$etc_disaster;
        update disaster set status='deactivated', dateended='$date' where id=(select disaster_id from etc_disaster t where t.id=$etc_disaster);
        update disaster_affected set status='deactivated', date_end='$date' where etc_disaster_id=$etc_disaster;";
        $disater = $db->select_one("select name from disaster where id=(select disaster_id from etc_disaster where id=$etc_disaster)","name");
          $msg=$db->insertmultiple($sql);
          if( $msg=="New records created!"){
            echo $msg;
          }
          else{
            echo "Error";
          }
          echo "%".$disater;
        }
        else{
          echo "<script>window.location='../login.php';</script>";
      }
       
    
?>