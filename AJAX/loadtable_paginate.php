<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["col"])){
        $db= new Database();
        $db->connect();
       
    
        $header=$_POST["hdr"];
        $class=$_POST["class"];
        $check=$_POST["check"];
        $all=$_POST["all"];
        $col=$_POST["col"];
        $cols=$_POST["cols"];
        $table=$_POST["table"];
        $sql="Select $cols from $table limit 0,5 ";
       // echo $sql;
        

        $headers=explode("%",$header);
        $class=explode("%",$class);       
        loadtable($sql, $headers, $check, $all, $class);
      
     /*    $db = new Database();
        $bd->connect();
        $sql2="Select count($col) as `count` from $table";
        $number_cols=$db->select_one($sql2,"count"); */
        $sql2="Select $col from $table";
        $data=$db->selectrows($sql2,0);
       
        $ids="";
        if($data!=null){
            $i=0;
          while($i<sizeof($data)){
            $ids.=$data[$i][$col]." ";
           $i+=10;
          }
        }
        $ids=trim($ids);
       
        
        echo "sunod$ids";
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>