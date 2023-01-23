<?php
      include "../ALGO/codes.php";
      if(isset($_POST["filter_type"])){
    
        $db = new Database();
        $db->connect();

        $filter_type=$_POST["filter_type"];   
        $data=$_POST["data"];   
        //$my_head=$_POST["my_head"];  //"%Station Name%Station Code%Stattion Status"
        $my_head=explode("%",$_POST["my_head"]);
        $my_columns=$_POST["my_columns"];   
        $my_classes=explode("%",$_POST["my_classes"]);
        $chk=($_POST["chk"]=="true") ? true: false; 
        $all_chk=($_POST["chk"]=="true") ? true: false; 
        $sql="";
        switch ($filter_type){
            case "regional":
                    $sql="SELECT $my_columns FROM assets.hf_data where station_region=$data;";
                break;
                case "provincial":
                    $sql="SELECT $my_columns FROM assets.hf_data where station_province=$data;";
                break;

        }
        loadtable($sql,$my_head, $chk,$all_chk,$my_classes );

        }
        else{
          echo "<script>window.location='../login.php';</script>";
      }
       
    
?>