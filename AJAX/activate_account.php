<?php

    include "../ALGO/codes.php";
    if(isset($_POST["staff_id"])){//checks if the staff_id post vairable is created by the Jquery AJAX
        $mydb = new Database();//connects to database using the object from codes.php
        $mydb->connect(); //connects ot db

        $staff_id=$_POST["staff_id"];//get teh value passd form jquery via ajax post, all variables passed will be trated as post variables
        $auth_level=$_POST["auth_level"];
        $auth_desc="";

        $data=$mydb->select_one("SELECT email FROM officials where id=". $staff_id,"email");
        $email=(!$data==0) ? $data: "lowejames.mayores@gmail.com";//fallback email in case there is no email found 

        $data=$mydb->select_one("SELECT `password` FROM login where official_id=". $staff_id,"password");
        $pass=(!$data==0) ? decrypt($data):"test";//ternary operators, used like an if else
        //the value of $pass will be $data if the condition is true otherwise the value will be 'test'
        
        $data=$mydb->select_one("SELECT `username` FROM login where official_id=". $staff_id,"username");
        $username=(!$data==0) ? $data:"";
                  
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
        $staff_id=str_replace("<br>","",$staff_id);
        $str="update login set `status`='change_pass', date_activated='".$today."', auth_level=".$auth_level.", auth_desc='". $auth_desc."' where official_id=". $staff_id;
        $msg= $mydb->insert($str);
        
      if($msg=="New record created!"){
          
           $content="This is a system generated email, plase change your password. Login to your AMIS account, username: ".$username. " and password: ".$pass;
           $subject="DO NOT REPLY-AMIS ACCOUNT ACTIVATION";
           $mail=send_email($email, $subject, $content);
           if($mail=="sucess"){
            echo "Account activation email sent!";
           }
           else{
            echo "An unknown error has occured plase contact the Administrator!".$mail;
           }

       }else{
        echo "Error executing query!";
       } 
       
    }

?>