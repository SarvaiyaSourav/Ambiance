<?php
session_start();
include 'connection.php';
$email = $_GET['email'];

if (isset($_POST['submit'])) {
    
    $newpassword = $_POST['password'];
    $confirmpassword = $_POST['cpassword'];

    if ($newpassword !== $confirmpassword) {
        echo "<script>alert('Password and Confirm Password do not match.')</script>";
    } elseif (strlen($newpassword) < 6) {
        echo "<script>alert('Password must be at least 6 characters long.')</script>";
    }

    else{
        $query = "UPDATE register SET password='$newpassword' WHERE email='$email'";
        $data = mysqli_query($conn, $query);

        if($data) {
            header('location:login.php');
    }

    else {
        echo"<script>alert('Password not updated')</script>";
    }
}
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="aboutus.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: linear-gradient(to left, #ffffff, #d4d4d4, #fafafa);
        }

        /* Container Styles */
        .container {
            background-color: azure;
            font-family: 'Times New Roman', Times, serif;
            box-shadow: 20px 20px 60px #636262, inset -20px -20px 60px #ffffff40;
            padding: 50px;
            max-width: 800px;
            margin: 0 auto;
            border-radius: 10px;
        }

        /* Heading Styles */
        .cheader h1 {
            font-size: 40px;
            font-weight: 900;
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 20px;
        }


        /* Input Styles */
        .form-group input {
            border: 1px solid #636262;
            border-radius: 8px;
            height: 40px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 15px;
            padding: 10px;
        }

        .form-group input:focus {
            outline: none;
            box-shadow: none;
        }

        /* Button Styles */
        #container button {
            margin-left: 35%;
            background: black;
            color: white;
            text-align: center;
            font-size: 20px;
            border: 1px solid #c58e4f;
            border-radius: 10px;
            width: 25%;
            height: 50px;
            cursor: pointer;
            font-family: "CustomFont2", sans-serif;
            margin-top: 20px;
            font-weight: 600;
        }

        #container a {
            color: black;
            text-decoration: none;

        }

        #container a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container" id="container">
        <form method="POST">
            <div class="row">
                <div class="col-md-12">
                    <div class="cheader">
                        <h1>Reset Password</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="form-group">
                        <label for="exampleInputEmail1">EMAIL</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    </div> -->


                    <div class="form-group">
                        <label for="exampleInputPassword1">PASSWORD</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">CONFIRM PASSWORD</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="ConfirmPassword" name="cpassword">
                    </div>



                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>


                    <div class="plinks">
                        <a href="login.php">Login</a>
                        <span>/</span>
                        <a href="register.php">Register</a>
                    </div>

        </form>
    </div>
</body>

</html>