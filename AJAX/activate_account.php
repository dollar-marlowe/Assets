<?php

    include "../ALGO/codes.php";
    if(isset($_POST["staff_id"])){//checks if the staff_id post vairable is created by the Jquery AJAX
        $mydb = new Database();//connects to database using the object from codes.php
        $mydb->connect(); //connects ot db

        $staff_id=removepecialchars($_POST["staff_id"]);//get teh value passd form jquery via ajax post, all variables passed will be trated as post variables
        $auth_level=$_POST["auth_level"];
        $auth_desc="";

        $data=$mydb->select_one("SELECT `password` FROM login where official_id=". $staff_id,"password");
        $pass=(!$data==0) ? decrypt($data):"test";//ternary operators, used like an if else
        //the value of $pass will be $data if the condition is true otherwise the value will be 'test'
        
        $data=$mydb->select_one("SELECT `username` FROM login where official_id=". $staff_id,"username");
        $username=(!$data==0) ? $data:"";

        $data=$mydb->selectrows("SELECT lname,gender,email FROM officials where id=". $staff_id,0);
        $lname=(!$data==0) ? $data[0]["lname"]: "Staff";
        $gender=(!$data==0) ? $data[0]["gender"]: "MR./Ms.";
        $email=(!$data==0) ? $data[0]["email"]: "lowejames.mayores@gmail.com";//fallback email in case there is no email found 

        if($gender=="Male"){
            $gender="Mr.";
        }
        if($gender=="Female"){
            $gender="Ms.";
        }      
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
          
        $content= "<html><body>
        Dear  <b>".$gender." ".$lname.":</b>
        <br>
        <br>
        Good Day!<br>
        <br>
        This is a system generated email, please change your password.<br>
        <br>
        Login to your AMIS account using the provided username and password,<br>
        <br>
        username: ".$username." 
        <br>
        password: ".$pass."<br>
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
            $subject="ASSETS MANAGEMENT INFORMATION SYSTEM ACCOUNT ACTIVATION (DO NOT REPLY).";
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