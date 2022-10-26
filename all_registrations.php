<?php
include("connection.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>All Registrations</title>
</head>
<body>
<div class="container-fluid">
    <br>
    <a href="register.php" class="btn btn-primary" style="float:right;"><i class="fa fa-list" aria-hidden="true"></i> &nbsp; Show all Records</a> &nbsp;<a href="register.php" class="btn btn-info" style="float:right; margin-right: 20px !important;"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp; Register Form</a>

    <a ></a><h3 class="text-info"><i><u>All Registrations Are Shown Here:</u></i></h3>
    <br><br>   
    <table class="table table-bordered table-hover">
        <tr>
            <th class="bg-dark text-light">ID</th>
            <th class="bg-dark text-light">NAME</th>
            <th class="bg-dark text-light">F. NAME</th>
            <th class="bg-dark text-light">ROLL NO.</th>
            <th class="bg-dark text-light">CLASS</th>
            <th class="bg-dark text-light">SECTION</th>
            <th class="bg-dark text-light">REG ID</th>
            <th class="bg-dark text-light">FEES</th>
            <th class="bg-dark text-light">AGE</th>
            <th class="bg-dark text-light">SUBJECTS</th>
            <th class="bg-dark text-light">GENDER</th>
            <th class="bg-dark text-light">ACTIONS</th>
        </tr>


        <?php

        $selectquery = "select * from register_tbl";
        $selectqueryconnect = mysqli_query($con, $selectquery);
        while ($r = mysqli_fetch_array($selectqueryconnect)) {
        ?>
        <tr>

            <td><?php echo $r["id"] ?></td>
            <td><?php echo $r["name"] ?></td>
            <td><?php echo $r["f_name"] ?></td>
            <td><?php echo $r["roll_no"] ?></td>
            <td><?php echo $r["class"] ?></td>
            <td><?php echo $r["section"] ?></td>
            <td><?php echo $r["reg_id"] ?></td>
            <td><?php echo $r["fees"] ?></td>
            <td><?php echo $r["age"] ?></td>
            <td><?php echo $r["subjects"] ?></td>
            <td><?php echo $r["gender"] ?></td>
            <td><a href="delete.php?sid=<?php echo $r["id"]?>" class="btn btn-danger">Delete</a>     
            &nbsp;<a href="update.php" class="btn btn-success">Update</a></td>
        </tr>
        <?php
        }

        ?>


    </table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>