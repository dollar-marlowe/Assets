<?php
//YOUR CREATIVITY IS THE KEY

//these are all session creation
//It is placed here as this php file is always present in all modules of the system
session_start();
/* if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 1800)) {
    //this is the condition that makes the session expire if inactive for 1 hour
    
    session_unset(); 
    session_destroy(); 
   
} */
$_SESSION['start'] = time();

//this is the condition which reroute the php view if an outsider tries to acces this file htoruhg the browser
if( basename($_SERVER["SCRIPT_FILENAME"], '.php')=="codes" && !(isset($_SESSION["auth"]))){
   header("Location:../login.php");
}

$path= realpath(basename($_SERVER["SCRIPT_FILENAME"], '.php').".php");
$arr_path= explode("\\",$path);
$arr_size= count($arr_path);

if($arr_path[$arr_size-2]=="AJAX" && !isset($_SESSION["auth"]) && basename($_SERVER["SCRIPT_FILENAME"], '.php')!="login"){
  // echo "<script>window.location='login.php';</script>";

}
/* if( basename($_SERVER["SCRIPT_FILENAME"], '.php')!="codes" && basename($_SERVER["SCRIPT_FILENAME"], '.php')!="login" && $_SESSION["auth"]==false){
    header("Location:../login.php");
 } */
  

//Class for databce connection for dynamically re-using of codes
class Database{
    //I USED A CLASS FOR THE DATABASE
    //THIS SERVES AS THE MODEL PART OF TdsfgdfHE SYSTEM
    //ALL QUERY COMMAND INSERT EDIT ADN DELETE ARE ALL HERE
    //IT USES THE SQL COMMAND AS PARAMETER TO EXECUTE IT INSIDE EACH OF THE RESPECTIVE FUNCTIONS
    //THE CLASS IS VERY DYNAMIC, USING THE SAME CODES ALL THORUGHT THE SYSTEM
    //WITHOUT HAVING TO REPEAT ANY OF INSERT ALGO IN THIS SYSTEM
    //WHEN MIGRATING TO POSTGRE THIS IS THE CLASS THAT NEEDS TO BE CHANGED
    
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

    function insert_no_linig($query){
        $query=$query;
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
    function is_empty($query){
        $query=linig($query);
        $result=mysqli_query($this->con,$query);
        if(mysqli_num_rows($result)>0){
            return "false";
        }
        else{
            return "true";
        }
        //return $result."<br>";
        
    }
    function selectrows($query, $n){//0 will select all rows
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
    function select_one($query, $key){
        $data=mysqli_query($this->con,$query);
        $result=0;
        if(mysqli_num_rows( $data)>0){
            $row=mysqli_fetch_assoc($data);
            $result=$row[$key];
        }
        return $result;
    }

    function close(){
        mysqli_close($this->con);
        return "Closed!";
    }
}
function is_empty($query){// this is a dubplicate function independent from Databse declaration

    $query=linig($query);
    $db=new Database();
    $db->connect();
    $result=$db->select($query);
    if(mysqli_num_rows($result)>0){
        return "false";
    }
    else{
        return "true";
    }
    //return $result."<br>";
    
}
function php_is_empty($query){// this is a dubplicate function independent from Databse declaration

    $query=linig($query);
    $db=new Database();
    $db->connect();
    $result=$db->select($query);
    if(mysqli_num_rows($result)>0){
        return  false;
    }
    else{
        return true;
    }
    //return $result."<br>";
    
}
//cols are as follows: colum names to be placed under label(attributes_name column in the database ), hidden (attr_id/id column in the database) and input value(value)
//for label needs tha name of the attributes
//for hidden is the id as value of the attributes
//for the input is tha vlue, empty if the disaster has no attributes value yet
//classes name are as follows:the div class name, the label class name, input class name
//ipunt hidden class name
//$is empty is a vaiuable that defines weather the specific attributes already has a value in disaster_attributes table
//the mul)options variable it has to checkl weather the input elements source table is d_attributes or disaster_attr
//disaster_attr tabel source has more column numbersx that is why it has to adjuist if $is_empty is false
function make_label_inputs($sql,$class,$with_hidden,$is_empty_val,$cols){
    //echo $sql;
    $db=new Database();
    $db->connect();
    $result=$db->selectrows($sql,0);

    if($result!=null){
                $in_id=1;
                foreach($result as $row){
                    echo "<div class='".$class[0]."'><p class='".$class[1]."'>".$row[$cols[0]].":</p> ";
                    if($with_hidden){
                        echo "<input type='hidden' class='".encrypt($class[3])."' value='".encrypt($row[$cols[1]])."'>";
                    }
                    $val= $is_empty_val ? $row[$cols[2]]: ""; 
                    $mul_option= $is_empty_val? $row[$cols[3]]:  $row[$cols[2]];
                    $option= $is_empty_val? $row[$cols[4]]:  $row[$cols[3]]; 
                    if(intval( $mul_option)>1) {
                        echo "<select  class='".$class[2]."' value='".$val."'>";
                        echo  $option;
                        echo "</select>";
                   
                    }  
                    else{
                        echo "<input type='text' class='".$class[2]."' value='".$val."' id='".$in_id."a' onkeyup=global_validate('#".$in_id."a','')>";
                        $in_id++;
                   
                    }     
                    echo "</div>";
                
            }
        
    }
    else{
        echo "null";
    }
    

}

function get_rows_implode($str,$item_delimeter,$row_delimeter,$cols){//brg_id[0], lat[1], long[2], category[3], serial[4], count[5]
    //this is a function to turn array into a string which will be later on exploded back to array when 
    //passed back to jquery, it uses a delimeter to identify the start of next item or next row in a 2d array
    
    $db= new Database();
    $db->connect();
    $result=$db->selectrows($str,0);// 0 is to select all rows
    $string_data="false";
    $size=0;
    if($result!=null){
        $string_data="";
        foreach($result as $rows){
     
            $data=summarize_list($rows[$cols[3]],$rows[$cols[4]],$rows[$cols[5]]);//calling the function to sumirize the list of items 
            //with corresponding serials 
            $string_data.=$data.$item_delimeter.$rows[$cols[1]].$item_delimeter.$rows[$cols[2]];
          
            if($size < sizeof($result)-1){
                $string_data.=$row_delimeter;
            }
            $size++;
           
        }
    }
    
    return $string_data;

}


function summarize_list($cat_name, $serials, $count){
    //this function is only useful for this type of sql command 
    //SELECT  GROUP_CONCAT( `category` SEPARATOR ', ') as category  , GROUP_CONCAT( `serial` SEPARATOR ', ') as  `serial`, brgy_id,lat,`long`, count(*) as `count` FROM deployed_assets_loc i where id=2 group by  brgy_id order by brgy_id
    //where $cat_name is in a form of imploded array separated by a ,(comma) this is done using the GROUP_CONCAT command in sql
    //and the same for $serials
    //these imploded values were later on exploded as an array inside this function and count each item inside the category
    //Afterward will compute the sum of silimar items belonging to the same location 
    //thus the result would look like this 2 VHF Handheld Radio: 789012, 234567
    //original values were like this: VHF Handheld Radio, VHF Handheld Radio (stored in $cat_name)
    //789012, 234567 (stored in $serials)
    $arr_values=explode(",",$cat_name);
    $arr_serials=explode(",",$serials);
    $size=intval($count);
    $counter=1;
    
    $c=0;
    $result="";
    $start=1;
    $asset=$arr_values[0];
    for($i=1;$i<$size;$i++){
        $plural="";
        if($counter>1){
            $plural="s";
        }
        if(trim($arr_values[$i])!= trim($asset)){
            $serial="";
            $result.= "<b>".$counter." ".$asset.$plural."</b>: ";
            for($j=$start-1;$j<$i;$j++){
                $serial.=$arr_serials[$j];
                if($j!=$i-1){
                    $serial.=", ";
                }else{
                    $serial.="; ";
                }
            }
            
            $result.=$serial;
               
            $start=$i+1;
            $counter=1;
            $asset=$arr_values[$i];
           if($i==$size-1){
            $result.="<b>".$counter." ". $asset.$plural."</b>: ".$arr_serials[$i];
           }
        }
        else{
            $counter++;
          //  echo " i:".$i." Size: ".$size." ";
                if($i==$size-1){
                            $serial="";
                            $result.= "<b>".$counter." ".$arr_values[$i].$plural."</b>: ";
                            for($j=$start-1;$j<=$i;$j++){
                                $serial.=$arr_serials[$j];
                                    if($j<$i){
                                        $serial.=",";
                                    }
                           
                        }
                        $result.=$serial;
                       
                 }
                 
        }
      // echo $arr_values[$i]." ";
        //$c++;
    }
    if($size==1){
        $result="<b>".$count." ".$cat_name."</b>: ".$serials;
    }
    return  $result;
}
function get_rows_string_delimeter($str,$item_delimeter,$row_delimeter){//this is to make the result form a query in a form of an array to be converted to string
    //examle Sat Phone|23246|11.169799|125.372001|1%UHF Radio|20471|9.837039|124.219001|7%VHF Handheld Radio|13007|13.277299|123.362998|5%VSAT SET|27492|11.621|124.433998|4
    //each item is separated by | ($item_delimeter)and the mark of the end of the row is % ($row_delimeter)
    //the purpose fo this is to pass this valeu to javascript and later on split in again to array 
    //as php array cannot be passed back to javascript
    //THIS FUCNTION IS A TEST FUNCTION SEPARATING EACH ITEM AS AN ARRAY ELEMENT:
    //UHF Radio|20471|9.837039|124.219001|7 LIKE THIS
    //CATEGORY NAME|LAT|LONG|ITEM COUNT
    //THIS IS VERY HUSLE TO USE WITHOUT USING ANY DATA SUMMARIZATION 
    // RECOMMENDED TO USE get_rows_implode INSTEAD OF THIS WHEN SUMMARIZING ASSETS
    //THIS FUNCTION MUGHT STILL BE USEFUL FOR OTHER DATA QUERIES
    $db = new Database();
    $db->connect();
     $result=$db->selectrows($str,0);// 0 is to select all rows
    $string_data="";
    $c1=1;
    foreach($result as $data){
        $c2=1;
        if($c1>1){
            $fil2=$row_delimeter;
        }else{
            $fil2="";
        }
       
        $string_data= $string_data.$fil2;
        $c1++;
        foreach($data as $item){
            if($c2>1){
                $fil=$item_delimeter;
            }
            else{
                $fil="";
            }
           
            $string_data= $string_data.$fil.$item;
            $c2++;
        }
       
    } 
return   $string_data;

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

function linig($str){//USED FOR REMOVING SQL INJECTIONS
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
    $str=str_replace("~","",$str);    
    $str=str_replace("||","",$str); 
    $str=str_replace("|","",$str); 
    $str=str_replace("&","",$str); 
    $str=str_replace("&&","",$str); 
    $str=str_replace("==","",$str); 
    $str=str_replace("=","",$str); 
    $str=str_replace("^^","",$str); 
    $str=str_replace("^","",$str); 
    $str=str_replace("<","",$str); 
    $str=str_replace(">","",$str); 
    return trim($str);
}
function region_to_letter($val){
    $code="";
    switch($val){
        case 1:
            $code="A";
        break;
        case 2:
            $code="B";
        break;
        case 3:
            $code="C";
        break;
        case 4:
            $code="E";
        break;
        case 5:
            $code="F";
        break;
        case 6:
            $code="G";
        break;
        case 7:
            $code="H";
        break;
        case 8:
            $code="I";
        break;
        case 9:
            $code="J";
        break;
        case 10:
            $code="K";
        break;
        case 11:
            $code="L";
        break;
        case 12:
            $code="M";
        break;
        case 13:
            $code="D";
        break;
        case 14:
            $code="N";
        break;
        case 15:
            $code="O";
        break;
        case 16:
            $code="P";
        break;
        case 17:
            $code="Q";
        break;
       
        default:
            $code="AB";
        break;
    }
    return $code;
}
function region_decode($val){
    $code="";
    switch($val){
        case "A":
            $code=1;
        break;
        case "B":
            $code=2;
        break;
        case "C":
            $code=3;
        break;
        case "E":
            $code=4;
        break;
        case "F":
            $code=5;
        break;
        case "G":
            $code=6;
        break;
        case "H":
            $code=7;
        break;
        case "I":
            $code=8;
        break;
        case "J":
            $code=9;
        break;
        case "K":
            $code=10;
        break;
        case "L":
            $code=11;
        break;
        case "M":
            $code=12;
        break;
        case "D":
            $code=13;
        break;
        case "N":
            $code=14;
        break;
        case "O":
            $code=15;
        break;
        case "P":
            $code=16;
        break;
        case "Q":
            $code=17;
        break;
       
        default:
            $code=0;
        break;
    }
    return $code;
}
function get_string_at($str,$at){// useful function in getting a character specific place in a string
    $word=explode("-",$str);
    $result="";
    $size=sizeof($word);
    if($size<=$at){
        $result=$word[$size-1];
    }else{
        $result=$word[$at];
    }
    return $result;
}
function officecode(){
    $regid= $_SESSION["region_id"];
    
    return region_to_letter($regid);

}
function abreviate($str,$num_char){//THIS IS USED FOR ABREVIATING WORDS $NUM_CHAR SPECIFIES HOW MAY LETTERS
    //IF BY MISTAKE YOU PUT ONE WORD YET 3 NUMBER OF LETTERS FOR THE ABREVIATION EXAMPLAE:
    //Aperture result would be APE
    //if by mistake you put just one letter yet you specified 3 letters for the abreviation
    //exmaple 'A' result would be 'A' 
    //the normal output of this function would be like this
    //'Very Small Aperture Termninal' then you specified 4 letters abreviation
    // result would be like this 'VSAT'
    //pretty brilliant haha
    $word= explode(" ",$str);
    $size=sizeof($word);
    $abreviate="";
    if($size>1){
        if($size>=$num_char){
            for($i=0;$i<$num_char;$i++){
                $chars=str_split($word[$i]);
                $abreviate=$abreviate.$chars[0];
            }
        }
        else{
            for($i=0;$i<$size;$i++){
                $chars=str_split($word[$i]);
                $abreviate=$abreviate.$chars[0];
            }
        }
        
       
    }
    else{
        $chars=str_split($word[0]);
        $n=sizeof($chars);
        if($n>=$num_char){
            for($i=0;$i<$num_char;$i++){
                $abreviate=$abreviate.$chars[$i];
            }
        }else{
            $abreviate=$chars[0];
        }
       
      
    }
    return strtoupper($abreviate);
}


function abreviate_except($str,$num_char,$exp){//THIS IS USED FOR ABREVIATING WORDS $NUM_CHAR SPECIFIES HOW MAY LETTERS
    //the difference of this function is that in can except helping words such as in and for of to be excluded form abreviation
    //the exception is definced in a variable $exp each word in this string is separated by white space
    //it is then exploded into array and will check one by one if a word in $str variable matched a word in $exp
    //once a match is detected that word will be skipped 
    //example BANGSAMORO AUTONOMOUS REGION IN MUSLIM MINDANAO, the it ius deined in $exp to skip the `in`
    //word "IN AND OF" so the result would be BARMM instead of BARIMM
    //IF BY MISTAKE YOU PUT ONE WORD YET 3 NUMBER OF LETTERS FOR THE ABREVIATION EXAMPLAE:
    //Aperture result would be APE
    //if by mistake you put just one letter yet you specified 3 letters for the abreviation
    //exmaple 'A' result would be 'A' 
    //the normal output of this function would be like this
    //'Very Small Aperture Termninal' then you specified 4 letters abreviation
    // result would be like this 'VSAT'
    //pretty brilliant haha
    $word= explode(" ",$str);
    $size=sizeof($word);
    $abreviate="";
    $arr_exp=explode(" ",$exp);
    $exp_size=sizeof($arr_exp);
    
    if($size>1){
        
        if($size>=$num_char){
            for($i=0;$i<$num_char;$i++){
                $go=true;
                
                foreach($arr_exp as $ex){
                    if(strtolower($ex)==strtolower($word[$i])){
                        $go=false;
                    }
                   
                }
                if($go){
                    $chars=str_split($word[$i]);
                    $abreviate=$abreviate.$chars[0];
                }
                
            }
        }
        else{
            for($i=0;$i<$size;$i++){
                $go=true;
                
                foreach($arr_exp as $ex){
                    if($ex==$word[$i]){
                        $go=false;
                    }
                   
                }
                if($go){
                    $chars=str_split($word[$i]);
                    $abreviate=$abreviate.$chars[0];
                }
            }
        }
        
       
    }
    else{
        $chars=str_split($word[0]);
        $n=sizeof($chars);
        if($n>=1){
            for($i=0;$i<1;$i++){
                $abreviate=$abreviate.$chars[$i];
            }
        }else{
            $abreviate=$chars[0];
        }
       
      
    }
    return strtoupper($abreviate);
}
function shorten($txt){
    //this function will shorten names which are more than 2 words 
    //reducing the name into just 2 words,
    //the first 2 words are the most siginificant in the name
    //do not modify this fucntion as this will affect the assets_mgt_form module()Assets managment 
    //this function is being used in the assets summary pannel
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
function replace($chars,$orig){//
    //this function is used to combine dta frm different column into a one string 
    //the value came form a jquery that is why you cannto use implode fucntion here
    //this is used in list putting a white space before the defined key
    //its purpose is so that when the resolution fits that of the element
    //the character will a\utomatically word wrap
    //hahaha looks too complicated algo but only doing simple task
    // the list can still work even without this
    //the function name replace is to only to put white space in between / - or ( ) or how it is defined 
    //in the chars parameter
    $elems=explode("%",$chars);
    $val=$orig;
    foreach($elems as $elem){
        $val=str_replace($elem,$elem." ",$val);// this workls this way: replace this, with this, in this string
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
           echo "<li> ".replace($keys,shorten($row[$col[0]]))."<br>
           (".replace($keys,shorten($row[$col[1]]))."):&nbsp".replace($keys,shorten($row[$col[2]]))."</li>";
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

function loadtable_radio($str,$headers,$chkbox,$all,$class,$func){//paramerters are as follows:
    //$str is the sql command, 
    //$headers(array): are the header that shows on the table column head 
    //$chkbox is a boolean to add checkboxes at the begiining of each row
      //$all is a  boolean variable if true will add check all at the very first table header cell
    //the $class is an array with 2 elements: 
    //1st elem is the class header of checkbox for check all and the second elem 
    //is the class name for each checkbox in the table rows
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
                        echo"<td><input type='radio' 
                        class='".$class[1]."'  name='".$class[1]."'  value='".$e."'";
                        if($func!=""){
                            echo "onclick='".$func."'";
                        }
                        echo"></td>";    
                    }
                    $chkbox=false; 
                }
                else{
                    if($e=='activation'){
                        $e="For ".$e;
                    }
                       
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
    else{
        echo "";
    }
}

function loadtable($str,$headers,$chkbox,$all,$class){//paramerters are as follows:
    //$str is the sql command, 
    //$headers(array): are the header that shows on the table column head 
    //$chkbox is a boolean to add checkboxes at the begiining of each row
      //$all is a  boolean variable if true will add check all at the very first table header cell
    //the $class is an array with 2 elements: 
    //1st elem is the class header of checkbox for check all and the second elem 
    //is the class name for each checkbox in the table rows
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
                    if($e=='activation'){
                        $e="For ".$e;
                    }
                       
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
    else{
        echo "";
    }
}
function office_combobox(){
	echo "<select id='office' name='office' >";
							
         $str="SELECT id,office_name FROM office";
         loadropdown($str,"id","office_name","Offices");//function for loading values into the dropdown accepts sql command and name of columns 
							
	echo"</select>";
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
function loadstationlist($str,$col1,$col2,$from){
    
    $db = new Database();
    $db->connect();
    $data=$db->selectrows($str,0);
   
    if($data!=null){
        //echo"<option value=0>Select from Options Below</option>";
        foreach($data as $d){
            echo "<option value='".$d[$col1]."'>".$d[$col2]."</option>";
        }
    }
    else{
        echo"<option value='0'>Select from ".$from."</option>";
    }
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

function load_label_input($str, $div2,$class,$col1,$col2,$col3){
    $db = new Database();
    $db->connect();
    $data=$db->selectrows($str,0);
    $elem="";
    if($data!=null){
       
        foreach($data as $d){
            echo"<div class'".$div2."'><label>".ucfirst($d[$col2])."</label> <input type='hidden' id='".$d[$col1]."' value='".encrypt($d[$col1])."'><input class='".$class."' type='text' id='".$d[$col2]."'";
            if($col3!=""){
                echo "value='".$d[$col3]."'";
            }
            echo "></div>";
            $elem.="%".$d[$col2];                                                                           
        }
        echo "<script>var elems='". $elem."';</script>";
    }
    else{
        echo "";
    }
}
function loadropdown_encrypt($str,$col1,$col2,$from,$abrv){//$from is the deafult value of the combo box if data is null, $col1 ar ethe column names form the db 
    //these column names depends on the table examle regions table and i selected id and name, the id and name data will be encypted however it needs
    // a data in option tag that is not encrypted so that is why there is $col2 variable so it couls show like this <option>Region 1</option>
    
    $db = new Database();
    $db->connect();
    $data=$db->selectrows($str,0);
   
    if($data!=null){
        echo"<option value=0>Select Below</option>";
        foreach($data as $d){
            $val="";
            $c1=0;
            foreach($col1 as $c){
                if($c1==0){
                    $val=$d[$c];
                }
                else{
                    $val=$val."%".$d[$c];
                }
              
                $c1++;
            }
          
            $abr=$d[$col2];
            $start=strpos($abr,"(");
            $end=strpos($abr,")");
            $go= ($start!=null && $end!=null)? true:false;
            
            $words=str_word_count($d[$col2]);
        
            $abr= ($words>4) ? abreviate_except($abr, $words,"IN AND OF") : $d[$col2];
            
            //$abr=($go)? substr($abr,0,$start): $abr;
            $abr= (strlen($abr)>31) ? abreviate_except($abr, $words,"IN AND OF (CAR)") :  $abr;
            $abr =($abrv==1)?  $abr: $d[$col2];
            echo "<option value='".encrypt($val."%".$d[$col2])."'>".strtoupper( $abr)."</option>";
        }
    }
    else{
        echo"<option value='0'>Select ".$from."</option>";
    }
}
function loadintodb(){
    //this is a function which was used to upload the 42k lines of data from excell to the database
    //this was only used once 
    //function wont work in higher version of php
    //keeping this fucntion here for reference
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
  //the idea is to scan each line of data in excel
  //first it checks if the regional id in the next row is not the same
  //takes teh value of the next row 
  //then it creates an sql command inerting a data into the region table
  //it does the same for the province, municipality and barangay
  //for creating such algorithms
  //you can use your imagination and creativity
  //it works all the time for me

    for ($row = 1; $row < 42059; $row++) {

        
        /*012801001 -0- 01 -2- REGION I (ILOCOS REGION) -4- 28 -6- ILOCOS NORTE -7- PH012801000 -8- 01 -11- 
        ADAMS -12- PH012801001 -13- 001 -14 Adams (Pob.) -15 18.453399 -16 0 -17-*/
        //below is an assosiative array
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
       //this is the condition of the regional code or regional id
       //checks if the current line of data is not equel t the next 
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
        //this is for the province
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
       //this is fo rthe minicipality
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
       //except for the branagay since each row in excell that contains unique brgy id and name

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

//echo rand_aphanumeric(40);
function rand_aphanumeric($len){
    $str="";
    $aplhabet="abcdefghijklmnopqrstuvwxyz";
    
    $chars="12345678901234567890".$aplhabet.strtoupper($aplhabet);
    $char=str_split($chars);
    $size=sizeof($char);
    for($i=0;$i<$len;$i++){
        $str.=$char[rand(0,$size-1)];
    }
    return $str;
}
function generate_password($len){//this is a useful funciton for generating password
    //using aplhanumeric randomizer with upper and lower case
    //$len specifies how many characters
    //this is used in personnel data entry
    //still useful for generating random letters aside form password generation
    $pass="";
    $aplhabet="abcdefghijklmnopqrstuvwxyz";
    
    $chars="1234567890$@#*1234567890".$aplhabet.strtoupper($aplhabet);
    $char=str_split($chars);
    $size=sizeof($char);
    for($i=0;$i<$len;$i++){
        $pass.=$char[rand(0,$size-1)];
    }
    return $pass;
}

//the following commands are the encrypt and decrypt 
//using my own unique key or salt
//this function uses the AES-128-CBC encryption
//it cannot be decrypted withiout using my unique key which i generated
//do not change it yet, otherwise it will fail to decrypt the encrypted passwords
//in the database using this current key
//i used it to decrypt the id of personnel in the Peronnel's user account module
//so if they inspected the web all they will see is an encyrpted data
//this fucntion is being used also in several modules
define("encryption_method", "AES-128-CBC");
define("key", "nO2T0fp6D@*P_yd6cmVUw$0oC");
function encrypt($data) {
    $key = key;
    $plaintext = $data;
    $ivlen = openssl_cipher_iv_length($cipher = encryption_method);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
    $hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
    $ciphertext = base64_encode($iv . $hmac . $ciphertext_raw);
    return $ciphertext;
}
function decrypt($data) {
    $key = key;
    $c = base64_decode($data);
    $ivlen = openssl_cipher_iv_length($cipher = encryption_method);
    $iv = substr($c, 0, $ivlen);
    $hmac = substr($c, $ivlen, $sha2len = 32);
    $ciphertext_raw = substr($c, $ivlen + $sha2len);
    $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
    $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
    if (hash_equals($hmac, $calcmac))
    {
        return $original_plaintext;
    }
}
function reroute($level,$destination){//$level is for the access level, 2nd paramenter is for the destination of reroute if $_SESSION["auth_level"]<=$elvel 
    $statusCode="";
    if(intval($_SESSION["auth_level"])<=$level){
      
        header('Location: ' . $destination, true, $statusCode);
        die();
      }
}
function test2(){
    $class=array("input_wrapper","dst_lbl label","dst_input","dst_hidden");
    $sql="SELECT attributes_name,id,`value`,disaster_id FROM disaster_attributes_view where disaster_id=9";
    $cols=array("attributes_name","id","value");
    make_label_inputs($sql,$class,true,true,$cols);

}
//test2();

function test(){

    $mydb = new Database();//connects to database using the object from codes.php
    $mydb->connect(); //connects ot db
    $staff_id=8;
   
    $data=$mydb->selectrows("SELECT lname,gender FROM officials where id=". $staff_id,0);
    $lname=(!$data==0) ? $data[0]["lname"]: "Staff";
    $gender=(!$data==0) ? $data[0]["gender"]: "Mr./Ms.";

    if($gender=="Male"){
        $gender="Mr.";
    }
    if($gender=="Female"){
        $gender="Ms.";
    }

    $email="lowejames.mayores@gmail.com";
    $pass="pass";
    $username="uname";
    $content= "<html><body>
    Dear  <b>".$gender." ".$lname.":</b>
    <br>
    <br>
    Good Day!<br>
    <br>
    This is a system generated email, please change your password.<br>
    <br>
    Login to your AMIS account using the provided username and password,<br>
    <br>
    username: ".$username." 
    <br>
    password: ".$pass."
    <br>
    <br>
    Thank you very much.<br>
    <br>
    Best regards,<br>
    <br>
    <br>
    <b>Resilient Data Analytics Management Section<br>
    Disaster Risk Reduction Management Division</b>
    </body>
    </html>";

    $subject="ASSETS MANAGEMENT INFORMATION SYSTEM ACCOUNT ACTIVATION (DO NOT REPLY).";
    $mail=send_email($email, $subject, $content);
    if($mail=="sucess"){
    echo "Account activation email sent!";
    }
    else{
    echo "An unknown error has occured plase contact the Administrator!".$mail;
    }
}


/* echo "If you view the source of output frame \r\n you will find a newline in this string.";
echo "<br>";
echo nl2br("You will find the
    
newlines in this string 

on the browser window."); */


//echo decrypt("EEUXxutB657qkc08evdxTu2NTu+PLf53937jjqD2l2AnaJlDTDe2lM1lhd/s6ruO7b0KI1/Zow6eiT6fp7W02A==");
//$db=new Database();
//test();
//echo $db->connect();
 //$str="SELECT * FROM d_attributes d";
 //load_label_input($str,"input","attrs","id","attributes_name","");
//echo abreviate("ACCESS POINT",2); 

//JS API
function get_session($name){
    if(isset($_SESSION[$name]))
    {
        return $_SESSION[$name];
    }
    else{
        return "false";
    }
}

function send_email($to,$subject,$content){
    //this is the function for sending mail
    //the variable names are very self explanatory
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <enquiries@it-doneright.co.uk>' . "\r\n";
    $msg=mail($to,$subject,$content, $headers);
    if( $msg){
        return "sucess";
    }
    else{
        return  $msg;
    }
}
function update_session($data){
    
    
    foreach($data as $key => $value) {
        $_SESSION[$key]=$data[$key];
    }
 }
// echo $_SESSION["p"];
// if(isset($_GET["fname"])){
//    $_SESSION["fname"]=$_GET["fname"];
//    $_SESSION["lname"]=$_GET["lname"];
//    $_SESSION["position"]=$_GET["position"];
//    $_SESSION["login_email"]=$_GET["login_email"];
//    $_SESSION["user_address"]=$_GET["user_address"];
//    $_SESSION["user_mobile"]=$_GET["user_mobile"];
//     header("Location:../userprofile.php");
// }

//echo $_SESSION["url"]. " ".decrypt($_SESSION["id"]);
//echo get_rows_string_delimeter("SELECT category,brgy_id,lat,`long`, COUNT(*) as `count` FROM deployed_assets_loc where id=2 group by  category","|","%");
// echo summarize_list("Manpack Radio, Sat Phone, UHF Radio, Manpack Radio",
  //"65464225, 356065065478581, a12312313, 65464225", 4);
 /*($str="SELECT  GROUP_CONCAT( `category` SEPARATOR ', ') as category  , GROUP_CONCAT( `serial` SEPARATOR ', ') as  `serial`, brgy_id,lat,`long`, count(*) as `count` FROM deployed_assets_loc i where id=2 group by  brgy_id order by brgy_id";
 $cols=array("brgy_id", "lat", "long", "category", "serial", "count");
 echo "<br>"."<br>".get_rows_implode($str,"@","%",$cols);*/
?>