<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["office"])){
       
        $office=decrypt($_POST["office"]);
        $headers=explode("%",$_POST["headers"]);
        $class=$_POST["class"];
        $arr_data=explode("%",$office);//office_id and  officename in an array
        $mydb = new Database();
        $mydb->connect();
        $sql="SELECT id, office_name,
        count(*) as `count`, category, GROUP_CONCAT( `serial` SEPARATOR ', ') as `serial`,
         (Select barangay.name from barangay where id=i.brgy_id) as barangay,
              (Select municipality.name from municipality where municipality.id=i.muni_id) as municipality,
               (Select province.name from province where province.id=i.prov_id) as province
       
               FROM avail_assets_loc i where id=". $arr_data[0]."  group by category";
               $total=0;
                $office_name=$arr_data[3];
       $data=$mydb->selectrows($sql,0);
      
       if($data!=null){
        echo "<table class='".$class."'><tr>";
            foreach($headers as $content){
            echo "<th>".$content;
            }
            foreach($data as $row){
                echo "<tr><td>".$row["category"];
                echo"<td>".$row["serial"]."<td>".$row["count"];
                $total+=intval($row["count"]);
            }
            echo "<tr><td colspan='2'><b>GRAND TOTAL</b><td><b>". $total."</b></table>";
       }
       else{
        echo "<p style='font-size:30px;'>NO DATA AVAILABLE</p>";
       }
       echo "%".$total."%".$office_name;

    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>  