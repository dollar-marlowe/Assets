<?php
// include "../ALGO/codes.php";

// if(isset($_POST["filter_type"])){
//     $filter_type = $_POST["filter_type"];
//     $table_columns = $_POST["my_columns"];
//     $sql = "";

//     switch($filter_type){
//         case "count_total":
//             $sql = "SELECT COUNT($table_columns) FROM hf_data";
//             break;

//         case "operational":
//             $sql = "SELECT COUNT($table_columns) FROM hf_data WHERE station_status='Operational'";
//             break;

//         case "intermittent":
//             $sql = "SELECT COUNT($table_columns) FROM hf_data WHERE station_status='Intermittent'";
//             break;

//         case "rehabilitation":
//             $sql = "SELECT COUNT($table_columns) FROM hf_data WHERE station_status='Rehabilitation'";
//             break;

//         case "inactive":
//             $sql = "SELECT COUNT($table_columns) FROM hf_data WHERE station_status='Inactive'";
//             break;

//         case "open":
//             $sql = "SELECT COUNT($table_columns) FROM hf_data WHERE station_status='Operational'";
//             break;
//     }

//     $result = counter_hf_data_fn("hf_data", $table_columns, $sql);
//     if ($result !== false) {
//         echo $result;
//     } else {
//         echo "Error: Could not count rows in table.";
//     }
// } else {
//     echo "<script>window.location='../login.php';</script>";
// }
?>