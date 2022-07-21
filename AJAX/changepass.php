<?php

    include "../ALGO/codes.php";
    $mydb1 = new Database();
    $mydb1->connect();
    if(isset($_POST["staffid"])){
        $staff_id=linig($_POST["staffid"]);
        $staff_id=removepecialchars($staff_id);
        $pass=linig($_POST["pass"]);
        $pass=encrypt($pass);
        $str="update login set `password`='".$pass."', `status`='active' where username='". $staff_id."'";
        $msg=$mydb1->insert_no_linig($str);
       if($msg=="New record created!"){
           echo "true";
       }
       else{
        echo  $msg;
       }
       //echo  $msg;
    }
    //echo  "test";
?>