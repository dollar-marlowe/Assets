<?php
    include "../ALGO/codes.php";
    if(isset($_POST["fname"])){
        $fname=removepecialchars($_POST["fname"]);
        $lname=removepecialchars($_POST["lname"]);
        $mname=removepecialchars($_POST["mname"]);
        $position=removepecialchars($_POST["position"]);
        $office=removepecialchars($_POST["office"]);
        $contact=removepecialchars($_POST["contact"]);
        $email=removepecialchars($_POST["email"]);

        $today=date("Y-m-d h:m:sa");
        $str="insert into officials (office_id,fname,mname,lname,position,contact,email,date_added)
        values(".$office.",'".$fname."','".$mname."','".$lname."','".$position."','".$contact."','".$email."','".$today."')";
       $mydb = new Database();
       $mydb->connect();
       echo $mydb->insert($str);
    }

?>