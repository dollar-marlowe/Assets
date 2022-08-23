<?php

    include "../ALGO/codes.php";

    
    if(isset($_POST["staff_id"])){//checks if the staff_id post vairable is created by the Jquery AJAX
        $mydb = new Database();//connects to database using the object from codes.php
        $mydb->connect(); //connects ot db

        $staff_id=decrypt($_POST["staff_id"]);//get teh value passd form jquery via ajax post, all variables passed will be trated as post variables
      
        
        $data=$mydb->select_one("SELECT `username` FROM login where official_id=". $staff_id,"username");
        $username=(!$data==0) ? $data:"";

        $data=$mydb->selectrows("SELECT lname,gender,email FROM officials where id=". $staff_id,0);
        $lname=(!$data==0) ? $data[0]["lname"]: "Staff";
        $gender=(!$data==0) ? $data[0]["gender"]: "MR./Ms.";
        $email=(!$data==0) ? $data[0]["email"]: "lowejames.mayores@gmail.com";//fallback email in case there is no email found 
        $email="lowejames.mayores@gmail.com";
        if($gender=="Male"){
            $gender="Mr.";
        }
        if($gender=="Female"){
            $gender="Ms.";
        }      
     

        $today=date("Y-m-d");       
        $staff_id=str_replace("<br>","",$staff_id);
        $str="update login set `status`='change_pass' where official_id=". $staff_id;
        $msg= $mydb->insert($str);

      if($msg=="New record created!"){
          
        $content= "<html><body>
        Dear  <b>".$gender." ".$lname.":</b>
        <br>
        <br>
        Good Day!<br>
        <br>
        This is a system generated email.<br>
        <br> 
        We received a request to change your password for user name ".$username.", please visit the link: http://localhost/assets/login
        <br>
        <br>
        Thank you very much.<br>
        <br>
        Best regards,<br>
        <br>
        <br>
        <b>Resilient Data Analytics Management Section<br>
        Disaster Risk Reduction Management Division</b>
        </body>
        </html>";
            $subject="ASSETS MANAGEMENT INFORMATION SYSTEM ACCOUNT REQUEST FOR PASSWORD RESET (DO NOT REPLY).";
            $mail=send_email($email, $subject, $content);
            if($mail=="sucess"){
            echo "Password reset email sent!";
            }
            else{
            echo "An unknown error has occured plase contact the Administrator!".$mail;
            }
       }else{
        echo "Error executing query!";
       }   
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }
?>