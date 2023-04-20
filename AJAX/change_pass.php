<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["currentPass"])){ //button
        // to be applied per input field

        $currentpass=trim($_POST["currentPass"]); 
        $newPass=trim($_POST["newPass"]);
      
        $id=decrypt($_SESSION["id"]);

        if ($currentpass==decrypt($_SESSION["p"])) {
            //echo "Entered Old Password matched.";
            
            $newPass=encrypt($newPass);
            $db = new Database();
            $db->connect();
            $sql="update login set `password`='$newPass' where official_id=".$id;
                $msg=$db->insert_no_linig($sql);
                if( $msg=="New record created!"){
                    echo $msg;
                $data=array("p"=>$newPass);
                    update_session($data);
                }else{
                    echo $msg;
               
                }
             
        } else {
            echo "Entered Old Password mismatched.";
        }
        
    } 
    else{
        include "ajax_out.php";
      }
?>