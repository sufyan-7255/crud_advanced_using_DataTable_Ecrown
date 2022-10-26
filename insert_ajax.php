<?php
header("Content-Type: application/json");
include("connection.php");
$name = $_POST["name"];
$f_name = $_POST["f_name"];
$roll_no = $_POST["roll_no"]; 
$class = $_POST["class"];
$section = $_POST["section"];
$reg_id = $_POST["reg_id"];
$fees = $_POST["fees"];
$age = $_POST["age"];
$subjects = $_POST["subjects"];
$gender = $_POST["gender"];

$insertquery = "insert into register_tbl(name, f_name, roll_no, class, section, reg_id, fees, age, subjects, gender) values('{$name}','{$f_name}','{$roll_no}','{$class}','{$section}','{$reg_id}','{$fees}','{$age}','{$subjects}','{$gender}')";

$insertqueryconnect = mysqli_query($con, $insertquery);

if ($insertqueryconnect){
    $return_data = array(
        "status"=> "0",
        "message"=>"data has beeen inserted"
    );
} else {
    $return_data = 1;
}


print(json_encode($return_data, JSON_PRETTY_PRINT));
?>
