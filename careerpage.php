<?php

include('HEAD.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>careerpage</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- <link rel="stylesheet" href="careerpage.css"> -->
</head>

<style>
  .cheader {
    position: relative;
    text-align: center;
  }

  .cimg img {
    width: 100%;
    height: 1000px;
  }

  .cheader h1 {
    font-size: 70px;
    position: absolute;
    top: 30%;
    left: 50.5%;
    transform: translate(-50%, -50%);
    z-index: 1;
    color: white;
    text-shadow: 40px 40px 40px rgb(0, 0, 0);
    /* text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); */
  }

  .coverlay {
    position: absolute;
    top: 60%;
    left: 0;
    width: 100%;
    height: 400px;
    background-color: rgba(0, 0, 0, 0.5);
    background: linear-gradient(to top, black, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
  }

  .ctitle {
    margin-top: 5%;
  }

  .ctitle h4 {
    color: tomato;
    font-size: 50px;
  }

  .ctitle p {
    font-size: 20px;
    margin-left: 30%;
    margin-right: 30%;
  }

  .middhead {
    margin-top: 5%;
    margin-bottom: 2%;
  }

  .middhead h2 {
    font-size: 50px;
    color: tomato;
  }

  .feature {
    margin-left: 10%;
    margin-right: 10%;
  }

  .feat {
    background-color: #f8f9fa;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  .fhead {
    margin-top: 10px;
    margin-bottom: 20px;
  }

  .fhead h4 {
    color: black;
    font-size: 28px;
    font-weight: 500;
  }

  .fhead img {
    padding-bottom: 20px;
    display: block;
    margin: 0 auto;
    width: 90px;
  }

  .finfo {
    margin-top: auto;
    text-align: center;
    margin-left: 20%;
    margin-right: 20%;
  }

  .finfo blockquote {
    margin-bottom: 0;
  }

  .benefits {
    margin-top: 10%;
  }

  .perks img {
    width: 25px;
  }

  .perks p {
    padding-left: 5px;
    font-size: 18px;
  }

  .perks h1 {
    font-size: 30px;
  }

  .ttp {
    text-align: center;
    /* padding-left: 5%; */
  }

  .Heading {
    text-align: center;
    font-size: 40px;
    margin-top: -25px;
    padding-bottom: 20px;
    color: tomato;
  }

  .box {
    margin: 5%;
    border-right: 1px dashed #ffffff;
    border-left: 1px dashed #ffffff;
    margin-left: 18%;
    margin-right: 18%;
  }

  .box1 {
    text-align: center;
    color: #ffffff;
  }

  .container {
    padding: 20px;
  }

  .dash {
    color: tomato;
  }

  .ttp {
    background-color: rgba(0, 0, 0, 0.822);
    color: white;
    margin: 5%;
    padding: 2%;
    text-align: center;
  }

  .box1 button {
    width: 40%;
    height: 50px;
    background-color: tomato;
    border-color: white;
    font-weight: bold;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    transition: all 1s ease;
    border-radius: 20px;
    font-size: 18px;
  }

  .box1 button:hover {
    background-color: transparent;
    color: tomato;
  }

  /* form */

  .class label {
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
    transition: all 1.5s ease;
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

  option {
    background-color: #33393f3b;
    color: #0c2844;
  }

  option:hover {
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

  .application {
    padding-left: 8%;
    padding-right: 8%;
    font-family: 'Times New Roman', Times, serif;
  }

  .application table {
    margin-top: 20px;
    margin-left: 115px;
  }

  .application table tr {
    margin-top: 20px;
  }

  .application h4 {
    margin-left: 20px;
  }




  .button-style {
    display: inline-block;
    font-weight: bold;
    padding: 10px 20px;
    background-color: tomato;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 8%;
    margin-bottom: 8%;
  }

  .button-style:hover {
    background-color: transparent;
    color: tomato;
    border: 1.5px solid tomato;
    border-radius: 5px;
  }


  .aplly {
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-radius: 20px;
  }

  .aplly h1 {
    padding-top: 5%;
    color: tomato;
  }

  .application h2 {
    color: tomato;
    margin-left: 2%;
    padding-bottom: 10px;
    font-size: 40px;
  }

  .application p {
    font-size: 20px;
    margin-left: 12%;
    margin-right: 12%;
  }

  .application h5 {
    font-size: 60px;
    color: tomato;
    margin-top: 5%;
  }
</style>

<body>



  <div class="cheader">
    <div class="cimg">
      <img src="image/Interior-design-jobs-salaries-AD.jpg" alt="" />
      <div class="coverlay">
        <h1>
          Let's shape the future of <br />
          Designing together
        </h1>
      </div>
    </div>
  </div>

  <div class="ctitle text-center">
    <h4>Where passion for design meets technology.</h4>
    <p>Livspace is at the helm of the home interiors transformation. We use tech to scale the jobs of interior designers, and to ease the lives of homeowners and service partners.</p>
  </div>

  <div class="middhead text-center">
    <h2>The Livspace way of life</h2>
  </div>

  <div class="features">
    <div class="feature">
      <div class="row">
        <div class="col-lg-4 text-center">
          <div class="feat feature-box-1">
            <div class="fhead">
              <img src="image/We-love-Solving.png.160389953942-removebg-preview.png" alt="" />

              <h4>We are about solving</h4>
            </div>
            <div class="finfo">
              <blockquote>We don’t dwell on problems, we find solutions - better ones every day.</blockquote>
            </div>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <div class="feat feature-box-1">
            <div class="fhead">
              <img src="image/We-think-10x.png.1603899545837__1_-removebg-preview.png" alt="" />
              <h4>We think 10X</h4>
            </div>
            <div class="finfo">
              <blockquote>Quality is a must. But fast is always better than perfect.</blockquote>
            </div>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <div class="feat feature-box-1">
            <div class="fhead">
              <img src="image/We-think-new.png.1603899562651-removebg-preview.png" alt="" />
              <h4>We think first principle</h4>
            </div>
            <div class="finfo">
              <blockquote>We experiment, we learn, break up the complicated and think ground up.</blockquote>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 text-center">
          <div class="feat feature-box-1">
            <div class="fhead">
              <img src="image/We-have-tiny-egos.png.1603899569-removebg-preview.png" alt="" />
              <h4>We have tiny egos</h4>
            </div>
            <div class="finfo">
              <blockquote>We stay humble, admit mistakes and do what’s right – with a smile.</blockquote>
            </div>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <div class="feat feature-box-1">
            <div class="fhead">
              <img src="image/We-love-the-smarts.png.160389958-removebg-preview.png" alt="" />
              <h4>We hire smart</h4>
            </div>
            <div class="finfo">
              <blockquote>We hire people smarter than us. We’re driven by ideas, not hierarchy.</blockquote>
            </div>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <div class="feat feature-box-1">
            <div class="fhead">
              <img src="image/We-love-to-party.png.16038995971-removebg-preview.png" alt="" />
              <h4>We work and play</h4>
            </div>
            <div class="finfo">
              <blockquote>We take leisure seriously, with lots of fun!</blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="application">
    <h5 class="text-center">WANT TO JOIN OUR TEAM</h5>
    <p class="text-center">Are you passionate about design? WANT TO JOIN OUR TEAM? We're hiring experienced interior designers to join our innovative team and create stunning living spaces for our clients. Apply now!</p>

    <h2>Open Positions</h2>
    <hr>
    <div class="row">

      <div class="col-lg-4">
        <form method="post">
          <div class="aplly">
            <h1 class="text-center">INTERIOR DESIGN</h1>
            <table class="text-center">
              <tr>
                <td>
                  <h3>EXPERIENCE:</h3>
                </td>
                <td>
                  <h4>2-5 years</h4>
                </td>
              </tr>
              <tr>
                <td>
                  <h3>SALARY:</h3>
                </td>
                <td>
                  <h4>30,000Rs/m</h4>
                </td>
              </tr>
            </table>
            <?php
            $intdeg = 'INTERIOR DESIGN';
            echo "
              <div class='text-center' >
                <a class='button-style'  href='careerform.php?apply=" . $intdeg . "'>
                APPLY NOW
                </a>
              </div>
              
            ";
            ?>


          </div>
        </form>
      </div>

      <div class="col-lg-4">
        <form method="post">
          <div class="aplly">
            <h1 class="text-center">INTERIOR DESIGN</h1>
            <table class="text-center">
              <tr>
                <td>
                  <h3>EXPERIENCE:</h3>
                </td>
                <td>
                  <h4>2-5 years</h4>
                </td>
              </tr>
              <tr>
                <td>
                  <h3>SALARY:</h3>
                </td>
                <td>
                  <h4>30,000Rs/month</h4>
                </td>
              </tr>
            </table>
            <?php
            $intdeg = 'INTERIOR DESIGN';
            echo "
<div class='text-center'>
                <a  class='button-style' href='careerform.php?apply=" . $intdeg . "'>
                  APPLY NOW
                </a>
</div>
            ";
            ?>
          </div>
        </form>
      </div>
      <div class="col-lg-4">
        <form method="post">
          <div class="aplly">
            <h1 class="text-center">INTERIOR DESIGN</h1>
            <table class="text-center">
              <tr>
                <td>
                  <h3>EXPERIENCE:</h3>
                </td>
                <td>
                  <h4>2-5 years</h4>
                </td>
              </tr>
              <tr>
                <td>
                  <h3>SALARY:</h3>
                </td>
                <td>
                  <h4>30,000Rs/month</h4>
                </td>
              </tr>
            </table>
            <?php
            $intdeg = 'INTERIOR DESIGN';
            echo "
              <div class='text-center'>
                <a  class='button-style' href='careerform.php?apply=" . $intdeg . "'>
                  APPLY NOW
                </a>
              </div>
            ";
            ?>
          </div>
        </form>
      </div>
    </div>
    <br>
    <br>
    <div class="row">
      <div class="col-lg-4">
        <form class="post">
          <div class="aplly">
            <h1 class="text-center">SENIOR INTERIOR DESIGN</h1>
            <table class="text-center">
              <tr>
                <td>
                  <h3>EXPERIENCE:</h3>
                </td>
                <td>
                  <h4>5 years</h4>
                </td>
              </tr>
              <tr>
                <td>
                  <h3>SALARY:</h3>
                </td>
                <td>
                  <h4>75,000Rs/month</h4>
                </td>
              </tr>
            </table>
            <?php
            $senintdeg = 'SENIOR INTERIOR DESIGN';
            echo "
              <div class='text-center'>
                <a  class='button-style' href='careerform.php?apply=" . $senintdeg . "'>
                  APPLY NOW
                </a>
              </div>
            ";
            ?>
          </div>
        </form>
      </div>
      <div class="col-lg-4">
        <form method="post">
          <div class="aplly">
            <h1 class="text-center">BUSINESS ANALYST</h1>
            <table class="text-center">
              <tr>
                <td>
                  <h3>EXPERIENCE:</h3>
                </td>
                <td>
                  <h4>3-5 years</h4>
                </td>
              </tr>
              <tr>
                <td>
                  <h3>SALARY:</h3>
                </td>
                <td>
                  <h4>45,000Rs/month</h4>
                </td>
              </tr>
            </table>
            <?php
            $busana = 'BUSINESS ANALYST';
            echo "
             <div class='text-center'>
               <a  class='button-style' href='careerform.php?apply=" . $busana . "'>
                 APPLY NOW
               </a>
             </div>
            ";
            ?>
          </div>
        </form>
      </div>
      <div class="col-lg-4">
        <form method="post">
          <div class="aplly">
            <h1 class="text-center">GENERAL MANAGER</h1>
            <table class="text-center">
              <tr>
                <td>
                  <h3>EXPERIENCE:</h3>
                </td>
                <td>
                  <h4>3-5 years</h4>
                </td>
              </tr>
              <tr>
                <td>
                  <h3>SALARY:</h3>
                </td>
                <td>
                  <h4>90,000Rs/month</h4>
                </td>
              </tr>
            </table>
            <?php
            $genman = 'GENERAL MANAGER';
            echo "
              <div class='text-center'>
                <a  class='button-style' href='careerform.php?apply=" . $genman . "'>
                  APPLY NOW
                </a>
              </div>
            ";
            ?>
          </div>
        </form>
      </div>
    </div>

    <br>
    <br>
    <div class="row">
      <div class="col-lg-4">
        <form method="post">
          <div class="aplly">
            <h1 class="text-center">BUSINESS MANAGER</h1>
            <table class="text-center">
              <tr>
                <td>
                  <h3>EXPERIENCE:</h3>
                </td>
                <td>
                  <h4>1-3 years</h4>
                </td>
              </tr>
              <tr>
                <td>
                  <h3>SALARY:</h3>
                </td>
                <td>
                  <h4>50,000Rs/month</h4>
                </td>
              </tr>
            </table>
            <?php
            $busman = 'BUSINESS MANAGER';
            echo "
              <div class='text-center'>
                <a  class='button-style' href='careerform.php?apply=" . $busman . "'>
                  APPLY NOW
                </a>
              </div>
            ";
            ?>
          </div>
        </form>
      </div>
      <div class="col-lg-4">
        <form method="post">
          <div class="aplly">
            <h1 class="text-center">SOFTWARE DEVELOPER</h1>
            <table class="text-center">
              <tr>
                <td>
                  <h3>EXPERIENCE:</h3>
                </td>
                <td>
                  <h4>1-2 years</h4>
                </td>
              </tr>
              <tr>
                <td>
                  <h3>SALARY:</h3>
                </td>
                <td>
                  <h4>40,000Rs/month</h4>
                </td>
              </tr>
            </table>
            <?php
            $sofdev = 'SOFTWARE DEVELOPER';
            echo "
              <div class='text-center'>
                <a class='button-style'  href='careerform.php?apply=" . $sofdev . "'>
                  APPLY NOW
                </a>
              </div>
            ";
            ?>
          </div>
        </form>
      </div>
      <div class="col-lg-4">
        <form method="post">
          <div class="aplly">
            <h1 class="text-center">DEVELOPING MANAGER</h1>
            <table class="text-center">
              <tr>
                <td>
                  <h3>EXPERIENCE:</h3>
                </td>
                <td>
                  <h4>2-5 years</h4>
                </td>
              </tr>
              <tr>
                <td>
                  <h3>SALARY:</h3>
                </td>
                <td>
                  <h4>65,000Rs/month</h4>
                </td>
              </tr>
            </table>
            <?php
            $devman = 'DEVELOPING MANAGER';
            echo "
              <div class='text-center'>
                <a  class='button-style' href='careerform.php?apply=" . $devman . "'>
                  APPLY NOW
                </a>
              </div>
            ";
            ?>
          </div>
        </form>
      </div>
    </div>





  </div>

  <div class="benefits">
    <h1 style="margin-left: 15%; margin-bottom: 1%">Benefits and Perks</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="perks">
            <h1>Health benefits:</h1>
            <p><img src="image/check-mark1.png" alt="" />Health insurance with accident cover</p>
            <p><img src="image/check-mark1.png" alt="" />Maternity and paternity leave</p>

            <h1>Financial benefits:</h1>
            <p><img src="image/check-mark1.png" alt="" />Employee discount</p>
            <p><img src="image/check-mark1.png" alt="" /> Mobile phone discount</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="perks">
            <h1>Leave benefits:</h1>
            <p><img src="image/check-mark1.png" alt="" />Sick days</p>
            <p><img src="image/check-mark1.png" alt="" />Paid holidays</p>
            <p><img src="image/check-mark1.png" alt="" />Unpaid extended leave</p>
            <p><img src="image/check-mark1.png" alt="" />Sabbatical</p>
            <p><img src="image/check-mark1.png" alt="" />Bereavement leave</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="perks">
            <h1>Additional benefits:</h1>
            <p><img src="image/check-mark1.png" alt="" />Work from home</p>
            <p><img src="image/check-mark1.png" alt="" />Flexible hours</p>
            <p><img src="image/check-mark1.png" alt="" />Creche facilities</p>
            <p><img src="image/check-mark1.png" alt="" />Shuttle service</p>
            <p><img src="image/check-mark1.png" alt="" />Job training</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="ttp">
      <div class="box">
        <div class="box1">
          <div>
            <h3 class="Heading">Our Spacer Teams</h3>
          </div>
          <p>Our Spacer Teams are a dynamic blend of creative minds and technical expertise, dedicated to crafting immersive spatial experiences. With a passion for innovation and attention to detail, Our Spacer Teams transform ideas into stunning realities, shaping environments that inspire.</p>

          <div class="dash">
            <p>--------------------</p>
          </div>

          <a href="aboutusourteam.php">
            <button title="meet our team">OUR TEAM</button>
          </a>
        </div>
      </div>
    </div>
  </div>






  <?php
  include('footer.php');
  ?>


</body>

</html>