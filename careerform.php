<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <style>
    label {
    color: #0c2844;
    display: block;
    margin-bottom: 8px;
    font-size: 25px;
    margin-left: 25px;
    font-family: "CustomFont1", sans-serif;
    font-weight: 700;
    transition: all 0.1s ease;
    font-weight: 800;
  }



  input,
  select {
    width: 90%;
    padding: 15px;
    box-sizing: border-box;
    margin-bottom: 15px;
    border: 1px solid black;
    margin-left: 25px;
    transition: all 0.5s ease;
    border-radius: 10px;
    background-color: #33393f3b;
  }

  input:hover {
    border: 1px solid #0c2844;
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
    background-color: #33393f3b;
  }

  textarea:hover {
    border: 1px solid #0c2844;
    border-radius: 15px;
  }

  textarea:focus {
    border-radius: 10px;
  }

  .col-md-12 button {
    background-color: #000000;
    color: white;
    border: none;
    cursor: pointer;
    width: 30%;
    height: 50px;
    font-size: 20px;
    border-radius: 5px;
    margin-left: 35%;
    transition: all 0.3s ease;
    font-weight: 700;
    font-family: "Times New Roman", Times, serif;
  }

  .col-md-12 button:hover {
    background-color: transparent;
    color: black;
    border: 1.5px solid black;
    border-radius: 5px;
  }

  .careerapply h2 {
    color: #0c2844;
    font-size: 50px;
    margin-bottom: 40px;
    font-weight: 900;
  }

  .careerapply {
    width: 100%;
    height: 120vh;
    overflow: hidden;
    background-image: url("image/paper-style-dynamic-lines-backgr (1).jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .career {
    background-color: rgba(255, 255, 255, 0.185);
    padding: 38px;
    border-radius: 10px;
    box-shadow: rgba(255, 250, 250, 0.35) 5px 10px 30px;
  }

  option{
    background-color: #33393f3b; 
    color: #0c2844;
  }

  option:hover{
    background-color: #0c2844;
  }

  select option:checked {
    background-color: #33393f3b; 
    color: black; 
  }


  @media only screen and (max-width: 800px) {
    .contactf {
      padding: 15px;
    }

    .class label {
      font-size: 20px;
    }

    .class input,
    textarea {
      width: 100%;
      margin-left: 0;
    }

    .class button {
      width: 100%;
      margin-left: 0;
    }
  }
  </style>

</head>
<body>
    <?php
        $apply = $_GET['apply'];
    ?>
<div class="careerapply">
    <div class="container">
      <div class="career">
        <h2 class="text-center">APPLY FOR A CAREER</h2>
        <div class="row">
          <div class="col-lg-12">
            <form method="POST">
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="fullname">FULLNAME</label>
                  <input name="fullname" type="text" id="fullname" />
                </div>
                <div class="col-md-6">
                  <label for="address">ADDRESS</label>
                  <input name="address" type="text" id="address" />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="phoneno">PHONE NO</label>
                  <input name="phoneno" type="text" id="phoneno" />
                </div>
                <div class="col-md-6">
                  <label for="email">EMAIL</label>
                  <input name="email" type="text" id="email" />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="qualification">QUALIFICATION</label>
                  <input name="qualification" type="text" id="qualification" />
                </div>
                <div class="col-md-6">
                  <label for="experience">EXPERIENCE</label>
                  <input name="experience" type="text" id="experience" />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="skill">SKILL</label>
                  <input name="skill" type="text" id="skill" />
                </div>
                <div class="col-md-6">
                  <label for="dob">DATE OF BIRTH</label>
                  <input name="dob" type="date" id="dob" />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="referral">REFERRAL</label>
                  <input name="referral" type="text" id="referral" />
                </div>
                <div class="col-md-6">
                  <label for="occupation">OCCUPATIONS</label>
                  
                  <input name="occupation" type="text" value="<?php echo "$apply";?>" readonly>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <!-- <label for="time">TIME</label> -->
                  <input name="time" type="text" id="time" hidden />
                </div>
                <div class="col-md-6">
                  <!-- <label for="date">DATE</label> -->
                  <input name="date" type="date" id="date" hidden />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <!-- <label for="jdate">JOINING DATE</label> -->
                  <input name="jdate" type="date" id="jdate" hidden />
                </div>
                <div class="col-md-6">
                  <!-- <label for="status">STATUS</label> -->
                  <input name="status" type="text" value="pending" id="status" hidden />
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-12">
                  <button name="submit" type="submit">APPLY NOW</button>
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

    $fullname = $_POST["fullname"];
    $address = $_POST["address"];
    $phoneno = $_POST["phoneno"];
    $email = $_POST["email"];
    $qualification = $_POST["qualification"];
    $experience = $_POST["experience"];
    $skill = $_POST["skill"];
    $dob = $_POST["dob"];
    $referral = $_POST["referral"];
    $occupation = $_POST["occupation"];
    $time = $_POST["time"];
    $date = $_POST["date"];
    $jdate = $_POST["jdate"];
    $status = $_POST["status"];
    $query = "INSERT INTO career (fullname, address,phoneno,email,qualification,experience,skill,dob,referral,occupation,time,date,jdate,status) 
    VALUES ('$fullname', '$address', '$phoneno','$email','$qualification', '$experience', '$skill', '$dob', '$referral', '$occupation', '$time', '$date', '$jdate', '$status')";
    $submit = mysqli_query($conn, $query);
    if ($submit) {
      //echo "ok inserted!!";
    } else {
      echo "NO...INSERTED";
    }


    

  }
  ?>
</body>
</html>