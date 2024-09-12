<?php
include('connection.php');
$email = $_GET['del'];

$query = "DELETE FROM adminuser WHERE id='$email'";
$data = mysqli_query($conn, $query);
if ($data) {
    header("Location:adminuser.php");
} else {
    echo "data not deleted!!!!!!!!";
}