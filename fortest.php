
    <?php
   
    include "ALGO/codes.php";
    //test_size();
    //test_trim();
    $today=date("Y-m-d");
    echo $today;
    function test_trim(){
      $db= new Database();
        $db->connect();
        $cols="id";
        $col="id";
        $table="disaster_affected";
        $start=0;
        $sql="Select $cols from $table";
        $data=$db->selectrows($sql,0);
        $ids="";
        if($data!=null){
          $i=0;
          while($i<sizeof($data)){
           $ids.=encrypt($data[$i][$col])." ";
           $i+=10;
          }
       }
        $ids=trim($ids);
        echo $ids;
    }
    function test_size(){
      $db = new Database();
    $db->connect();
    $etc_id=9;
      $sql="select id,disaster_id from etc_disaster e where e.disaster_id=(select d.disaster_id from etc_disaster d where d.id=$etc_id) order by id desc";
      $etcs=$db->selectrows($sql,0);
      $size_etc= sizeof($etcs);
      echo  $size_etc;
    }
function testme(){
    $db = new Database();
    $db->connect();
    $disaster=14;
    $check_pending_etc_d=$db->select_one("select id from  etc_disaster where disaster_id=".$disaster." and `status`='activating'","id");
   
    $d_etc=$check_pending_etc_d;
    $sql4="SELECT  probability,overall_impact FROM etc_disaster where id=".$d_etc;
    $result=$db->selectrows($sql4,0);
        $prob=0;
        $imp=0;
        $status="new";
        if($result!=null){
          $prob=$result[0]["probability"];
          $imp=$result[0]["overall_impact"];
          $status="C";
        }
   
    if($check_pending_etc_d==0){
        
    }
    echo " mmm ".$prob." mmm ".$imp." mmm ".$status;
  }

 // echo remove_next_words("SURIGAO DEL NORTE",2," ");
  ?>
