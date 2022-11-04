<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["category"])){
        
        $category=$_POST["category"];
        $disaster=decrypt($_POST["disaster"]);
        $sql="SELECT attributes_name,id,`value`,disaster_id FROM disaster_attributes_view where disaster_id=".$disaster." and `status`='Active'";
        //echo is_empty($sql);
        $class=explode("%",$_POST["myclass"]);
        if(is_empty($sql)=="true"){
           
            //$class=array("input_wrapper","dst_lbl label","dst_input","dst_hidden");
            $sql="SELECT attributes_name,id FROM d_attributes where category='". $category."'";
            $cols=array("attributes_name","id");
            make_label_inputs($sql,$class,true,false,$cols);

        }
        else{
            //$class=array("input_wrapper","dst_lbl label","dst_input","dst_hidden");
            //$sql="SELECT attributes_name,id,`value`,disaster_id FROM disaster_attributes_view where disaster_id=".$disaster;
            $cols=array("attributes_name","id","value");
            make_label_inputs($sql,$class,true,true,$cols);

        }
      
       
        
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>