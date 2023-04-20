<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["fname"])){ //button
      // to be applied per input field
        $fname=removepecialchars($_POST["fname"]);
        $lname=removepecialchars($_POST["lname"]);
        $position=removepecialchars($_POST["position"]);
        //$officename=removepecialchars($_POST["officename"]);
        $login_email=removepecialchars($_POST["login_email"]);
        $user_address=removepecialchars($_POST["user_address"]);
        $user_mobile=removepecialchars($_POST["user_mobile"]);
        
        $id=decrypt($_SESSION["id"]);

        // $uname=$_POST["uname"]; 
        // $fname=$_POST["fname"];
        // $lname=$_POST["lname"];
        // $position=$_POST["position"];
        // $officename=$_POST["officename"];
        // $login_email=$_POST["login_email"];
        // $user_address=$_POST["user_address"];
        // $user_mobile=$_POST["user_mobile"];

        $db = new Database();
        $db->connect();
        $sql="update officials set
      
        fname='".$fname."',
        lname='".$lname."',
        position='".$position."',
        email='". $login_email."',
        address='".$user_address."',
        contact='".$user_mobile."' where id=".$id;

          $msg=$db->insert($sql);
          if( $msg=="New record created!"){
            echo $msg;
           // echo "%ALGO/codes.php?fname=".$fname."&lname=".$lname."&position=".$position."&login_email=".$login_email."&user_address=".$user_address."&user_mobile=".$user_mobile;
            $data=array("fname"=>$fname,"lname"=>$lname,"position"=>$position,"login_email"=>$login_email,"user_address"=>$user_address,"user_mobile"=>$user_mobile);
            update_session($data);
            
          }
          else{
            echo $msg;
            //echo "%none";
          }

     
    }
    
    else{
      include "ajax_out.php";
    }

?>