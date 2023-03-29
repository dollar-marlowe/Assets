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
        $start=$_POST["start"];
        $sql="Select $cols from $table limit $start, 5 ";
        $col_for_count=explode(",",trim($cols));
        $col_for_count=explode(" ",trim($col_for_count[0]));
       // $table=str_replace("Active","'Active'",  $table);
       // echo "<br>".$col_for_count[0];

       // echo $sql;
        
       // echo  $sql."<br>";
        $headers=explode("%",$header);
        $class=explode("%",$class);       
        loadtable($sql, $headers, $check, $all, $class);
      
     /*    $db = new Database();
        $bd->connect();
        $sql2="Select count($col) as `count` from $table";
        $number_cols=$db->select_one($sql2,"count"); */
        $sql2="Select count(".$col_for_count[0].") as id from $table";
        //echo  $sql2."<br>";
        $row_count=intval($db->select_one($sql2,"id"));
        $loop=intval(  $row_count/5);
       // $data=$db->selectrows($sql2,0);
       
       $ids="";
      $remainder=$row_count % 5;
       $row=5;
       $i=0;
        while($i<$loop){
          $val=$row * $i;
          $ids.= $val." ";
        
          $i++;
          if($i>=$loop && $remainder>0){
            $val=$row * $i;
           $ids.= $val." ";
          }
        }
   
     $ids=trim($ids);
       
        
        echo "sunod$ids";
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>