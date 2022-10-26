<?php
include("connection.php");

$deletequery = "delete from register_tbl where id= '".$_GET['sid']."'";
$deletequeryconnect = mysqli_query($con,$deletequery);
if($deletequeryconnect)
{
    header("Location:all_registrations.php");
}
else
{
    echo "<script>alert('Not Deleted')</script>";
}
if ($deletequeryconnect) {
    $delmessage = true;
} else {
}
if($delmessage)
{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Data has been Deleted
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>