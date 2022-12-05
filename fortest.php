
    <?php
   
    include "ALGO/codes.php";

    $db = new Database();
    $db->connect();
    $etc_id=1;
    $sql="select id,disaster_id from etc_disaster e where e.disaster_id=(select d.disaster_id from etc_disaster d where d.id=$etc_id) order by id desc";
    $etcs=$db->selectrows($sql,0);
   
    echo sizeof($etcs);
  ?>
