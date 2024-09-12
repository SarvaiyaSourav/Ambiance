<?php
include('connection.php');
$email = $_GET['del'];

$query = "DELETE FROM career WHERE sr='$email'";
$data = mysqli_query($conn, $query);
if ($data) {
    header("Location:adminpanel.php");
} else {
    echo "data not deleted!!!!!!!!";
}
