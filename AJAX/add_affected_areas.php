<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["disaster"])){
         $db = new Database();
        $db->connect();
        $time=date("H:m:s"); 
        $disaster=decrypt($_POST["disaster"]);
        $areas=$_POST["areas"];
        $scale=removepecialchars($_POST["scale"]);
        $epr=removepecialchars($_POST["epr"]);
        $l_impact=$_POST["l_impact"];
        $scale=$_POST["scale"];
        $date=$_POST["date"]." ".$time;
        $arr_areas=explode("msunod",$areas);
        $etc=$_POST["etc"];

        
       $sql="";
        foreach($arr_areas as $data){
            if(is_empty("SELECT * FROM disaster_affected where disaster_id=".$disaster." and area_id=".decrypt($data)." and scale='".$scale."' and etc_disaster_id=".$etc)=="true"){
              $sql.="insert into disaster_affected (disaster_id, area_id, scale, `status`, date_start,  impact, epr_protocol, etc_disaster_id) values
              (".$disaster.",".decrypt($data).",'".$scale."','activating','".$date."','".$l_impact."','".$epr."',".$etc.");";
            }          
            
        }

          $msg=$db->insertmultiple($sql);
          if( $msg=="New records created!"){
            echo $msg;
          }
          else{
            echo  $msg;
          }

     
    }
    
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>