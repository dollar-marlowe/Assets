<?php
    include "../ALGO/codes.php";
    if(isset($_POST["uname"])){
        $uname=removepecialchars($_POST["uname"]);
        $pass=removepecialchars($_POST["pass"]);
       
        $str="SELECT * FROM personnelogiinfo  where BINARY username='".$uname."'";
       $mydb = new Database();
       $mydb->connect();
      $data=$mydb->select($str);
      
     
      if(mysqli_num_rows($data)>0){
        $row=mysqli_fetch_assoc($data);
          if($pass==decrypt($row["password"])){
              $_SESSION["auth"]=true;
              $_SESSION["uname"]=$row["username"];
              $_SESSION["officename"]=$row["office_name"];
              $_SESSION["officeid"]=$row["office_id"];
              $_SESSION["officialid"]=$row["official_id"];
              $_SESSION["fname"]=$row["fname"];
              $_SESSION["lname"]=$row["lname"]; 
              $_SESSION["region_id"]=$row["region_id"]; 
              $_SESSION["province_id"]=$row["province_id"]; 
              $_SESSION["muni_id"]=$row["muni_id"]; 
              $_SESSION["brgy_id"]=$row["brgy_id"]; 
              $_SESSION["office_cat"]=$row["category"]; 
              $_SESSION["auth_level"]=$row["auth_level"]; 
              $_SESSION["status"]=$row["status"]; 
              echo $row["status"];
          }
          else{
            echo "false";
            
          }
      }
      
      else{
        echo "false";
      }
    
    }

?>