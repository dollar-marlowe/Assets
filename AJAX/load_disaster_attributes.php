<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["category"])){
        
        $category=$_POST["category"];
        $disaster=decrypt($_POST["disaster"]);
        $etc_id=$_POST["etc_id"];
        $sql="SELECT attributes_name,id,`value`,disaster_id,mul_options,options FROM disaster_attributes_view where disaster_id=".$disaster." and `status`='Active'";
        $sql2="SELECT attributes_name,id,`value`,disaster_id,mul_options,options FROM disaster_attributes_view where disaster_id=".$disaster." and disaster_etc_id=".$etc_id ;
        
        //there should be a status active filter in disater_attr table this table holds the avlue of the duynamically added attributes in the d_attributes
        //of each disaster, however since a disaster may escalate so there will be a second reference of same disaster with different attributres values
        //so to resolve this there is a need to tag whowhc attribute values were currentlyu in place
        // also the status of each value shuld be turned off upon escalation or downgrade tagging the new values as active
        //or completely turining off status active of the said value for specific disaster once the disaster ceases thgere is a need to 
        // adjust the tag from active to latest
        //ALSO DONT CONFUSE status in disaster tabel and status in disaster_attr
        //status in disaster table tells weather the disaster is still active or not
        //the status in the disaster_attr tels weather which value is currently active
        //as specific attributes may contain more than one value nfrom different timeline for a specific disaster

        //echo is_empty($sql);
        $sql=($etc_id=="")?$sql:$sql2;
        $class=explode("%",$_POST["myclass"]);
        if(is_empty($sql)=="true"){
           
            //$class=array("input_wrapper","dst_lbl label","dst_input","dst_hidden");
            $sql="SELECT attributes_name,id,mul_options,options  FROM d_attributes where category='". $category."'";
            $cols=array("attributes_name","id","mul_options","options");
            make_label_inputs($sql,$class,true,false,$cols);

        }
        else{
            //$class=array("input_wrapper","dst_lbl label","dst_input","dst_hidden");
            //$sql="SELECT attributes_name,id,`value`,disaster_id FROM disaster_attributes_view where disaster_id=".$disaster;
            $cols=array("attributes_name","id","value","mul_options","options");
            make_label_inputs($sql,$class,true,true,$cols);

        }
      
       
        
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>