<?php
session_start();
if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 1800)) {
    session_unset(); 
    session_destroy(); 
   
}
$_SESSION['start'] = time();

//Class for databce connection for dynamically reusing of codes
class Database{

    public $servername="localhost";
    public $username="lowe";
    public $pass="admin123";
    public $db="assets";
    public $con;

    function connect(){
        $this->con=mysqli_connect($this->servername,$this->username,$this->pass,$this->db);
        $mycon=$this->con;
        if(!$mycon){
                  
            die("Connection failed ".mysqli_connect_error());
        }
        else{
            return "Connection Sucessful!";
        }
    }

    function insert($query){
        $query=linig($query);
        if(mysqli_query($this->con,$query)){
                return "New record created!";
        }
        else{
            return "Error: ".$query."<br>".mysqli_error($this->con);
        }
    }

    function insertmultiple($query){
        
        if(mysqli_multi_query($this->con,$query)){
                return "New records created!";
        }
        else{
            return "Error: ".$query."<br>".mysqli_error($this->con);
        }
    }

    function select($query){
        $query=linig($query);
        $result=mysqli_query($this->con,$query);
        //return $result."<br>";
        return $result;
    }

    function selectrows($query, $n){
        $query=linig($query);
        $data=array();
        
        $result=mysqli_query($this->con,$query);
        if(mysqli_num_rows($result)>0){
                if($n>0){
                    for($i=0;$i<$n;$i++){
                        $row=mysqli_fetch_assoc($result);
                        $data[]=$row;
                    }
                }
                else{
                    while($row=mysqli_fetch_assoc($result)){
                        $data[]=$row;
                    }
                }
                return $data;
        }
        else{
                return null;
            }     
    }

    function close(){
        mysqli_close($this->con);
        return "Closed!";
    }
}

//useful functions 
function isnull($var){
    if($var==""){
        return true;
    }
    else{
        return false;
    }
}

function linig($str){
    $rows=explode(" ",$str);
    $size=sizeof($rows);
    for($i=0;$i<$size;$i++){
      
        if($rows[$i]=="="){
            if($rows[$i-1]==$rows[$i+1]){
                $rows[$i-1]="";
                $rows[$i+1]="";
                $rows[$i]="";

            }
            if(strtolower($rows[$i-2])=="or"){
                $rows[$i-2]="";
            }
        }
            
         elseif(strpos($rows[$i],"=")>=1){
                $row=explode("=",$rows[$i]);
               
                if($row[0]==$row[1]){
                    $rows[$i]="";
                    if(strtolower($rows[$i-1])=="or"){
                        $rows[$i-1]="";
                    }
                }
            }
        }
    
    return str_replace(";","@@@@",trim(implode(" ",$rows)));

}

function removepecialchars($str){
    $str=str_replace("'","",$str);
    $str=str_replace("`","",$str);
    $str=str_replace(";","",$str);
    $str=str_replace("=","",$str);
    $str=str_replace("%","",$str);
    $str=str_replace("/","",$str);    
    $str=str_replace("~","",$str);    
    $str=str_replace("||","",$str); 
    $str=str_replace("|","",$str); 
    $str=str_replace("&","",$str); 
    $str=str_replace("&&","",$str); 
    $str=str_replace("==","",$str); 
    $str=str_replace("^^","",$str); 
    $str=str_replace("^","",$str); 
    return trim($str);
}
function shorten($txt){
    $arr=explode(" ",$txt);
    $size=sizeof($arr);
    $str="";
    if($size>1){
        $str=$arr[0]." ".$arr[1];
    }
    else{
        $str=$txt;
    }
    return $str;
}
function replace($text,$orig){
    $elems=explode("%",$text);
    $val=shorten($orig);
    foreach($elems as $elem){
        $val=str_replace($elem,$elem." ",$val);
    }
    return $val;
}
//loading values into dropdown <select><option>
function loadlist($str, $col, $header,$label){
    $db= new Database();
    $db->connect();
    $data=$db->selectrows($str,0);
    
    if($data!=null){
        echo "<li id='".$header."' style='list-style-type: none; font-weight: bold;'><p>".$label."</p></li>";
        $keys=",%.%:%/%\%-%_%)%(";
        foreach($data as $row){
           echo "<li> ".replace($keys,$row[$col[0]])."<br>
           (".replace($keys,$row[$col[1]])."):&nbsp".replace($keys,$row[$col[2]])."</li>";
        }
    
    }
}
function total($str, $col){
    $db= new Database();
    $db->connect();
    $data=$db->selectrows($str,0);
    
    if($data!=null){
        foreach($data as $row){
          echo "<p style=' width:100%;margin: auto; text-align:center;'>Total: ".$row[$col]."</p>";
        }
    
    }
    else{
        echo "No items as of yet";
    }
}
function loadtable($str,$headers,$chkbox,$all,$class){
    $db =new Database();
    $db->connect();
    $data=$db->selectrows($str,0);
    if($data!=null){
        echo "<tr>";
        $chk=$chkbox;
        foreach($headers as $header){
            if($header==" "){
                echo"<th>";
                if($all){
                    echo"<input type='checkbox' 
                    class='".$class[0]."' >";
                }
               
            }
            else{
                echo "<th>".$header;
            } 
            echo"</th>";
        } 
        echo "</tr>";
        $j=1;
        foreach($data as $elem){
           $i=0;
          
            echo "<tr id='".$j."'>";
            $size=sizeof($elem);
           
            foreach($elem as $e){
                
                if($chkbox){
                    if($i==0){
                        echo"<td><input type='checkbox' 
                        class='".$class[1]."'  value='".$e."' ></td>";    
                    }
                    $chkbox=false; 
                }
                else{
                    if($i==$size-1){
                        echo"<td class='last'>".$e."</td>";
                    }else{
                        echo"<td>".$e."</td>";
                    }
                }
                $i++;          
            }
            $chkbox=$chk;
            $j++;
            echo "</tr>";
        }
    }
}

function loadropdown1($str,$col1,$col2){//the second  dropdown has others 
    
    $db = new Database();
    $db->connect();

    $data=$db->selectrows($str,0);
   
    if($data!=null){
        echo"<option value=0>Select from Options Below</option>";
        foreach($data as $d){
            echo "<option value='".$d[$col1]."'>".$d[$col2]."</option>";
        }
    }
    else{
        echo"<option value='0'>Select below</option>";
    }
    echo"<option value='others'>Others</option>";
    
}
function loadropdown($str,$col1,$col2,$from){
    
    $db = new Database();
    $db->connect();
    $data=$db->selectrows($str,0);
   
    if($data!=null){
        echo"<option value=0>Select from Options Below</option>";
        foreach($data as $d){
            echo "<option value='".$d[$col1]."'>".$d[$col2]."</option>";
        }
    }
    else{
        echo"<option value='0'>Select from ".$from."</option>";
    }
}
function loadintodb(){
    require_once "PHPExcel/Classes/PHPExcel.php";
    $tmpfname = "RESOURCES/geo_map.xlsx";
    $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
    $excelObj = $excelReader->load($tmpfname);
    $worksheet = $excelObj->getSheet(0);
    $lastRow = (int)$worksheet->getHighestRow();
    $lastCol=$worksheet->getHighestColumn();
    
     $excel_arr=$worksheet->toArray(null,true,true,false);//parameters are as follows what data should be returend if there are no data in sheet, weather to evaluate formulas in sheets, weaher the data will have decimal, weather the index will be excalty same with the sheets if value is true the index should be row[1]['A] is the first element else row[0][0]
    //echo $excel_arr[0][0];
    //$cast_lastrow=(int)$lastRow;
    //echo "<br>".$lastCol;
    $db=new Database();
    $db->connect();
   $num=1;
   $reg="";
   $prov="";
   $muni="";
   $brgy="";
   $regid=1;
   $provid=1;
   $munid=1;
   $brgyid=1;
   $queries=array();
   
  //echo $lastRow."<br>";
    for ($row = 1; $row < 42059; $row++) {
        
        /*012801001 -0- 01 -2- REGION I (ILOCOS REGION) -4- 28 -6- ILOCOS NORTE -7- PH012801000 -8- 01 -11- 
        ADAMS -12- PH012801001 -13- 001 -14 Adams (Pob.) -15 18.453399 -16 0 -17-*/
      
        $data=array("geocode"=>$excel_arr[$row][0],"regcode"=>$excel_arr[$row][2],"regname"=>$excel_arr[$row][4],
                    "provcode"=>$excel_arr[$row][6],"provname"=>$excel_arr[$row][7],"municode"=>$excel_arr[$row][11],
                    "muniname"=>$excel_arr[$row][12],"brgycode"=>$excel_arr[$row][14],"brgyname"=>$excel_arr[$row][15],
                     "lat"=>$excel_arr[$row][16],"long"=>$excel_arr[$row][17]);
        /*echo $excel_arr[$row][0]." -0- ".$excel_arr[$row][2]." -2- ".
        $excel_arr[$row][4]." -4- ".$excel_arr[$row][6]." -6- ".
        $excel_arr[$row][7]." -7- ".$excel_arr[$row][8]." -8- ".
        $excel_arr[$row][11]." -11- ".$excel_arr[$row][12]." -12- ".
        $excel_arr[$row][13]." -13- ".        $excel_arr[$row][14]." -14- ".$excel_arr[$row][15]." -15- ".
        $excel_arr[$row][16]." -16- ".$excel_arr[$row][17]." -17-<br>";*/
        if($reg!=$data["regcode"]){
            $query="insert into region (id,reg_code,name,geocode)
            values (".$regid.",'".$data["regcode"]."','".$data["regname"]."','".$data["regcode"]."0000000')";
             //echo "<br><br>".$num." ".$query."<br>";
             array_push($queries,$query);
             $reg=$data["regcode"];
               $db->insert($query);
              $regid++;
              $num++;
            
        }
       if($prov!=$data["provcode"]){
        $query="insert into province (id,reg_id,prov_code,name, geocode)
        values (".$provid.",".($regid-1).",'".$data["provcode"]."',
        '".$data["provname"]."','".$data["regcode"].$data["provcode"]."00000')";
         //echo $num." ".$query."<br>";
         $prov=$data["provcode"];
       $db->insert($query);
       array_push($queries,$query);
        $provid++;
        $num++;
       }
       if($muni!=$data["municode"]){
       $query="insert into municipality (id,province_id, muni_code, name, geocode)
       values (".$munid.",".($provid-1).",'".$data["municode"]."',
       '".$data["muniname"]."','".$data["regcode"].$data["provcode"].$data["municode"]."000')";
        //echo $num." ".$query."<br>";
        $muni=$data["municode"];
         $db->insert($query);
         array_push($queries,$query);
       $munid++;
       $num++;
       }
        $query="insert into barangay (id,muni_id,brgy_code, name, `long`,lat,geocode)
        values (".$brgyid.",".($munid-1).",'".$data["brgycode"]."',
        '".$data["brgyname"]."','".$data["long"]."','".$data["lat"]."','"
        .$data["regcode"].$data["provcode"].$data["municode"].
        $data["brgycode"]."')";
        // echo $num." ".$query."<br>";
         array_push($queries,$query);
      $db->insert($query);
       $brgyid++;

        $brgy=$data["brgycode"];  
        $num++;
    }
    echo $queries[43807]." ".$num;
  $db->close();
}
//$db=new Database();

//echo $db->connect();
 $str="Select * from log``in whe'''re BINARY password='admin123' or 1=1";
//echo linig($str); 
?>