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
          if( $msg=="New Record created!"){
            echo $msg;
          
            $_SESSION["fname"]=$fname;
            $_SESSION["lname"]=$lname;
            $_SESSION["position"]=$position;
            $_SESSION["login_email"]=$login_email;
            $_SESSION["user_address"]=$user_address;
            $_SESSION["user_mobile"]=$user_mobile;
          }
          else{
            echo $msg;
          }

     
    }
    
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>