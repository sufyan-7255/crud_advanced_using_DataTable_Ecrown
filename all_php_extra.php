<?php
if (isset($_POST["submit"])) {
    $message = false;

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


    $insertquery = "insert into register_tbl(name, f_name, roll_no, class, section, reg_id, fees, age, subjects, gender) values('" . $name . "','" . $f_name . "','" . $roll_no . "','" . $class . "','" . $section . "','" . $reg_id . "','" . $fees . "','" . $age . "','" . $subjects . "','" . $gender . "')";


    $insertqueryconnect = mysqli_query($con, $insertquery);

    // if ($insertqueryconnect) {
    //     echo "inserted";
    // } else {
    //     echo "not inserted";
    // }

    if ($insertqueryconnect) {
        $message = true;
    } else {
    }
    if($message)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Congratulations! </strong> You are Registered Successfully
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
}
?>















