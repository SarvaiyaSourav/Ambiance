<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>inquirynow</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="aboutus.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

  <style>
    @font-face {
      font-family: "CustomFont";
      src: url("font/Lobster-Regular.ttf") format("woff");
    }

    @font-face {
      font-family: "CustomFont1";
      src: url("font/PlayfairDisplay-VariableFont_wght.ttf") format("woff");
    }

    .contact {
      width: 100%;
      height: 100vh;
      overflow: hidden;
      background-image: url("image/HD-wallpaper-triangles-3d-abstract-art-background-geometry-gray-pattern-texture (1).jpg");
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .contactf {
      box-shadow: rgba(255, 250, 250, 0.35) 0px 5px 15px;
    }

    .header h1 {
      font-size: 50px;
      font-weight: 700;
      font-family: "CustomFont", sans-serif;
    }

    .contactf {
      background-color: rgba(255, 255, 255, 0.486);
      padding: 20px;
      border-radius: 10px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-size: 25px;
      margin-left: 25px;
      font-family: "CustomFont1", sans-serif;
      font-weight: 700;
      transition: all 0.1s ease;
    }

    .col-md-6:hover {
      text-shadow: 10px 10px 25px rgba(0, 0, 0, 0.226), -10px 10px 25px rgba(0, 0, 0, 0.226), -10px -10px 25px rgba(0, 0, 0, 0.226), 10px -10px 25px rgba(0, 0, 0, 0.226);
    }

    .col-md-12:hover {
      text-shadow: 10px 10px 25px rgba(0, 0, 0, 0.226), -10px 10px 25px rgba(0, 0, 0, 0.226), -10px -10px 25px rgba(0, 0, 0, 0.226), 10px -10px 25px rgba(0, 0, 0, 0.226);
    }

    input {
      width: 90%;
      padding: 15px;
      box-sizing: border-box;
      margin-bottom: 15px;
      border: 1px solid black;
      margin-left: 25px;
      transition: all 0.5s ease;
    }

    input:hover {
      border: 1px solid #555;
      border-radius: 15px;

    }

    input:focus {
      border-radius: 10px;
    }

    textarea {
      width: 90%;
      padding: 15px;
      box-sizing: border-box;
      margin-bottom: 15px;
      border: 1px solid black;
    }

    textarea {
      margin-left: 50px;
      width: 90%;
      margin-bottom: 15px;
      transition: all 0.5s ease;
    }

    textarea:hover {
      border: 1px solid #555;
      border-radius: 15px;

    }

    textarea:focus {
      border-radius: 10px;
    }

    button {
      background-color: #000000;
      color: white;
      border: none;
      cursor: pointer;
      width: 20%;
      height: 50px;
      font-size: 20px;
      border-radius: 5px;
      margin-left: 80%;
      transition: all 0.3s ease;
      font-weight: 700;
      font-family: "Times New Roman", Times, serif;
    }

    button:hover {
      background-color: transparent;
      color: black;
      border: 1.5px solid black;
      border-radius: 5px;
    }

    @media only screen and (max-width: 800px) {
      .contactf {
        padding: 15px;
      }

      label {
        font-size: 20px;
      }

      input,
      textarea {
        width: 100%;
        margin-left: 0;
      }

      button {
        width: 100%;
        margin-left: 0;
      }
    }
  </style>
</head>

<body>
  <div class="contact">
    <div class="container">
      <div class="contactf">
        <div class="row">
          <div class="col-lg-12">
            <div class="header">
              <h1 align="center">INQUIRY NOW</h1>
              
            </div>

            <form method="POST">
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="name">NAME</label>
                  <input name="name" type="text" id="name" />
                </div>
                <div class="col-md-6">
                  <label for="address">ADDRESS</label>
                  <input name="address" type="text" id="address" />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="phone">PHONE NO</label>
                  <input name="phoneno" type="text" id="phone" />
                </div>
                <div class="col-md-6">
                  <label for="email">EMAIL</label>
                  <input name="email" type="email" id="email" />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="city">CITY</label>
                  <input name="city" type="text" id="city" />
                </div>
                <div class="col-md-6">
                  <label for="state">STATE</label>
                  <input name="state" type="text" id="state" />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="postalcode">POSTAL CODE</label>
                  <input name="postalcode" type="text" id="postalcode" />
                </div>
                <div class="col-md-6">
                  <label for="date">DATE</label>
                  <input name="date" type="date" id="date" />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-12">
                  <label for="message" style="margin-left: 50px">MESSAGE</label>
                  <textarea name="message" id="message" rows="4" placeholder="Enter your Message" required></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-12">
                  <button name="submit" type="submit">SUBMIT</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include("connection.php");
  if (isset($_POST['submit'])) {

    $name = $_POST["name"];
    $address = $_POST["address"];
    $phoneno = $_POST["phoneno"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $postalcode = $_POST["postalcode"];
    $date = $_POST["date"];
    $message = $_POST["message"];

    $query = "INSERT INTO inquiry (name,address,phoneno,email,city,state,postalcode,date,message) 
    VALUES ('$name','$address','$phoneno','$email','$city','$state','$postalcode','$date','$message')";
    $submit = mysqli_query($conn, $query);
    if ($submit) {
      echo "ok inserted!!";
    } else {
      echo "NO...INSERTED";
    }
  }
  ?>
</body>

</html>