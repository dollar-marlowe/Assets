<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["stat"])){
        $stat=$_POST["stat"];//level if for either regional or national
        $office=decrypt($_POST["office"]);
        $arr_data=explode("%",$office);//office_id and  officename in an array
        $mydb = new Database();
        $mydb->connect();
        $str="";
        $fallback="";
        $string_data="";
         if($stat=="deployed" || $stat=="all"){
            $str="SELECT  GROUP_CONCAT( `category` SEPARATOR ', ') as category  , GROUP_CONCAT( `serial` SEPARATOR ', ') as  `serial`, brgy_id,lat,`long`, count(*) as `count` FROM deployed_assets_loc i where id=". $arr_data[0]." group by  brgy_id order by brgy_id";
            $cols=array("brgy_id", "lat", "long", "category", "serial", "count");
            echo get_rows_implode($str,"@","%",$cols);
        }
       if($stat=="all"){
        echo "$";
       }
        if($stat=="available" || $stat=="all"){
            $str="SELECT id, count(*) as `count`, category, GROUP_CONCAT( `serial` SEPARATOR ', ') as serial, lat, `long`  FROM avail_assets_loc where id=". $arr_data[0]." group by category";
            $data=$mydb->selectrows($str,0);
            if($data!=null){

                $lat= $data[0]["lat"];
                $long= $data[0]["long"];
                $size=sizeof($data);
                $i=1;
                foreach($data as $rows){
                    $plural=(intval($rows["count"])>1)?"s":"";
                
                    $string_data.= $rows["count"]." ".$rows["category"].$plural.": ".$rows["serial"];
                    if($i<$size){
                        $string_data.="; ";
                    }
                    $i++;
        
                }
                $string_data.="@".$lat."@".$long;
                echo $string_data;
            }
            else{
                echo "false";
            }
           

        }
      

    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>  