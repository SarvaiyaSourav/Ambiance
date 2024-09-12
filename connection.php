<?php

    $servername="localhost";
    $username="root";
    $password="";
    $db_name="interior_design";

    $conn =mysqli_connect($servername,$username,$password,$db_name);
    if($conn)
    {
        // echo"OK";
    }
    else
    {
        echo"no";
    }

?>