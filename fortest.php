
<!DOCTYPE html>
<html>
<body>

<?php
include "ALGO/codes.php";
function read_csv(){


    $row = 1;
    if (($handle = fopen("attributes.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            echo "<p> $num fields in line $row: <br /></p>\n";
            $row++;
            for ($c=0; $c < $num; $c++) {
                echo $data[$c] . " |";
            }
            echo "<br>";
        }
        fclose($handle);
    }
}
echo decrypt("aPNV8nU8V/Yq7DKzECTUYU+ax8qG9tvy9yKIoEqxTv9emaF4oUphc5TN7XkjN52JdPVbGo8VZKW97l8byw2bxA==");
/* $today=date("H:m:s");    
echo $today." "; */
/* libxml_use_internal_errors(true);
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<document>
  <user>John Doe</user>
  <email>john@example.com</email >
</document>";


$xml = simplexml_load_file("psg/xml/refprovince.xml");
if ($xml === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
} else {
  //print_r( $xml);
  foreach($xml->RECORD as $row)
  {
   
      echo $row->id."<br> ";
    
     // echo (string)$item->model;
  }
} */
?>

</body>
</html>