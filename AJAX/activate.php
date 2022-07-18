<?php

    include "../ALGO/codes.php";
    if(isset($_POST["staff_id"])){
        $staff_id=$_POST["staff_id"];
        $auth_level=$_POST["auth_level"];
        $auth_desc="";
        $mydb = new Database();
        $mydb->connect();
        switch($auth_level){
            case 1:
                $auth_desc="Regular User";
            break;
            
            case 2:
                $auth_desc="Technical Operator";
            break;

            case 3:
                $auth_desc="Admin";
            break;

            case 4:
                $auth_desc="Super Admin";
            break;

            default:
                $auth_desc="Regular User";
            break;

        }
        $today=date("Y-m-d");       
       
        $str="update login set `status`='change_pass', date_activated='".$today."', auth_level=".$auth_level.", auth_desc='". $auth_desc."', where official_id=". $staff_id;
       
       if($mydb->insert($str)=="New records created!"){
           echo "<p id='activated'>Account(s) Activated!</p>";
       }else{
        echo "Error executing query!";
       }
       
    }

?>