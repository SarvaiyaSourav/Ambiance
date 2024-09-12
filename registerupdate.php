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

    $query = "SELECT * FROM register WHERE sr = $srno";
    $data = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($data);
    $sr= $row['sr'];
    $fullname = $row['fullname'];
    $mobileno = $row['mobileno'];
    $email = $row['email'];
    $address = $row['address'];
    $pincode = $row['pincode'];
    $password = $row['password'];
    
    ?>

    <form action="" method="POST">
        <label for="sr">SR.NO</label>
        <input type="text" name="sr" value="<?php echo $sr; ?>" required readonly>

        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" value="<?php echo $fullname; ?>" required>

        <label for="address">Address:</label>
        <input type="text" name="address" value="<?php echo $address; ?>" required>

        <label for="mobileno">Phone:</label>
        <input type="text" name="mobileno" value="<?php echo $mobileno; ?>" required>

        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>" required>

        <label for="pincode">Pincode:</label>
        <input type="text" name="pincode" value="<?php echo $pincode; ?>" required>

        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo $password; ?>" required>

        <input type="submit" name="update" value="Update">
    </form>

    <?php
    if (isset($_POST['update'])) {
        $sr = $_POST['sr'];
        $fullname = $_POST['fullname'];
        $mobileno = $_POST['mobileno'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];
        $password = $_POST['password'];

        $query = "UPDATE register SET sr='$sr', fullname='$fullname', mobileno='$mobileno', email='$email', address='$address', pincode='$pincode', password='$password' WHERE sr=$srno";
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