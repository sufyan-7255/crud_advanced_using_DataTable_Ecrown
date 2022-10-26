<?php
header("Content-Type: application/json");
include("connection.php");


$fetchquery = "select * from register_tbl";
$fetchqueryconnect = mysqli_query($con, $fetchquery); 
$return_data=[];
      while($show = mysqli_fetch_assoc($fetchqueryconnect)){
          $return_data[] = $show;
      }

// if ($fetchqueryconnect){
    //     $return_data = array(
    //         "status"=> "0",
    //         "message"=>"working"
    //     );
    // } else {
    //     $return_data = 1;
    // }

print(json_encode($return_data, JSON_PRETTY_PRINT));
