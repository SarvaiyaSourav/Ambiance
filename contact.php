<?php
  include('Head.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>
  <link rel="stylesheet" href="contact.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />
  <link rel="stylesheet" href="contact.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <style>
    @font-face {
      font-family: "CustomFont";
      src: url("font/Satisfy-Regular.ttf") format("woff");
    }

    @font-face {
      font-family: "CustomFont2";
      src: url("font/AbrilFatface-Regular.ttf") format("woff");
    }

    body {
      font-family: "Times New Roman", Times, serif;
      background-color: #fff;
      height: 100%;
      margin: 0;
      padding: 0;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
    }

    .brand {
      width: 25%;
    }

    .centered-links {
      flex: 1;
      text-align: center;
    }

    .icons {
      margin-left: auto;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
    }

    nav li {
      margin-right: 20px;
    }

    nav a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }

    .background-section {
      /* background-image: url("image/240_F_345367229_0v6JuVvsKjdypRFaltAFvmQOqyjJ0W5q.jpg");
      background-size: cover; */
      background-position: center;
      /* background: linear-gradient(to left, #595959, #a6a6a6 , #595959); */
      background-color: #000000;
      background-repeat: no-repeat;
      color: #fff;
      text-align: center;
      padding: 50px;
    }

    .header h1 {
      font-weight: 700;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .contact {
      margin: 5%;
      background-color: rgb(255, 255, 255);
      height: auto;
      width: 80%;
      max-width: 675px;
      margin-left: auto;
      margin-right: auto;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 15px;
      box-sizing: border-box;
      margin-bottom: 15px;
    }

    textarea {
      width: calc(100% - 30px);
      padding: 10px;
      box-sizing: border-box;
      margin-bottom: 15px;
    }

    button {
      background-color: #000000;
      color: white;
      border: none;
      cursor: pointer;
      width: 100%;
      height: 50px;
    }

    table {
      margin: auto;
      padding-bottom: 20px;
    }

    .inner-table {
      width: 100%;
    }

    .inner-table th {
      text-align: left;
    }

    .map {
      align-content: center;
      height: 100%;
      width: 100%;
      padding-bottom: 10px;
    }

    .meetus {
      list-style: none;
    }

    .meetus li {
      padding-left: 125px;
      padding-top: 30px;
      font-size: large;
      max-width: fit-content;
    }

    .meetus a {
      text-decoration: none;
      color: #020000;
    }

    .contcenter {
      background: linear-gradient(to left, #595959, #a6a6a6 , #595959);
    }

    .terms-link {
      position: fixed;
      bottom: 10px;
      right: 10px;
      font-size: small;
      text-decoration: none;
      color: rgba(255, 255, 255, 0.7);
    }

    .terms-link:hover {
      text-decoration: underline;
    }

    .large {
      font-size: xx-large;
    }

    .cf {
      background-image: url("image/240_F_345367229_0v6JuVvsKjdypRFaltAFvmQOqyjJ0W5q.jpg");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      color: #fff;
      text-align: center;

    }
  </style>
</head>

<body>
  <div class="background-section">

    <div>
      <h1 style="font-family: 'CustomFont2', sans-serif; font-size: 30px">WE'RE HERE,</h1>
      <p style="font-family: 'CustomFont', 'Times New Roman', Times, serif; font-size: 60px; font-weight: bold">Let's have a talk</p>
    </div>
  </div>

  <div class="contcenter" style="overflow: hidden;">
    <div class="row" >
      <div class="col-lg-6">
        <div class="contact">
          <div class="header">
            <h1 align="center" style="padding-top: 20px">Pitch Us</h1>
          </div>
    
          <form method="POST">
            <table>
              <tr>
                <th>NAME</th>
                <th>ADDRESS</th>
              </tr>
              <tr>
                <td><input type="text" name="name" /></td>
                <td><input type="text" name="address" /></td>
              </tr>
              <tr>
                <th>PHONE</th>
                <th class="message">DATE</th>
              </tr>
              <tr>
                <td><input type="text" name="phone" /></td>
                <td><input type="date" name="date" /></td>
              </tr>
              <tr>
                <td colspan="2">
                  <table class="inner-table">
                    <tr>
                      <th>MESSAGE</th>
                    </tr>
                    <tr>
                      <td>
                        <textarea id="message" name="message" rows="4" placeholder="Enter your Message" required></textarea>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <button style="font-weight: bolder; margin-bottom: 50px" name="send" type="submit">SUBMIT</button>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </form>
    
    
    
        </div>
      </div>
      <div class="col-lg-6">
        <!-- <div class="col-lg-6">
              <img src="image/Untitled-removebg-preview.png"
              style="height: 350px; width: 600px; margin-left: 20px;" alt="">
            </div> -->
    
        <!-- <div class="large">
                <h1 align="center" style="padding-top: 50px;">Meet Us</h1>
                <ul class="meetus">
                  <li>
                    <a
                      href="tel:1234567890"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <span class="LinkedIn"
                        ><i class='bx bx-phone'></i>&nbsp;&nbsp;&nbsp;+123456789</i
                      ></span>
                    </a>
                  </li>
                  <li >
                    <a
                      href="mailto:xyzzzzzz@gmail.com"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <span class="LinkedIn"
                        ><i class='bx bx-at'></i>&nbsp;&nbsp;&nbsp;xyzzzzzz@gmail.com</i
                      ></span>
                    </a>
                  </li>
                  <li>
                    <a style="font-family: 'Times New Roman', Times, serif;" href="https://maps.google.com" target="_blank">
                      <span class="Twitter"
                        ><i class='bx bxs-map'></i>&nbsp;&nbsp;&nbsp;SVN,Kaliyabid,Bhavnagar.</span
                      >
                    </a>
                  </li>
                </ul>
             </div> -->
        <div class="map" style="padding: 50px; overflow:hidden;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59286.75796775919!2d72.11370654730857!3d21.763908263460564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5081abb84e2f%3A0xf676d64c6e13716c!2sBhavnagar%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1706258411490!5m2!1sen!2sin" width="100%" height="100%" style="border: 2px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    
    
    </div>
  </div>
 
  <!-- <div  class="terms-link" style="position: fixed; bottom: 10px;  color: rgba(255, 255, 255, 0.7); font-size: small; padding-bottom: 7.5px;">
      <a href="your-terms-and-conditions-url" style="text-decoration: none; color: inherit;" target="_blank">Terms and Conditions</a>
    </div> -->

  <?php
  include("connection.php");
  if (isset($_POST['send'])) {

    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $message = $_POST["message"];

    $query = "INSERT INTO contactus (name,address,phone,date,message) VALUES ('$name','$address','$phone','$date','$message')";
    $send = mysqli_query($conn, $query);
    if ($send) {
      echo "ok inserted!!";
    } else {
      echo "NO...INSERTED";
    }
  }
  ?>

  <?php
  include('footer.php');
  ?>


</body>

</html>