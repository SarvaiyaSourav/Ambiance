<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Update Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 15px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <?php
    include("connection.php");

    $srno = $_GET['up'];

    $query = "SELECT * FROM inquiry WHERE sr = '$srno'";
    $data = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($data);
    $sr= $row['sr'];
    $name= $row['name'];
    $address= $row['address'];
    $phoneno= $row['phoneno'];
    $email= $row['email'];
    $city= $row['city'];
    $state= $row['state'];
    $postalcode= $row['postalcode'];
    $date= $row['date'];
    $message= $row['message'];


    
    ?>

    <form action="" method="POST">
        <label for="sr">SR.NO</label>
        <input type="text" name="sr" value="<?php echo $sr; ?>" required readonly>

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required>

        <label for="address">Address:</label>
        <input type="text" name="address" value="<?php echo $address; ?>" required>

        <label for="phoneno">Phoneno:</label>
        <input type="text" name="phoneno" value="<?php echo $phoneno; ?>" required>

        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>" required>

        <label for="city">City:</label>
        <input type="text" name="city" value="<?php echo $city; ?>" required>

        <label for="state">State:</label>
        <input type="text" name="state" value="<?php echo $state; ?>" required>

        <label for="postalcode">Postalcode:</label>
        <input type="text" name="postalcode" value="<?php echo $postalcode; ?>" required>

        <label for="date">Date:</label>
        <input type="date" name="email" value="<?php echo $date; ?>" required>

        <label for="message">Message:</label>
        <input type="message" name="message" value="<?php echo $message; ?>" required>

        <input type="submit" name="update" value="Update">
    </form>

    <?php
    if (isset($_POST['update'])) {
        $sr = $_POST['sr'];
        $name= $_POST['name'];
        $address= $_POST['address'];
        $phoneno= $_POST['phoneno'];
        $email= $_POST['email'];
        $city= $_POST['city'];
        $state= $_POST['state'];
        $postalcode= $_POST['postalcode'];
        $date= $_POST['date'];
        $message= $_POST['message'];
        $query = "UPDATE inquiry SET name='$name', address='$address', phoneno='$phoneno', email='$email', city='$city', state='$state', postalcode='$postalcode', date='$date', message='$message' WHERE sr=$srno";
        $data = mysqli_query($conn, $query);
        if ($data) {
            header("Location: adminpanel.php");
        } else {
            echo "Data not updated!";
        }
    }
    ?>

</body>

</html>