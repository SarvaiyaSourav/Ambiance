<?php
include 'connection.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE email='$email' AND password = '$password'";
    $data = mysqli_query($conn,$query);
    $userexists = mysqli_num_rows($data);
    if($userexists==1){
        $row = mysqli_fetch_assoc($data);
        $username = $row['name'];
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['useremail']= $email;
        $_SESSION['username']=$username;
        header("Location: homepage.php");
        exit;
    }
  
    $query = "SELECT * FROM adminuser WHERE username='$email' AND password = '$password'";
    $data = mysqli_query($conn,$query);
    $userexists = mysqli_num_rows($data);
    if($userexists==1){
        $row = mysqli_fetch_assoc($data);
        $username = $row['name'];
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['useremail']= $email;
        $_SESSION['username']=$username;
        header("Location: adminpanel.php");
        exit;
    }

    
    
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />

  <style>
    @font-face {
      font-family: "CustomFont";
      src: url("font/PlayfairDisplay-VariableFont_wght.ttf") format("woff");
    }

    @font-face {
      font-family: "CustomFont1";
      src: url("font/DancingScript-VariableFont_wght.ttf") format("woff");
    }

    @font-face {
      font-family: "CustomFont2";
      src: url("font/Urbanist-VariableFont_wght.ttf") format("woff");
    }

    .h1 {
      padding-top: 70px;
      padding-bottom: 50px;
      font-family: "CustomFont1", sans-serif;
    }

    /* .imag{

      } */

    body {
      background: linear-gradient(to left, #ffffff, #d4d4d4, #fafafa);
      padding-top: 40px;
    }

    /* .table {
        max-width: 400px;
        margin-left: 494px;
        margin-top: 50px;
      }

      .th {
        padding-bottom: 100px;
      } */

    /* .button{
        padding-top: 40px;
        font-size: 20px;
        color: white;
        height: 50px;
        width: 50px;
        background: #45aba6;
        border-radius: 20px;
        margin: 1px;
        border: none;
        cursor: pointer;   
      } */
    .loginbutton {
      padding-top: 100px;
      background: #c58e4f;
      padding: 5px 50px;
      border-color: #c58e4f;
      color: #000000;

      font-size: 28px;
      border: 1px solid #c58e4f;
      border-radius: 10px;
      width: 400px;
      height: 56px;
      cursor: pointer;
      font-weight: 800;
      font-family:'Times New Roman', Times, serif;
      margin-left: 115px;
    }

    .googlebutton {
      padding-top: 100px;
      background: #c58e4f;
      padding: 11px 50px;
      border-color: #c58e4f;
      color: #000000;
      text-align: center;
      font-size: 20px;
      border: 1px solid #c58e4f;
      border-radius: 10px;
      width: 100%;
      height: 56px;
      font-weight: 800;
      cursor: pointer;
      font-family: "CustomFont2", sans-serif;
    }

    .facebookbutton {
      padding-top: 100px;
      background: #c58e4f;
      padding: 11px 50px;
      border-color: #c58e4f;
      color: #000000;
      text-align: center;
      font-size: 20px;
      border: 1px solid #c58e4f;
      border-radius: 10px;
      width: 100%;
      height: 56px;
      cursor: pointer;
      font-weight: 800;
      font-family: "CustomFont2", sans-serif;
    }

    .check {
      padding-top: 5%;
      padding-bottom: 7%;
    }

    .ortable {
      max-width: 100%;
      margin-left: 50%;
    }

    .or-line {
      display: flex;
      align-items: center;
      text-align: center;
      color: #555;
    }

    .line {
      flex-grow: 1;
      height: 1px;
      background-color: #555;
      margin: 0 10px;
    }

    /* .checkbox {
        color: #c58e4f;
      } */

    .input1 {
      border: 1px solid #636262;
      border-radius: 8px;
      height: 40px;
      width: 90%;
      box-sizing: border-box;
      margin-bottom: 15px;
      padding: 10px;
    }

    th {
      font-family: "CustomFont", sans-serif;
    }

    input[type="checkbox"] {
      accent-color: #c58e4f;
    }
  </style>
</head>

<body>
  <div class="container" style="background-color: azure; box-shadow: 20px 20px 60px #636262, inset -20px -20px 60px #ffffff40">
    <div class="row">
      <div class="col-lg-6">
        <div>
          <div class="h1">
            <h1 style="font-size: 60px">Login</h1>
          </div>
          <form method="POST">
            <table class="table" style="border: transparent">
              <tr>
                <th>Email:</th>
              </tr>
              <tr>
                <td><input class="input1" name="email" type="email" placeholder="Type Your Email." /></td>
              </tr>
              <tr>
                <th>Password:</th>
              </tr>
              <tr>
                <td><input class="input1" name="password" type="password" placeholder="Type Your Password." /></td>
              </tr>
              <tr>
                <td colspan="2">
                  <table class="inner-table">
                    <tr style="font-family: 'CustomFont', sans-serif">
                      <td class="check">
                        <input name="remember" class="checkbox" type="checkbox" />
                        <label for="Checkbox">Remember Me</label>
                      </td>
                      <td class="check" style="padding-left: 350px">
                        <a href="forgotpasswordemail.php">Forgot Password?</a>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <button class="loginbutton" name="login" type="submit">Log in</button>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <div class="or-line">
                    <div class="line"></div>
                    <span>
                      <h6>Or Continue With</h6>
                    </span>
                    <div class="line"></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="2" >
                  <p style="padding-left: 100px; font-family: 'CustomFont', sans-serif">
                    Don't have account?
                    <a href="register.php"> Register Here. </a>
                    &nbsp; .OR. Go to <a href="homepage.php
                    ">AMBIANCE.</a>
                  </p>
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="imag">
          <img src="image/login.png" style="height: 80%; width: 101.83%;" />
        </div>
      </div>
    </div>
  </div>

  



</body>

</html>