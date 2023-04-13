<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["reso"])){
      $time=date("H:m:s"); 
      $etc_id=decrypt($_POST["etc_id"]);
      $date_activated=$_POST["date_activated"]." ".$time;
      $file=$_POST["file"];
      $reso=removepecialchars($_POST["reso"]);
      $etc_stat=removepecialchars($_POST["etc_stat"]);
      $etc_stat=($etc_stat=="New Log")? "Active": $etc_stat;
        
      $db = new Database();
      $db->connect();
     
      $sql2="update etc_disaster set date_start='$date_activated', reso_activation_no='$reso', file_activation='$file', `status`='active' where id=$etc_id";
      $msg1=$db->insert($sql2);
      $msg2="";
      $sql3="update disaster_affected set `status`='active' where etc_disaster_id=$etc_id";
      $db->insert($sql3);
      $sql4="update disaster set `status`='active' where id=(select d.disaster_id from etc_disaster d where d.id=$etc_id)";
      $db->insert($sql4);
      $sql5="update disaster_attr set `status`='Active' where disaster_etc_id=$etc_id";
      $db->insert($sql5);
      $sql="select id,disaster_id from etc_disaster e where e.disaster_id=(select d.disaster_id from etc_disaster d where d.id=$etc_id) order by id desc";
      $etcs=$db->selectrows($sql,0);
      $size_etc= sizeof($etcs);
      if($size_etc>1){
          $sql6="update etc_disaster set date_end='$date_activated',escalated_from=$etc_id, `status`='$etc_stat' where id=". $etcs[1]["id"].";";
          $sql6.="update disaster_affected set  date_end='$date_activated', `status`='$etc_stat' where etc_disaster_id=".$etcs[1]["id"].";";
          $sql6.="update disaster_attr set `status`='$etc_stat' where disaster_etc_id=".$etcs[1]["id"].";";
          $msg2=$db->insertmultiple($sql6);

      }
      if($msg1=="New record created!" && $msg2=="New records created!"){
          echo "Sucessfully activated!";
      }else{
        echo $msg1." ".$msg2;
      }

     
    }
    
    else{
      include "ajax_out.php";
    }

?>