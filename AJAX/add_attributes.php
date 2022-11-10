<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["disaster"])){
        $disaster=decrypt($_POST["disaster"]);
        $attr=trim(removepecialchars($_POST["attr"]));
        $val=trim($_POST["val"]);
        $val_array=explode("/", $val);
        $category=$_POST["category"];
        $db = new Database();
        $db->connect();
        $vals="";
        $mul_options=1;
        if($val!=""){
           foreach( $val_array as $data) {
            $vals.="<option value=''".$data."''>".$data."</option>";
            $mul_options++;
           }
        }
       
        $sql="insert into d_attributes (category, attributes_name, mul_options,options) 
        values ('".$category."','".$attr."',". $mul_options.",'".$vals."')";
          $msg=$db->insert($sql);
          if( $msg=="New record created!"){
            echo $msg;
          }
          else{
            echo "Error";
          }

     
    }
    
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>