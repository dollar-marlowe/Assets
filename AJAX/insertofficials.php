<?php
    include "../ALGO/codes.php";
    if(isset($_POST["fname"])){
        $mydb = new Database();
        $mydb->connect();
        $fname=removepecialchars($_POST["fname"]);
        $lname=removepecialchars($_POST["lname"]);
        $mname=removepecialchars($_POST["mname"]);
        $position=removepecialchars($_POST["position"]);
        $office=removepecialchars($_POST["office"]);
        $contact=removepecialchars($_POST["contact"]);
        $email=removepecialchars($_POST["email"]);
        $auth_level=removepecialchars($_POST["auth_level"]);
        $id="1";
        $str="select max(id) as id from officials";
        $data=$mydb->selectrows($str,0);
        if($data!=-null){
            $id=$data[0]["id"];
        }

        $today=date("Y-m-d h:m:sa");
        $str="insert into officials (id,office_id,fname,mname,lname,position,contact,email,date_added)
        values(".$id.",".$office.",'".$fname."','".$mname."','".$lname."','".$position."','".$contact."','".$email."','".$today."')";

       $msg= $mydb->insert($str);
       $str="";


    }

?>