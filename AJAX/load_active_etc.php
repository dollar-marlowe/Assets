<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["status"])){
        $db= new Database();
        $db->connect();
        $status=removepecialchars($_POST["status"]);
        $sql="SELECT id,disaster_id,date_start,disaster,`status`
         FROM etc_disaster_view where `status`='".$status."' order by id";
        $result=$db->selectrows($sql,0);
        $counter=1;
        if(  $db->is_empty($sql)=="false"){
            $size=sizeof($result);
          echo "  <table class='mini_affct broder_table_strong active_etc' id='active_etc' >
										<tr style='border-bottom:solid 1px black;'><th style='width:0px;' ><th colspan=6 style='text-align:center;'>ACTIVE INCIDENT/DISASTER";
                                                        
														
                         foreach($result as $row_d)
                                                    {
                                                        $col=1;
                                                        echo "<tr  class='head_table'>";
                                                    foreach($row_d as $data){
                                                        if($col<=2){
                                                            echo "<th style='width:0px;'><input type='hidden' id='etc".(intval($counter)+intval($col))."' value='$data'>";
                                                        }
                                                        else{
                                                          echo "<th>".$data;  
                                                        }
                                                        $col++;
                                                    }
                                                        echo "<th><img src='images/mini_arrow_down1.png' class='mini_arrow' id='a_m_arrow$counter' 
																onclick=mini_pannel_slide('#a_mini_con$counter','#a_m_arrow$counter','images/mini_arrow_down1.png','images/mini_arrow_up.png') ></tr>
														<tr><td colspan=6>
															<div class='mini_con2' id='a_mini_con$counter'  >
																<table class='mini_affct border_table_strong active_etc_logs'  id='active_etc_logs$counter' >
																<tr><th style='width:0px;'><th colspan=6 style='text-align:center;'>ETC LOGS OF 'DISASTER'";
																	
                                                                    $sql2="SELECT id,date_start,`status`,reso_activation_no,file_activation
                                                                    FROM etc_disaster_view where `status`='active' and disaster_id=".$row_d["disaster_id"]." order by id";
                                                                    $result2=$db->selectrows($sql2,0);
                                                                    foreach($result2 as $row_e){
                                                                        $c2=1;
                                                                        $id_add=$col+$counter;
                                                                        echo "<tr  class='head_table' >";
                                                                        foreach($row_e as $d2){
                                                                            if($c2<=1){
                                                                                echo "<th  ><input type='radio' name='my_etc' class='radio_active_etc' value='$d2'  >";
                                                                            }
                                                                            else{
                                                                                echo "<th >".$d2;
                                                                            }
                                                                            $c2++;
                                                                        }
                                                                    echo "<th><img src='images/mini_arrow_down1.png' class='mini_arrow' id='aa_m_arrow$id_add' 
																				onclick=mini_pannel_slide('#aa_mini_con$id_add','#aa_m_arrow$id_add','images/mini_arrow_down1.png','images/mini_arrow_up.png') ></tr>
																	<tr><td colspan=6>
																		<div class='mini_con' id='aa_mini_con$id_add'>
																			<table class='mini_affct broder_table body_table active_etc_logs_affected' id='active_etc_logs_affected$id_add$counter' >";
                                                                            $sql3="SELECT  area,scale, impact, epr_protocol, date_start  FROM assets.disaster_affected_areas where etc_disaster_id=".$row_e["id"]." order by epr_protocol desc";
                                                                            $result3=$db->selectrows($sql3,0);
																			echo "<tr><th colspan=5 style='text-align:center;' >AFFECTED AREAS";
                                                                            foreach($result3 as $row_a){
                                                                                echo "<tr>";
                                                                                foreach($row_a as $dd){
                                                                                    echo "<td >$dd";
                                                                                }
                                                                            }
																			
																			echo "</table>
																		</div>
																	</td>
                                                                    </tr>";
                                                                    $c2++;
                                                                    }
																echo"
																</table>
												
															</div>";
                                                                
                                                           
                                                      echo"</td>
													</tr>
										
                                            ";
                                            $counter++;
                                    }
                                    echo "	</table>";
        }
        else{
            echo "";
        }
      
       
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>