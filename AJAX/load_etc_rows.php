                                
									
<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["status"])){
        $db= new Database();
        $db->connect();
        $status=$_POST["status"];
        $sql="SELECT id,date_logged,disaster,probability,overall_impact
         FROM etc_disaster_view where `status`='".$status."'";
        $result=$db->selectrows($sql,0);
        if($result!=null){

                foreach($result as $row){

        
                        echo "                      <div class='etc_row'>
                                                    <div class='row_pannel'  onclick=mini_pannel_slide('#mini_con','#m_arrow1','images/mini_arrow_down1.png','images/mini_arrow_right1.png')>
                                                    <img src='images/mini_arrow_down1.png' class='mini_arrow' id='m_arrow1' >
                                                        <div class='mini_row_head'><table class=';mini_affct head_table' ><tr>";
                                                        $i=1;
                                                        foreach($row as $data){
                                                            if($i<=1){
                                                                echo "<td><input type='radio' class='etc_item' name='etc_item' value='".encrypt($data)."'>";
                                                            }else{
                                                                echo "<td>".$data;
                                                            }
                                                            $i++;
                                                             
                                                        }

                                                        echo "</table></div>
                                                    </div>
                                                        <div class='mini_con' id='mini_con'>
                                                            <table class='mini_affct broder_table body_table' >
                                                                <tr><td>test<td>test<td>test
                                                                <tr><td>test<td>test<td>test
                                                                <tr><td>test<td>test<td>test
                                                            </table>

                                                        </div> 
                                                </div>";
                }
        }
        else{
            echo "";
        }
      
       
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>