<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["category"])){
        $db = new Database();
        $db->connect();
        $category=$_POST["category"];
        $disaster=decrypt($_POST["disaster"]);
        $etc_id=($_POST["etc_id"]!="") ? decrypt($_POST["etc_id"]): "";// this is a ternary operator ehcking if etc_id is blank
        //if it is not blank the it will be decrypted an dassign its value to $etc_id 
        $sql="SELECT attributes_name,id,`value`,disaster_id,mul_options,options FROM disaster_attributes_view where disaster_id=".$disaster." and `status`='activating' order by attr_id";
        //this sql will load the current etc_disaster if it is active else if there nop are specified etc id
        // if there is on it will uise this second sql instead
        $sql2="SELECT attributes_name,id,`value`,disaster_id,mul_options,options FROM disaster_attributes_view where disaster_id=".$disaster." and disaster_etc_id=".$etc_id." order by attr_id" ;
        $sql3="SELECT attributes_name,id,`value`,disaster_id,mul_options,options FROM disaster_attributes_view where disaster_id=".$disaster." and `status`='active'";
        
        $check_pending_etc_d=$db->select_one("select id from  etc_disaster where disaster_id=".$disaster." and `status`='activating'","id");

        //there should be a status active filter in disater_attr table this table holds the vlaue of the dynamically added attributes in the d_attributes
        //of each disaster, however since a disaster may escalate so there will be a second reference of same disaster with different attributres values
        //so to resolve this there is a need to tag which attribute values were currently in place
        // also the status of each value shuld be turned off upon escalation or downgrade tagging the new values as active
        //or completely turining off status active of the said value for specific disaster once the disaster ceases.
        //ALSO DONT CONFUSE status in disaster table and status in disaster_attr
        //status in disaster table tells weather the disaster is still active or not
        //the status in the disaster_attr tels weather which value is currently active
        //as specific attributes may contain more than one value from different timeline for a specific disaster

        //echo is_empty($sql);
        $current_etc=($etc_id=="")?$check_pending_etc_d:$etc_id;
        $sql=($etc_id=="")?$sql:$sql2;
        $class=explode("%",$_POST["myclass"]);
        if(is_empty($sql)=="true"){
           
            //$class=array("input_wrapper","dst_lbl label","dst_input","dst_hidden");
            $sql="SELECT attributes_name,id,mul_options,options  FROM d_attributes where category='". $category."'";
            $cols=array("attributes_name","id","mul_options","options");
            make_label_inputs($sql,$class,true,false,$cols);
            echo "mmm new";

        }
        else{
            //$class=array("input_wrapper","dst_lbl label","dst_input","dst_hidden");
            //$sql="SELECT attributes_name,id,`value`,disaster_id FROM disaster_attributes_view where disaster_id=".$disaster;
            $cols=array("attributes_name","id","value","mul_options","options");
            make_label_inputs($sql,$class,true,true,$cols);
            echo "mmm retrieved";
            $d_etc=$etc_id;
            $status=$etc_id;
            if($etc_id==""){
                $d_etc=$check_pending_etc_d;
                $status="C";
            }
            $sql4="SELECT  probability,overall_impact FROM etc_disaster where id=".$d_etc;
            $result=$db->selectrows($sql4,0);
            echo " mmm ".$result[0]["probability"]." mmm ".$result[0]["overall_impact"]." mmm ".$status;

        }   
        echo " mmm ".$current_etc;        
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>