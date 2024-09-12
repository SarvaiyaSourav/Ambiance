<?php
  
  include('HEAD.php');
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Interior Design Portfolio</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="aboutus.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    @font-face {
      font-family: "CustomFont";
      src: url("font/Prata-Regular.ttf") format("woff");
    }
    @font-face {
      font-family: "CustomFont1";
      src: url("font/PlayfairDisplay-VariableFont_wght.ttf") format("woff");
    }

    body {
      background-color: #f5f5f5;
    }

    /* a {
    color: rgb(13 110 253 / 0%);
    text-decoration: underline;
} */
    .header {
      position: relative;
      text-align: center;
    }

    .header img {
      width: 100%;
    }

    .header h1 {
      position: absolute;
      top: 48%;
      left: 50.5%;
      transform: translate(-50%, -50%);
      z-index: 1;
      color: #fff;
      text-shadow: 20px 20px 20px rgb(0, 0, 0);
      /* text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); */
    }

    .header h3 {
      position: absolute;
      top: 62%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 1;
      color: #fff;
      text-shadow: 20px 20px 20px rgb(0, 0, 0);
    }

    .header h1 {
      margin-left: 45px;
      font-size: 90px;
    }

    .header h3 {
      font-size: 50px;
    }

    .project1 {
      margin-top: 2%;
      margin-right: 20%;

    }

    .project1 h1 {
      font-size: 55px;
      text-align: center;
      font-family: 'CustomFont', sans-serif;
    }

    .project1 hr {
      width: 50%;
      margin-left: 25%;
      border: 2px solid black;
    }

    .project1 p {
      text-align: justify;
      font-weight: 600;
      font-size: 20px;
      font-family: 'CustomFont1', sans-serif;
    }

    .project1 button {
      padding: 15px 30px 15px;
      border-radius: 10px;
      color: black;
      /* background-color: rgb(77, 77, 77); */
      font-weight: bold;
      font-size: 18px;
      border: transparent;
      transition: all 0.4s ease;
    }

    .project1 button:hover {
      background-color: rgb(46, 46, 46);
      color: white;
    }

    .project1 .row:hover {
      box-shadow: rgba(0, 0, 0, 0.3) 38px 38px 38px, rgba(0, 0, 0, 0.22) 22px 22px 22px;
    }

    .project1 .row {
      box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
      transition: all 0.5s ease;
    }

    .project2 .row:hover {
      box-shadow: rgba(0, 0, 0, 0.3) 38px 38px 38px, rgba(0, 0, 0, 0.22) 22px 22px 22px;
    }

    .project2 .row {
      box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
      transition: all 0.5s ease;
    }



    .project2 {
      margin-top: 7%;
      margin-left: 20%;
      margin-bottom: 5%;
    }

    .project2 h1 {
      text-align: center;
      font-size: 55px;
      font-family: 'CustomFont', sans-serif;
    }

    .project2 hr {
      width: 50%;
      margin-left: 25%;
      border: 2px solid black;
    }

    .project2 p {
      text-align: justify;
      font-weight: 600;
      font-size: 20px;
      font-family: 'CustomFont1', sans-serif;
    }

    .project2 button {
      padding: 15px 30px 15px;
      border-radius: 10px;
      color: black;
      /* background-color: rgb(77, 77, 77); */
      font-weight: bold;
      font-size: 18px;
      border: transparent;
      transition: all 0.4s ease;
    }

    .project2 button:hover {
      background-color: rgb(46, 46, 46);
      color: white;
    }

    .botmsec {
      position: relative;
      margin-top: 20%;
    }

    .overlay {
      position: absolute;
      top: 48%;
      left: 60%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: #fff;
      z-index: 1;
      color: rgb(255, 196, 0);
      text-shadow: 20px 20px 20px rgb(0, 0, 0);
    }

    .overlay h1 {
      font-size: 140px;
      margin-bottom: 10px;
    }

    .overlay h5 {
      margin-left: 30%;
      font-size: 30px;
    }

    .overlay a {
      text-decoration: none;
      color: rgb(255, 196, 0);
    }



    label {
      display: block;
      margin-bottom: 8px;
      font-size: 25px;
      margin-left: 10%;
      font-family: times, "Times New Roman";
      font-weight: 700;
      transition: all 0.1s ease;
    }

    input {
      width: 50%;
      padding: 15px;
      margin-bottom: 15px;
      border: 1px solid black;
      margin-left: 10%;
      transition: all 0.5s ease;
    }

    textarea {
      width: 60%;
      padding: 15px;
      margin-left: 10%;
      box-sizing: border-box;
      margin-bottom: 15px;
      border: 1px solid black;
      transition: all 0.5s ease;
    }



    input:hover {
      border: 1px solid #555;
      border-radius: 15px;

    }

    input:focus {
      border-radius: 10px;
    }



    textarea:hover {
      border: 1px solid #555;
      border-radius: 15px;

    }

    textarea:focus {
      border-radius: 10px;
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

    .comments {
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      width: 60%;
      margin-left: 20%;
      background-color: white;
    }

    .comment-list {
      margin-top: 20px;
      margin-left: 25%;
      margin-bottom: 10px;
      max-width: 50%;
      max-height: 200px;
      overflow-y: scroll;
      background-color: #f9f9f9;
      border-radius: 5px;
      box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.1);
    }

    .comment {
      background-color: #f9f9f9;
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 10px;
      box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
    }

    .comment p {
      margin-bottom: 5px;
    }

    .comment p.name {
      font-weight: bold;
    }

    .comment p.email {
      font-weight: bold;
    }

    .comment p.comment-content {
      font-style: italic;
    }

    .comheader h1{
      font-size: 50px;
      font-family: 'Times New Roman', Times, serif;
    }

    .comm{
      background-color: #e6e6e6;
      padding-top: 2%;
      padding-bottom: 1%;
    }
  </style>
</head>

<body>
  <div class="header">
    <img src="https://assets.isu.pub/document-structure/221023033113-fd17f1fa9a9b36905c8750d2c1bb0f78/v1/ab4e64b97af080ed1a67ba30d6448667.jpeg" alt="" />
    <h1>DESIGN PORTFOLIO</h1>
    <a href="#goto">
      <h3>TRUST THE PROCESS</h3>
    </a>

    <!-- <div class="headera"> 
            <a href="#">HOME</a>
            <span>&nbsp;||&nbsp;</span>  
            <a href="#">ABOUT US</a>
          </div> -->
  </div>

  <div class="project1" id="goto1">
    <div class="container">
      <div class="row" style="padding: 10px; ">
        <div class="col-lg-4">
          <img src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/da4f80f3-8b78-4354-a175-8eb45b5229a3/Swiss+Blk+356b+Ubi+Ave+3+-+Kerbe-0242-min.jpg?format=1000w" style="border-radius: 15px" width="100%" alt="" />
        </div>
        <div class="col-lg-8">
          <h1>3-Room SpaceSavvy</h1>
          <hr />
          <p>Getting a 3-room HDB flat is a popular choice, especially for new homeowners due to its price value and availability. Every homeowner’s dream is to have a big spacious home to come back to and live in. However, it is no secret that space is...</p>

          <a href="readmore1.php">
            <button>READ MORE</button>
          </a>



        </div>
      </div>
    </div>
  </div>

  <div class="project2" id="got2">
    <div class="container">
      <div class="row" style="padding: 10px;">
        <div class="col-lg-8 oder-lg-1 oder-last">
          <h1>Chic Rustic Contrast</h1>
          <hr />
          <p>Contrasting wooden textures with dark grey tones give off a rustic feel that is vamped up with a modern edge as extensive use of wooden textures and different hues from the grey palette dominates most of this moody yet cozy abode. Classical and industrial elements come together to create this clean and sophisticated open kitchen space. The kitchen backsplash provides a visual avenue for homeowners to get creative and try ...</p>


          <a href="readmore2.php">
            <button>READ MORE</button>
          </a>
        </div>

        <div class="col-lg-4 oder-lg-2 oder-first">
          <img src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/91bb6039-0508-4447-954c-f7e653501dcc/157+Yung+Loh+Rd+living+room1-min.jpg?format=1000w" style="border-radius: 15px" width="100%" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="project1" id="goto3">
    <div class="container">
      <div class="row" style="padding: 10px">
        <div class="col-lg-4">
          <img src="https://www.homelane.com/blog/wp-content/uploads/2024/02/FILM-5.00_02_46_17.Still024-768x432.jpg" style="border-radius: 15px" width="100%" alt="" />
        </div>
        <div class="col-lg-8">
          <h1>Compact Comfort</h1>
          <hr />
          <p>Catering to the needs of a multigenerational Gujarati family, in Ahmedabad is as warm and inviting as the family themselves! The design narrative takes into account the functional requirements of every member of the household, with clearly demarcated spatial configurations...</p>
          <a href="readmore3.php">
            <button>READ MORE</button>
          </a>
          &nbsp;

        </div>
      </div>
    </div>
  </div>

  <div class="project2" id="goto4">
    <div class="container">
      <div class="row" style="padding: 10px;">
        <div class="col-lg-8 oder-lg-1 oder-last">
          <h1>Ambiance Appeal</h1>
          <hr />
          <p>A beautiful foyer unit with textured wallpaper and a side cabinet with drawers for storage. A simple yet elegant living room with a cosy sofa and an accent wall in orange peps up the space. A TV unit designed with low lying cabinet finished in wood and white laminate has open shelves on one side to ...</p>


          <a href="readmore4.php">
            <button>READ MORE</button>
          </a>
        </div>

        <div class="col-lg-4 oder-lg-2 oder-first">
          <img src="image/tenents1.png" style="border-radius: 15px" width="100%" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="project1" id="goto5">
    <div class="container">
      <div class="row" style="padding: 10px">
        <div class="col-lg-4">
          <img src="https://media.designcafe.com/wp-content/uploads/2020/09/26182253/u-shaped-kitchen-for-cozy-3bhk-house-design.jpg" style="border-radius: 15px" width="100%" alt="" />
        </div>
        <div class="col-lg-8">
          <h1>Playful Fusion Villa</h1>
          <hr />
          <p>Designed with the intent of being playful and warm, this 3BHK home combines two distinct design styles to strike a balance in the middle. Rich wooden textures stand out as the major focal point of the master bedroom as a ...</p>
          <a href="readmore5.php">
            <button>READ MORE</button>
          </a>


        </div>
      </div>
    </div>
  </div>

  <div class="project2" id="goto6">
    <div class="container">
      <div class="row" style="padding: 10px;">
        <div class="col-lg-8 oder-lg-1 oder-last">
          <h1>Neutral Industrial Haven</h1>
          <hr />
          <p>A modern home designed with neutral colour palette and few warm tones to keep it from being too over stimulating. Ample usage of wood, stone and fabric textures for an understated industrial feel....</p>


          <a href="readmore6.php">
            <button>READ MORE</button>
          </a>
        </div>

        <div class="col-lg-4 oder-lg-2 oder-first">
          <img src="https://media.designcafe.com/wp-content/uploads/2020/09/26174752/modular-kitchen-3-bhk-interior-design.jpeg" style="border-radius: 15px" width="100%" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="project1" id="goto7">
    <div class="container">
      <div class="row" style="padding: 10px">
        <div class="col-lg-4">
          <img src="https://cdn.decorilla.com/images/960/re_4672_56e86b7c8ae9c6.75274113/Online-Business-Office-Design-online-interior-designers-2.jpg?cv=1" style="border-radius: 15px" width="100%" alt="" />
        </div>
        <div class="col-lg-8">
          <h1>Dynamic Workspace Hub</h1>
          <hr />
          <p>Welcome to our modern office space designed for optimal productivity. With an open-concept layout, abundant natural light, and smart technology integration, our workspace promotes collaboration and innovation. Comfortable breakout areas, wellness features, and a commitment to sustainability ensure a balanced and inspiring work environment. Our office ...</p>
          <a href="readmore7.php">
            <button>READ MORE</button>
          </a>


        </div>
      </div>
    </div>
  </div>

  <div class="project2" id="goto8">
    <div class="container">
      <div class="row" style="padding: 10px;">
        <div class="col-lg-8 oder-lg-1 oder-last">
          <h1>Elegant Cozy Chic</h1>
          <hr />
          <p>A beautiful foyer unit with textured wallpaper and a side cabinet with drawers for storage. A simple yet elegant living room with a cosy sofa and an accent wall in orange peps up the space. A TV unit designed with low lying cabinet finished in wood and white laminate has open shelves on one side ...</p>


          <a href="readmore8.php">
            <button>READ MORE</button>
          </a>
        </div>

        <div class="col-lg-4 oder-lg-2 oder-first">
          <img src="https://media.designcafe.com/wp-content/uploads/2020/09/26151018/3-bhk-villa-interior-design-of-l-shaped-kitchen.jpg" style="border-radius: 15px" width="100%" alt="" />
        </div>
      </div>
    </div>
  </div>




  <div>
    <div class="botmsec" id="goto">

      <div class="overlay">

        <h1><a href="homepage.php">AMBIANCE</a></h1>

        <h5>TRUST THE PROCESS</h5>
        <div class="link">
        </div>
      </div>
      <img style="margin-left: 15%;" src="image/depositphotos_285870522-stock-photo-empty-interior-background-room-zen (1).jpg" alt="" height="60%" width="70%" />
    </div>

  </div>






<?php
        include('footer.php');
      ?>






</body>

</html>