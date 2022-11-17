<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["disaster"])){
         $db = new Database();
        $db->connect();

        $disaster=decrypt($_POST["disaster"]);
        $attributes=$_POST["attributes"];
        $probability=removepecialchars($_POST["probability"]);
        $o_impact=removepecialchars($_POST["o_impact"]);

        $arr_attr=explode("msunod",$attributes);

        $etc_disaster_id=$db->select_one(" SELECT max(id) as id FROM etc_disaster ","id");
        $etc_disaster_id=intval($etc_disaster_id)+1;
       $sql="";
        foreach($arr_attr as $arr_row){
          $items=explode("isog",$arr_row);

            $sql.="insert into disaster_attr
             (disaster_id,attr_id,`value`,disaster_etc_id,`status`) 
             values (".$disaster.",".decrypt($items[2]).",'".$items[1]."',".$etc_disaster_id.",'activating');";
        }

        $newsql="insert into etc_disaster (id,disaster_id,escalated_from,`status`,probability,overall_impact) values
        (".$etc_disaster_id.",".$disaster.",0,'activating', '".$probability."','".$o_impact."');";
        

        

          $msg=$db->insertmultiple($newsql.$sql);
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