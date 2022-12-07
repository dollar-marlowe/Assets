<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["reso"])){
      
      $etc_id=decrypt($_POST["etc_id"]);
      $date_activated=$_POST["date_activated"];
      $file=$_POST["file"];
      $reso=removepecialchars($_POST["reso"]);
      $etc_stat=removepecialchars($_POST["etc_stat"]);
        
      $db = new Database();
      $db->connect();
      $sql="select id,disaster_id from etc_disaster e where e.disaster_id=(select d.disaster_id from etc_disaster d where d.id=$etc_id) order by id desc";
      $etcs=$db->selectrows($sql,0);
      $size_etc= sizeof($etcs);
      $sql2="update etc_disaster set date_start='$date_activated', reso_activation_no='10', file_activation='etc', `status`='active' where id=$etc_id";
      $msg1=$db->insert($sql2);
      $msg2="";
      $sql3="update disaster_affected set `status`='active' where etc_disaster_id='active'";
      $db->insert($sql3);

      if($size_etc>1){
          $sql3="update etc_disaster set date_end='$date_activated',escalated_from=1, `status`='$etc_stat' where id=". $etcs[$size_etc-1]["id"].";";
          $sql3.="update disaster_affected set  date_end='$date_activated', `status`='$etc_stat' where etc_disaster_id=1".$etcs[$size_etc-1]["id"].";";
          $msg2=$db->insertmultiple($sql2);

      }
      if($msg1=="New record created!" && $msg2=="New records created!"){
          echo "Sucessfully activated!";
      }else{
        echo $msg1." ".$msg2;
      }

     
    }
    
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>