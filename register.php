<?php
  include("connection.php");
  if (isset($_POST['createaccount'])) {

    $fullname = $_POST["fullname"];
    $mobileno = $_POST["mobileno"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $pincode = $_POST["pincode"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];



    
    if (strlen($password) < 6) {
      
      echo "<script>alert('Password must be at least 6 characters long.')</script>";
      
      echo "<script>window.location.href='register.php'</script>";
      exit; 
  }
    if ($password !== $confirmpassword) {
      echo "<script>alert('Password and Confirm Password do not match.')</script>" ; 
      echo "<script>window.location.href='register.php'</script>";
      exit; 

  } else {
      
      $query = "INSERT INTO register (fullname,mobileno,email,address,pincode,password) VALUES ('$fullname','$mobileno','$email','$address','$pincode','$password')";
      
      $createaccount = mysqli_query($conn, $query);
      if ($createaccount) {
          echo "Account created successfully!";
          header("Location: login.php");
          exit;
      } else {
          echo "Error creating account: " . mysqli_error($conn);
      }
  }
  }
  ?>
  

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />

  <title>Register</title>

  <style>
    @font-face {
      font-family: "CustomFont";
      src: url("font/ProtestGuerrilla-Regular.ttf") format("woff");
    }

    body {
      background: linear-gradient(90deg, #d8985b, #c9651e, #d8985b);
    }

    .container {
      background-color: azure;
      box-shadow: 20px 20px 60px #c9651e, inset -20px -20px 60px #ffffff40;
      margin-top: 2%;
    }

    .imagee {
      margin-left: -12px;
    }

    .uppertext {
      padding-top: 10%;
      padding-left: 5%;
    }

    .uppertext h1 {
      font-family: CustomFont, sans-serif;
      font-size: 55px;
      color: #8f2d01;
    }

    .uppertext p {
      color: #ce6d27;
    }

    .rform {
      padding-top: 5%;
    }

    .input-icon i {
      position: absolute;
      top: 50%;
      left: 3%;
      transform: translateY(-50%);
      color: #e09595;
      font-size: 29px;
    }

    .input-icon input {
      padding-left: 50px;
    }

    .input-icon {
      position: relative;
    }

    input {
      border: 1px solid #8f8484;
      background-color: #ffffff;
      border-radius: 10px;
      height: 60px;
      width: 90%;
      margin-left: 1%;
    }

    .inputbutton {
      border: none;
      background-color: #ee7575de;
      border-radius: 10px;
      margin-left: 1%;
    }

    .downtext p {
      text-align: center;
    }

    a {
      text-decoration: none;
      color: #e09595;
    }

    
  </style>

</head>

<body>
  <div class="container">
    <div class="row" style="display: flex">
      <div class="col-lg-6">

        <img class="imagee" src="image/pexels-lisa-fotios-1090638.jpg" style="height: 100%; width: 100%;" />

      </div>
      <div class="col-lg-6">
        <div class="uppertext">
          <h1>Create An Account!!</h1>
          <p>Have your home design just in few steps...!!</p>
        </div>
        <div class="rform">
          <form method="POST">
            <div class="input-icon">
              <i class='bx bxs-user'></i>
              <input name="fullname" type="text" placeholder="Full Name." >
            </div><br>
            <div class="input-icon">
              <i class='bx bxs-mobile'></i>
              <input name="mobileno" type="text" placeholder="Mobile Number" />
            </div><br>
            <div class="input-icon">
              <i class='bx bxs-envelope'></i>
              <input name="email" type="Email" placeholder="Email" />
            </div><br>
            <div class="input-icon">
              <i class='bx bxs-map'></i>
              <input name="address" type="text" placeholder="Address" />
            </div><br>
            <div class="input-icon">
              <i class='bx bxs-pin'></i>
              <input name="pincode" type="text" placeholder="Pincode" />
            </div><br>
            <div class="input-icon">
              <i class='bx bxs-lock-alt'></i>
              <input name="password" type="text" placeholder="password"  />
            </div><br>
            <div class="input-icon">
              <i class='bx bxs-lock-alt'></i>
              <input name="confirmpassword" type="text" placeholder=" ConfirmPassword" />
            </div><br>
            <div>
              <a href="login.php">
                <button name="createaccount" class="inputbutton" style="width: 90%; height: 70px;">Create Account</button>
              </a>
            </div>
          </form><br>
          <div class="downtext">
            <p>
              Or Already Have An Acc?
              <a href="login.php">Login</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  





</body>

</html>