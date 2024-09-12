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

    $email = $_GET['up'];

    $query = "SELECT * FROM contactus WHERE phone = $email";
    $data = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($data);

    $name = $row['name'];
    $address = $row['address'];
    $phone = $row['phone'];
    $message = $row['message'];
?>

<form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $name; ?>" required>

    <label for="address">Address:</label>
    <input type="text" name="address" value="<?php echo $address; ?>" required>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" value="<?php echo $phone; ?>" required>

    <label for="message">Message:</label>
    <textarea name="message" required><?php echo $message; ?></textarea>

    <input type="submit" name="update" value="Update">
</form>

<?php
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $query = "UPDATE contactus SET name='$name', address='$address', phone='$phone', message='$message' WHERE phone=$email";
        $data = mysqli_query($conn, $query);

        if ($data) {
            header("Location: contactadmin.php");
        } else {
            echo "Data not updated!";
        }
    }
?>

</body>
</html>
