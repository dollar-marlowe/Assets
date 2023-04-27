<?php

    include "../ALGO/codes.php";

    if(isset($_POST["query"])){

        $query = $_POST['query'];
        
          $db = new Database();
          $db->connect();
          $sql="";
          
          $msg=$db->insert($sql);
            if( $msg==""){
              echo $msg;
              //update_session($data);
          }else{
              echo $msg;
              //echo "%none";

                }   
    }else{
      include "ajax_out.php";
    }

?>
