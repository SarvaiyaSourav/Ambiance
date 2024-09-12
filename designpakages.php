<?php
        include('HEAD.php');
      ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>design package</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="designpackage.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <style>
      @font-face {
        font-family: "CustomFont";
        src: url("font/DancingScript-VariableFont_wght.ttf") format("woff");
      }
      .picture img {
        width: 100%;
        height: 950px;
      }

      .overlay {
        position: absolute;

        bottom: 40%;
        text-align: center;
        margin-left: 2%;
        margin-top: 20%;
      }

      .overlay h1 {
        color: rgb(212, 66, 66);
        font-size: 180px;
        text-shadow: 16px 22px 11px rgb(82, 35, 35);
      }

      .overlay h2 {
        color: rgb(212, 66, 66);
        font-size: 40px;
        margin-left: 31%;
        text-shadow: 16px 22px 11px rgb(82, 35, 35);
      }

      .overlay hr {
        width: 70%;
        color: black;
        border: none;
        border-top: 2px solid black;
        margin-left: 15%;
      }

      .overlay .upper {
        width: 30%;
        border: none;
        border-top: 1px dotted rgb(0, 0, 0);
        margin-left: 35%;
      }

      .overlay a {
        text-decoration: none;
        color: rgb(0, 0, 0);
      }

      .question {
        text-align: center;
      }

      .questionhead h3 {
        color: rgb(212, 100, 100);
        font-size: 35px;
      }

      .questionhead p {
        font-size: 20px;
        margin-left: 30%;
        margin-right: 30%;
      }

      .quebutton {
        padding-top: 10px;
      }

      .quebutton button {
        text-align: center;
        width: 15%;
        height: 50px;
        border-radius: 25px;
        border-color: transparent;
        color: white;
        font-weight: bold;
        background-color: rgb(212, 100, 100);
        cursor: pointer;
      }

      .quebutton a {
        text-decoration: none;
        color: white;
        font-size: 20px;
      }

      .quebutton button:hover {
        background-color: rgb(228, 69, 69);
        transition: background-color 1s;
      }

      .steps {
        margin-top: 10%;
        text-align: center;
      }

      .col-lg-6 {
        padding: 3%;
        margin-bottom: 1%;
      }

      .number h1 {
        font-size: 120px;
        float: left;
        color: rgb(212, 100, 100);
      }

      .stepinfo blockquote {
        font-size: 20px;
        padding-left: 40%;
        padding-top: 5%;
        color: rgb(66, 64, 64);
      }

      .stepbutton button {
        text-align: center;
        width: 20%;
        height: 50px;
        border-radius: 25px;
        border-color: transparent;
        color: white;
        font-weight: bold;
        background-color: rgb(212, 100, 100);
        cursor: pointer;
        margin-top: 2%;
      }

      .stepbutton a {
        text-decoration: none;
        color: white;
        font-size: 20px;
      }

      .stepbutton button:hover {
        background-color: rgb(228, 69, 69);
        transition: background-color 1s;
      }

      .shad {
        height: 100%;
        width: 100%;
        padding: 20px;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
      }

      .bottomsection {
        margin-top: 10%;
      }

      .marquee {
      overflow: hidden;
      white-space: nowrap;
      width: 100%;
    }

    .marquee a {
      margin-right: 20px;
      display: inline-block;
    }

    .marquee img {
      width: 500px;
      height: 100%;
      border-radius: 10px;
    }

    /* Optional: Add animation to the marquee */
    @keyframes marqueeAnimation {
      0% {
        transform: translateX(100%);
      }

      100% {
        transform: translateX(-100%);
      }
    }

    .marquee a img {
      animation: marqueeAnimation 30s linear infinite;
    }
      .bottomsection h1 {
        margin-left: 30%;
        font-size: 60px;
      }

      .bottomsection p {
        margin-left: 29%;
      }

      .middhead {
        text-align: center;
        margin: 5%;
      }

      .middhead h1 {
        font-size: 60px;
      }

      .middhead h6 {
        font-size: 25px;
      }

      /* .recwork img:hover {
        transform: scale(1.1); 
        transition: transform 0.3s ease; 
      } */

      *,
      *:before,
      *:after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      .container {
        width: auto;
        margin: 1rem auto;
      }

      .bg {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
      }

      .bg img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        transition: transform 3s, filter 0.3s;
      }

      .bg .overlay {
        position: absolute;
        padding-right: 20%;
        bottom: 0;
        right: 0%; /* Add right: 0; to cover entire width */
        width: 100%;
        height: 100%; /* Set height to 100% */
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        opacity: 0;
        padding-top: 20%;
        align-items: center;
        justify-content: center;
        transition: opacity 0.3s;
      }

      .recwork .overlay h2 {
        font-size: 60px;
        font-family: 'CustomFont',sans-serif;
      }

      .bg:hover img {
        transform: scale(1.2);
        filter: blur(2px);
      }

      .bg:hover .overlay {
        opacity: 1;
      }

      .features {
        height: 800px;
        width: 100%;
        background-color: rgb(230, 217, 105);
        margin-top: 10%;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .feature {
        padding-top: 1.5%;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .fhead img {
        margin-bottom: 2%;
        height: 35px;
      }

      .fhead {
        padding-top: 8%;
      }

      .fhead span {
        font-size: 24px;
        padding-left: 8px;
        padding-top: 20px;
        font-weight: bold;
      }

      .feat {
        margin: 8%;
        background-color: white;
        height: 240px;
        width: 420px;
        padding: 4%;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .finfo blockquote {
        text-align: justify;
        padding-left: 15%;
        padding-right: 5%;
        margin-top: 2%;
        margin-bottom: 10%;
      }
      /* .feat {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
      }

      .feat:hover {
        animation-name: example;
        animation-duration: 0.25s;
        border: 8px solid rgb(0, 0, 0);
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
      } */

      .feature-box-1 {
        padding: 32px;
        box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
        margin: 15px 0;
        position: relative;
        z-index: 1;
        border-radius: 10px;
        overflow: hidden;
        -moz-transition: ease all 0.35s;
        -o-transition: ease all 0.35s;
        -webkit-transition: ease all 0.35s;
        transition: ease all 0.35s;
        top: 0;
      }
      .feature-box-1 * {
        -moz-transition: ease all 0.35s;
        -o-transition: ease all 0.35s;
        -webkit-transition: ease all 0.35s;
        transition: ease all 0.35s;
      }

      .feature-box-1 img {
        line-height: 70px;
        color: #ffffff;
      }
      .feature-box-1 span {
        color: #20247b;
        font-weight: 600;
      }
      .feature-box-1 blockquote {
        margin: 0;
      }
      .feature-box-1:after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: auto;
        right: 0;
        border-radius: 10px;
        width: 0;
        background: #20247b;
        z-index: -1;
        -moz-transition: ease all 0.35s;
        -o-transition: ease all 0.35s;
        -webkit-transition: ease all 0.35s;
        transition: ease all 0.35s;
      }
      .feature-box-1:hover {
        top: -5px;
      }

      .feature-box-1:hover img {
        filter: invert(100%);
      }
      .feature-box-1:hover span {
        color: #ffffff;
      }
      .feature-box-1:hover blockquote {
        color: rgba(255, 255, 255, 0.8);
      }
      .feature-box-1:hover:after {
        width: 100%;
        height: 100%;
        border-radius: 10px;
        left: 0;
        right: auto;
      }
    </style>
  </head>
  <body>
    <div class="picture">
      <div style="box-shadow: inset 0px 10px 10px -10px rgba(0, 0, 0, 0.5)">
        <a href="#">
          <img src="image/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvcm0yNTAtYWUtMDcuanBn.webp" alt="" />
        </a>
      </div>
      <div class="overlay">
        <h1>AMBIANCE</h1>
        <h2>CHOOSE YOUR DESIGN WITH US.</h2>

        <div class="overlinks">
          <!-- <a href="">WARDROBE INTERIOR PRICE CALCULATOR</a> -->
        </div>
      </div>
    </div>
    <br />
    <br />
    <div class="question">
      <div class="questionhead">
        <h3>WHICH IS YOUR PLACE?</h3>
        <p>The full interior design choosing helps you get an estimate for your full home interiors. All you have to do is answer a few simple steps and, voila!</p>
        <div class="quebutton">
          <button><a href="designhomeorflat.php">GET STARTED</a></button>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="steps">
        <div class="stephead">
          <h3>GET YOUR INTERIOR DESIGN IN 2 SIMPLE STEPS</h3>
          <h5>IT'S THAT SIMPLE...</h5>
        </div>
        <div class="step">
          <div class="row">
            <div class="col-lg-6">
              <div class="shad">
                <div class="number">
                  <h1>01</h1>
                </div>
                <div class="stepinfo">
                  <blockquote>THE TYPE OF PLACE HELPS US TO UNDERSTAND THE CONFIGURATION OF YOUR PLACE.</blockquote>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="shad">
                <div class="number">
                  <h1>02</h1>
                </div>
                <div class="stepinfo">
                  <blockquote>
                    GET YOUR PLACE DESIGNED BY JUST CONTACTING ABOUT THAT TO US. <br />
                    OR BY <a href="#">CLICKING HERE</a>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
          <div class="stepbutton">
            <button><a href="designhomeorflat.php">GET STARTED</a></button>
          </div>
        </div>
      </div>
    </div>
    <div class="middhead">
      <h1>OUR WORK WILL MAKE YOU HAPPY</h1>
      <h6>WHICH ARE EXTRMELY LOVED BY OUR CUSTOMER</h6>
    </div>
    <div class="recwork">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="bg">
              <img class="one" src="image/g1.jpg" alt="" />
              <div class="overlay">
                <h2>AMBIANCE</h2>
                <!-- <p style="margin-left: 30%;">Overlay content for Image 1</p> -->
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bg">
              <img src="image/g2.jpg" alt="" />
              <div class="overlay">
                <!-- <h2 style="margin-top: 20%;">Image 2</h2>
                <p style="margin-left: 30%;">Overlay content for Image 2</p> -->
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 2%">
          <div class="col-lg-4">
            <div class="bg">
              <img src="image/g3.jpg" alt="" />
              <div class="overlay">
                <!-- <h2 style="margin-top: 20%;">Image 3</h2>
                <p style="margin-left: 30%;">Overlay content for Image 3</p> -->
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="bg">
              <img src="image/g4.jpg" alt="" />
              <div class="overlay">
                <h2>TRUST THE PROCESS</h2>
                <!-- <p style="margin-left: 30%;">Overlay content for Image 4</p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="features">
      <div class="feature">
        <div class="row">
          <div class="col-lg-4 text-center">
            <div class="feat feature-box-1">
              <div class="fhead">
                <img src="image/user.png" alt="" />
                <span> EXPERT DESIGNERS </span>
              </div>
              <div class="finfo">
                <blockquote>with a fusion of creativity and skill, craft visually captivating spaces that blend aesthetics.</blockquote>
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center">
            <div class="feat feature-box-1">
              <div class="fhead">
                <img src="image/customer-service.png" alt="" />
                <span> PROFESSIONAL SERVICE </span>
              </div>
              <div class="finfo">
                <blockquote>Our professional interior design services bring spaces to life, marrying aesthetic elegance with practical functionality.</blockquote>
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center">
            <div class="feat feature-box-1">
              <div class="fhead">
                <img src="image/old-typical-phone.png" alt="" />
                <span> GREAT SUPPORTS </span>
              </div>
              <div class="finfo">
                <blockquote>our dedicated team ensures collaboration, understanding your needs,bringing your vision to life care.</blockquote>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 text-center">
            <div class="feat feature-box-1">
              <div class="fhead">
                <img src="image/creative-thinking.png" alt="" />
                <span> DESIGNING SKILLS </span>
              </div>
              <div class="finfo">
                <blockquote>Exceptional designing skills elevate spaces, as our interior design expertise seamlessly combines creativity and functionality.</blockquote>
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center">
            <div class="feat feature-box-1">
              <div class="fhead">
                <img src="image/diamond.png" alt="" />
                <span>GREAT RECOMMENDATION</span>
              </div>
              <div class="finfo">
                <blockquote>Our recommendations are tailored to elevate your space, offering personalized solutions that balances style.</blockquote>
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center">
            <div class="feat feature-box-1">
              <div class="fhead">
                <img src="image/feedback.png" alt="" />
                <span> POSITIVE REVIEWS </span>
              </div>
              <div class="finfo">
                <blockquote>Positive reviews reflect our commitment to excellence in interior design, showcasing client satisfaction.</blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bottomsection">
      <div class="bottomhead">
        <h1>SOME OF OUR BEST DESIGNS.</h1>
      </div>
      <div>
        <p>Here are some of our best design which are choosen more frequently by our visitors and are quiet elegant and excellent.</p>
      </div>
      <div class="bottom-scroller marquee">
        <marquee behavior="" direction="right">
          <a href="gallery.php"><img src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/e1878890-6d46-4bc3-9ced-95bb67f8ec8f/royal+green+living+room-min.jpg?format=750w" alt="" /></a>
          <a href="gallery.php"><img src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/bf036b7d-dd3b-45b3-a095-36e78ce55cf3/Swiss+Interior+315A+Punggol+Way-7379.jpg?format=750w" alt="" /></a>
          <a href="gallery.php"><img src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625637706535-EUD1ZWAVJU9R1305C8HV/Blk+313C+Sumang+Link+5Room+HDB+Resale+%2815%29.jpg?format=750w" alt="" /></a>
          <a href="gallery.php"><img src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625654641385-OD443W0DV2CPHHPSA29D/3+Bedder+Artra+Living+Room+%287%29.jpg?format=750w" alt="" /></a>
          <a href="gallery.php"><img src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625636985534-HDOCJWRY0RFCO4UFVOMU/SwissInterior_CompassvaleLink+%284%29.jpg?format=750w" alt="" /></a>
          <a href="gallery.php"><img src="https://media.designcafe.com/wp-content/uploads/2021/04/06180844/elegant-1bhk-home-design-with-neutral-tones.jpg" alt="" /></a>
          <a href="gallery.php"><img src="https://media.designcafe.com/wp-content/uploads/2021/06/30135419/modern-1bhk-home-living-room-designed-with-comfortable-couch-and-tv-unit.jpg" alt="" /></a>
          <a href="gallery.php"><img src="https://media.designcafe.com/wp-content/uploads/2020/09/26182253/u-shaped-kitchen-for-cozy-3bhk-house-design.jpg" alt="" /></a>
          <a href="gallery.php"><img src="https://media.designcafe.com/wp-content/uploads/2020/09/26174752/modular-kitchen-3-bhk-interior-design.jpeg" alt="" /></a>
          <a href="gallery.php"><img src="https://media.designcafe.com/wp-content/uploads/2020/09/26151018/3-bhk-villa-interior-design-of-l-shaped-kitchen.jpg" alt="" /></a>
        </marquee>
      </div>
    </div>

      <?php
        include('footer.php');
      ?>
    

  </body>
</html>
