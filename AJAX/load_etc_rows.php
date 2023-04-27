                                
									
<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["status"])){
        $db= new Database();
        $db->connect();
        $status=removepecialchars($_POST["status"]);
        $sql="SELECT id,date_logged,disaster,probability,overall_impact
         FROM etc_disaster_view where `status`='".$status."' order by id";
        $result=$db->selectrows($sql,0);
        $counter=1;
        if(  $db->is_empty($sql)=="false"){

            echo "<table class='mini_affct broder_table_strong' >";
           echo "<tr class='head_table' style='border-bottom:solid 1px black;'><th><th>Date<th>Disaster<th>Impact<th>EPR Protocol<th></tr>";	

            foreach($result as $row){
                $i=1;
                echo "<tr  class='head_table'>";
                foreach($row as $data){
                    if($i<=1){
                        echo "<th><input type='radio' class='etc_item' name='etc_item' value='".encrypt($data)."'>";
                    }else{
                        echo "<th>".$data;
                    }
                    $i++; 
                }
                echo " <th> <img src='images/mini_arrow_down1.png' class='mini_arrow' id='m_arrow".$counter."' 
                onclick=mini_pannel_slide('#mini_con".$counter."','#m_arrow$counter','images/mini_arrow_down1.png','images/mini_arrow_up.png') >
                 <tr  ><td colspan=6  >
                 <div class='mini_con' id='mini_con".$counter."'>
                     <table class='mini_affct broder_table body_table' >
                     <tr><th colspan=5 style='text-align:center;'>AFFECTED AREAS
                     ";
                     $sql2="SELECT  area,scale, impact, epr_protocol, date_start  FROM assets.disaster_affected_areas where etc_disaster_id=".$row["id"]." order by epr_protocol desc";
                     $result2=$db->selectrows($sql2,0);
                     if($result2!=null){
                      
                         foreach($result2 as $data2){
                             echo "<tr>";
                             foreach($data2 as $d){
                                 echo "<td>".$d;
                             }
                            
                         }

                     }
                   
                     
               echo "
                     </table>

                </div>
                </td>";

                
                     $counter++;
            }
            echo "  </table>";

        }
        else{
            echo "";
        }
      
       
    }
    else{
        include "ajax_out.php";
      }

?>