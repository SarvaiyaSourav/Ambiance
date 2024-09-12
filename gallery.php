<?php
  include('Head.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>gallery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="aboutus.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

  <style>
    @font-face {
      font-family: "CustomFont";
      src: url("font/DancingScript-VariableFont_wght.ttf") format("woff");
    }

    /* .head{
      margin-top: 20%;
    } */

    .head img {
      padding-left: 10%;
      padding-right: 5%;
      height: 850px;
      width: 100%;
    }

    .overlay {
      margin-left: 2%;
      top: 14%;
      position: absolute;
      background-color: rgba(153, 204, 255, 0.788);
      height: 180px;
      width: 1200px;
    }

    .overlay h1 {
      padding-left: 8%;
      text-align: center;
      font-size: 150px;
      font-family: "CustomFont", sans-serif;
    }

    .overlay1 {
      margin-left: 2%;
      top: 82%;
      left: 66%;
      position: absolute;
      background-color: rgba(153, 204, 255, 0.788);

      width: 600px;
    }

    .overlay1 h1 {
      text-align: center;
      padding-top: 4%;
      height: 100px;
      font-size: 50px;
      font-family: "CustomFont", sans-serif;
      font-weight: bolder;
    }

    .overlay :hover {
      transition: all 1s ease;
      text-shadow: 3px 4px 7px rgba(81, 67, 21, 0.8);
      box-shadow: rgba(0, 0, 0, 0.16) 0px 9px 18px, rgba(0, 0, 0, 0.23) 0px 9px 18px;
    }

    .overlay1:hover {
      transition: all 1s ease;
      text-shadow: 3px 4px 7px rgba(81, 67, 21, 0.8);
      box-shadow: rgba(0, 0, 0, 0.16) 0px 9px 18px, rgba(0, 0, 0, 0.23) 0px 9px 18px;
    }

    .bgcolor .titlesec {
      margin-top: 10%;
      background-color: rgb(224, 224, 235);
      padding: 20px;
    }

    .title1 h1 {
      background-color: rgb(102, 153, 153);
      padding-top: 4%;
      padding-bottom: 4%;
      color: white;
      width: auto;
      font-family: "Times New Roman", Times, serif;
      margin-right: 10%;
      margin-left: 2%;
      font-size: 70px;
      text-shadow: 3px 4px 7px rgba(81, 67, 21, 0.8);
    }

    .title2 {
      background-color: rgb(102, 153, 153);
      width: 500px;
      padding-top: 1%;
      padding-bottom: 1%;
      margin-left: 72%;
      text-align: left;
      color: white;
    }

    .title2 h6 {
      margin-left: 5%;
      font-family: "Times New Roman", Times, serif;
    }

    .title2 h4 {
      font-family: "Times New Roman", Times, serif;
      font-size: 40px;
      margin-left: 2%;
      text-shadow: 3px 4px 7px rgba(81, 67, 21, 0.8);
    }

    .midhead {
      text-align: center;
      margin-top: 10%;
      margin-right: 30%;
    }

    .midhead h1 {
      font-size: 50px;
      text-shadow: 3px 4px 7px rgba(255, 196, 0, 0.8);
    }

    .kitchen {
      position: relative;
      margin-top: 1%;
      margin-bottom: 1%;
      display: flex;
    }

    .kimage1 img {
      margin-left: 15%;
      height: 700px;
      width: 800px;
      border-radius: 10px;
    }

    /* .kimage1 img:hover {
        transition: all 0.5s ease;
        transform: scale(1.02);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      } */

    .kimage:hover .kimgover h1 {
      color: #ffcc00;
      text-shadow: 24px 32px 28px rgba(81, 67, 21, 0.8);
      transform: rotate(0deg);
    }

    .kimgover {
      position: absolute;
      top: 50%;
      left: 11.5%;
      transform: translate(-50%, -50%);
      height: 700px;
      width: 200px;
      background-color: rgba(0, 0, 0, 0.295);
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
    }

    .kimgover h1 {
      transform: rotate(-90deg);
      color: white;
      margin-top: 200%;
      padding: 10px;
      text-align: center;
      font-size: 100px;
      transition: all 0.8s ease;
    }

    .kimg {
      margin-left: 12%;
    }

    .kimg .col-lg-6 {
      flex: 1;
      height: 50%;
      width: 100%;
    }

    .kimg img {
      border-radius: 10px;
    }

    .kimg img:hover {
      transition: all 0.5s ease;
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .kitchen1 {
      display: flex;
    }

    .kimage2 img {
      margin-left: 15%;
      height: 700px;
      width: 800px;
      border-radius: 10px;
    }

    .kimage2 img:hover {
      transition: all 0.5s ease;
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* bedroom */

    .bedroom {
      position: relative;
      margin-top: 5%;
      margin-bottom: 1%;
      display: flex;
    }

    .bimage1 img {
      margin-left: 15%;
      height: 700px;
      width: 800px;
      border-radius: 10px;
    }

    .bimage:hover .bimgover h1 {
      color: #ffcc00;
      text-shadow: 24px 32px 28px rgba(81, 67, 21, 0.8);
      transform: rotate(0deg);
    }

    .bimgover {
      position: absolute;
      top: 50%;
      left: 11.5%;
      transform: translate(-50%, -50%);
      height: 700px;
      width: 200px;
      background-color: rgba(0, 0, 0, 0.295);
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
    }

    .bimgover h1 {
      transform: rotate(-90deg);
      color: white;
      margin-top: 200%;
      padding: 10px;
      text-align: center;
      font-size: 100px;
      transition: all 0.8s ease;
    }

    .bimg {
      margin-left: 12%;
    }

    .bimg .col-lg-6 {
      flex: 1;
      height: 50%;
      width: 100%;
    }

    .bimg img {
      border-radius: 10px;
    }

    .bimg img:hover {
      transition: all 0.5s ease;
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .bedroom1 {
      display: flex;
    }

    .bimage2 img {
      margin-left: 15%;
      height: 700px;
      width: 800px;
      border-radius: 10px;
    }

    .bimage2 img:hover {
      transition: all 0.5s ease;
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* bathroom */

    .bathroom {
      position: relative;
      margin-top: 5%;
      margin-bottom: 1%;
      display: flex;
    }

    .btimage1 img {
      margin-left: 15%;
      height: 700px;
      width: 800px;
      border-radius: 10px;
    }

    .btimage:hover .btimgover h1 {
      color: #ffcc00;
      text-shadow: 24px 32px 28px rgba(81, 67, 21, 0.8);
      transform: rotate(0deg);
    }

    .btimgover {
      position: absolute;
      top: 50%;
      left: 11.5%;
      transform: translate(-50%, -50%);
      height: 700px;
      width: 200px;
      background-color: rgba(0, 0, 0, 0.295);
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
    }

    .btimgover h1 {
      transform: rotate(-90deg);
      color: white;
      margin-top: 230%;
      padding: 10px;
      text-align: center;
      font-size: 100px;
      transition: all 0.8s ease;
    }

    .btimg {
      margin-left: 12%;
    }

    .btimg .col-lg-6 {
      flex: 1;
      height: 50%;
      width: 100%;
    }

    .btimg img {
      border-radius: 10px;
    }

    .btimg img:hover {
      transition: all 0.5s ease;
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .bathroom1 {
      display: flex;
    }

    .btimage2 img {
      margin-left: 15%;
      height: 700px;
      width: 800px;
      border-radius: 10px;
    }

    .btimage2 img:hover {
      transition: all 0.5s ease;
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* hall */

    .hall {
      position: relative;
      margin-top: 5%;
      margin-bottom: 1%;
      display: flex;
    }

    .himage1 img {
      margin-left: 15%;
      height: 700px;
      width: 800px;
      border-radius: 10px;
    }

    .himage:hover .himgover h1 {
      color: #ffcc00;
      text-shadow: 24px 32px 28px rgba(81, 67, 21, 0.8);
      transform: rotate(0deg);
    }

    .himgover {
      position: absolute;
      top: 50%;
      left: 11.5%;
      transform: translate(-50%, -50%);
      height: 700px;
      width: 200px;
      background-color: rgba(0, 0, 0, 0.295);
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
    }

    .himgover h1 {
      transform: rotate(-90deg);
      color: white;
      margin-top: 250%;
      padding: 10px;
      text-align: center;
      font-size: 100px;
      transition: all 0.8s ease;
    }

    .himg {
      margin-left: 12%;
    }

    .himg .col-lg-6 {
      flex: 1;
      height: 50%;
      width: 100%;
    }

    .himg img {
      border-radius: 10px;
    }

    .himg img:hover {
      transition: all 0.5s ease;
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .hall1 {
      display: flex;
    }

    .himage2 img {
      margin-left: 15%;
      height: 700px;
      width: 800px;
      border-radius: 10px;
    }

    .himage2 img:hover {
      transition: all 0.5s ease;
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* wardrobe */

    .wardrobe {
      position: relative;
      margin-top: 5%;
      margin-bottom: 1%;
      display: flex;
    }

    .wimage1 img {
      margin-left: 15%;
      height: 700px;
      width: 800px;
      border-radius: 10px;
    }

    .wimage:hover .wimgover h1 {
      color: #ffcc00;
      text-shadow: 24px 32px 28px rgba(81, 67, 21, 0.8);
      transform: rotate(0deg);
    }

    .wimgover {
      position: absolute;
      top: 50%;
      left: 11.5%;
      transform: translate(-50%, -50%);
      height: 700px;
      width: 200px;
      background-color: rgba(0, 0, 0, 0.295);
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
    }

    .wimgover h1 {
      transform: rotate(-90deg);
      color: white;
      margin-top: 250%;
      padding: 10px;
      text-align: center;
      font-size: 100px;
      transition: all .8s ease;
    }

    .wimg {
      margin-left: 12%;
    }

    .wimg .col-lg-6 {
      flex: 1;
      height: 50%;
      width: 100%;
    }

    .wimg img {
      border-radius: 10px;
    }

    .wimg img:hover {
      transition: all 0.5s ease;
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .wardrobe1 {
      display: flex;
    }

    .wimage2 img {
      margin-left: 15%;
      height: 700px;
      width: 800px;
      border-radius: 10px;
    }

    .wimage2 img:hover {
      transition: all 0.5s ease;
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .bottomsection {
      text-align: center;
      margin-top: 20%;
      color: white;
    }

    .bottomimg img {
      border-radius: 5px;
      height: 500px;
      width: 1400px;
      background-size: cover;
    }

    .bottomoverlay {
      position: absolute;
      top: 9640px;
      left: 13.3%;
      width: 1400px;
      height: 500px;
      background-color: rgba(0, 0, 0, 0.767);
      /* Adjust the opacity (last value) as needed */
      border-radius: 5px;
    }

    .bottomtitle {
      margin-top: 10%;
    }

    .bottomtitle h1 {
      margin-bottom: 2%;
    }

    .bottomtitle button {
      color: white;
      background-color: #ffcc00;
      border: 1px solid #ffcc00;
      font-size: 25px;
      padding-top: 10px;
      padding-bottom: 10px;
      width: 350px;
    }

    .bottomtitle button:hover {
      transition: all 1s ease;
      background-color: transparent;
      border: 1px solid #ffcc00;
    }

    .bottomlink h3 {
      margin-top: 1%;
      color: rgba(255, 255, 255, 0.466);
    }

    .bottomlink h2 {
      font-size: 15px;
    }

    .bottomlink ul {
      margin-top: 2%;
      display: flex;
      position: absolute;
      left: 49%;
      transform: translate(-50%, -50%);
    }

    .link li {
      list-style: none;
      margin: 0 15px;
    }

    .link a {
      display: block;
      text-align: center;
      font-size: 30px;
      color: #666;
      transition: 0.5s;
    }

    .link a::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      transition: 0.5s;
      transform: scale(0.9);
      z-index: -1;
    }

    .link a:hover::before {
      transform: scale(1.1);
    }

    .link a:hover {
      color: #ffee10;
      text-shadow: 0 0 5px #ffee10;
      transform: scale(1.5);
    }

    #lightbox {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.8);
      align-items: center;
      justify-content: center;
    }

    #lightbox img {
      max-width: 80%;
      max-height: 80%;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.8);
    }
  </style>
</head>

<body>



  <div class="head">
    <img src="image/retro-living-room-interior-design_53876-145503 (1).png" alt="" />
    <div class="overlay">
      <h1>GALLERY</h1>
    </div>
    <div class="overlay1">
      <h1>AMBIANCE <sup style="color: white">&copy;</sup></h1>
    </div>
  </div>



  <div class="bgcolor">
    <div class="titlesec text-center">
      <div class="title1">
        <h1>OUR DESIGNS TO MAKE YOUR DREAM SPACE</h1>
      </div>
      <div class="title2">
        <!-- <h6>PROJECT</h6> -->
        <h4>GALLERY</h4>
      </div>
    </div>
  </div>

  <div class="midhead">
    <h1>HERE ARE SOME DESIGNS FOR YOUR DREAM SPACE'S...</h1>
  </div>

  <div class="kit">
    <div class="kitchen">
      <div class="kimage">
        <div class="kimage1">
          <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/da4f80f3-8b78-4354-a175-8eb45b5229a3/Swiss+Blk+356b+Ubi+Ave+3+-+Kerbe-0242-min.jpg?format=1000w" alt="" />
        </div>
        <div class="kimgover">
          <h1>KITCHEN</h1>
        </div>
      </div>
      <div class="kimg" style="margin-left: 12%">
        <div class="container" style=" height: 700px; width: 700px; overflow: hidden; padding-top: 2%; padding-bottom: 2%">
          <div class="row" style="display: inline; margin: 0">
            <div class="col-lg-6">
              <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/91bb6039-0508-4447-954c-f7e653501dcc/157+Yung+Loh+Rd+living+room1-min.jpg?format=1000w" alt="" style="height: 100%; width: 100%" />
            </div>
            <div class="col-lg-6" style="margin-top: 2%; padding-bottom: 2%">
              <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/b5f23c5d-76c7-4ce8-8024-186f6dcd41e1/413C+Northshore+Drive%2C+4+Room+BTO+Flat+Kitchen+1.jpg?format=750w" alt="" style="height: 100%; width: 100%" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="kitchen1">
      <div class="kimg" style="margin-left: 12%">
        <div class="container" style=" height: 700px; width: 700px; overflow: hidden; padding-top: 2%; padding-bottom: 2%">
          <div class="row" style="display: inline; margin: 0">
            <div class="col-lg-6">
              <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625642501992-0XXZA4SQXHKMU6ZCM9VW/607A+Edgefield+Plains+4Room+Resale+Flat+-+Kitchen.jpg?format=1000w" alt="" style="height: 100%; width: 100%" />
            </div>
            <div class="col-lg-6" style="margin-top: 2%; padding-bottom: 2%">
              <img onclick="openLightbox(event)" src="https://www.decorpot.com/images/mobile-kitchen.jpg" alt="" style="height: 100%; width: 100%" />
            </div>
          </div>
        </div>
      </div>

      <div class="kimage">
        <div class="kimage2">
          <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/80dda8ed-a1c7-4745-9930-216c33ed944b/Grandeur+Park%2C+2+Bedder+Condominium+Bar+1.jpg?format=1000w" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="bed">
    <div class="bedroom">
      <div class="bimage">
        <div class="bimage1">
          <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/337d3741-8d16-406e-a9a2-d4968fc5db4d/Swiss+Blk+356b+Ubi+Ave+3+-+Kerbe-0146-min.jpg?format=1000w" alt="" />
        </div>
        <div class="bimgover">
          <h1>BEDROOM</h1>
        </div>
      </div>
      <div class="bimg" style="margin-left: 12%">
        <div class="container" style=" height: 700px; width: 700px; overflow: hidden; padding-top: 2%; padding-bottom: 2%">
          <div class="row" style="display: inline; margin: 0">
            <div class="col-lg-6">
              <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/4b802a72-d939-4f8d-8788-6c22b61b84bd/157+Yung+Loh+Rd+bedroom-min.jpg?format=1000w" alt="" style="height: 100%; width: 100%" />
            </div>
            <div class="col-lg-6" style="margin-top: 2%; padding-bottom: 2%">
              <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/4d70d510-a157-40f1-9828-06b084ccdb03/413C+Northshore+Drive%2C+4+Room+BTO+Bedroom+3.jpg?format=750w" alt="" style="height: 100%; width: 100%" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bedroom1">
      <div class="bimg" style="margin-left: 12%">
        <div class="container" style=" height: 700px; width: 700px; overflow: hidden; padding-top: 2%; padding-bottom: 2%">
          <div class="row" style="display: inline; margin: 0">
            <div class="col-lg-6">
              <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2023/09/20122959/simple-bedroom-interior-designs.jpg" alt="" style="height: 100%; width: 100%" />
            </div>
            <div class="col-lg-6" style="margin-top: 2%; padding-bottom: 2%">
              <img onclick="openLightbox(event)" src="https://www.home-designing.com/wp-content/uploads/2018/08/modern-bedroom-ceiling-lights.jpg" alt="" style="height: 100%; width: 100%" />
            </div>
          </div>
        </div>
      </div>

      <div class="bimage">
        <div class="bimage2">
          <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/87c41fe3-dedd-4f91-ae3c-d52dec5a94ce/Grandeur+Park%2C+2+Bedder+Condominium+Bedroom+3.jpg?format=1000w" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="bath">
    <div class="bathroom">
      <div class="btimage">
        <div class="btimage1">
          <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/9a27f6c0-2c76-4e9c-b5e8-bf4ceab038c0/413C+Northshore+Drive%2C+4Room+HDB+BTO+Toilet+5.jpg?format=750w" alt="" />
        </div>
        <div class="btimgover">
          <h1>BATHROOM</h1>
        </div>
      </div>
      <div class="btimg" style="margin-left: 12%">
        <div class="container" style=" height: 700px; width: 700px; overflow: hidden; padding-top: 2%; padding-bottom: 2%">
          <div class="row" style="display: inline; margin: 0">
            <div class="col-lg-6">
              <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/03/06121543/dual-toned-bathroom-designed-in-1bhk-house-interior-design.jpg" alt="" style="height: 100%; width: 100%" />
            </div>
            <div class="col-lg-6" style="margin-top: 2%; padding-bottom: 2%">
              <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/04/06183450/bathroom-design-with-vanity-unit-for-1bhk-house-design-in-bengaluru.jpg" alt="" style="height: 100%; width: 100%" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bathroom1">
      <div class="btimg" style="margin-left: 12%">
        <div class="container" style=" height: 700px; width: 700px; overflow: hidden; padding-top: 2%; padding-bottom: 2%">
          <div class="row" style="display: inline; margin: 0">
            <div class="col-lg-6">
              <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/03/06173331/bathroom-designed-by-best-1bhk-apartment-interior-designers.jpg" alt="" style="height: 100%; width: 100%" />
            </div>
            <div class="col-lg-6" style="margin-top: 2%; padding-bottom: 2%">
              <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26182125/minimalistic-style-bathroom-design-for-3-bhk-design.jpg" alt="" style="height: 100%; width: 100%" />
            </div>
          </div>
        </div>
      </div>

      <div class="btimage">
        <div class="btimage2">
          <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26174742/modern-bathroom-3-bhk-flat-interior-design-in-india.jpeg" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="hal">
    <div class="hall">
      <div class="himage">
        <div class="himage1">
          <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/04/06183502/living-room-design-with-yellow-sofa-in-1bhk-house-design.jpg" alt="" />
        </div>
        <div class="himgover">
          <h1>LIVINGROOM</h1>
        </div>
      </div>
      <div class="himg" style="margin-left: 12%">
        <div class="container" style=" height: 700px; width: 700px; overflow: hidden; padding-top: 2%; padding-bottom: 2%">
          <div class="row" style="display: inline; margin: 0">
            <div class="col-lg-6">
              <img onclick="openLightbox(event)" src="https://www.homelane.com/blog/wp-content/uploads/2024/01/DSC00402-768x513.jpg" alt="" style="height: 100%; width: 100%" />
            </div>
            <div class="col-lg-6" style="margin-top: 2%; padding-bottom: 2%">
              <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/d6e366ef-6001-4e91-a34d-0bb5d33a8be2/413C+Northshore+Drive%2C+4+Room+HDB+Living+Room+2.jpg?format=750w" alt="" style="height: 100%; width: 100%" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="hall1">
      <div class="himg" style="margin-left: 12%">
        <div class="container" style=" height: 700px; width: 700px; overflow: hidden; padding-top: 2%; padding-bottom: 2%">
          <div class="row" style="display: inline; margin: 0">
            <div class="col-lg-6">
              <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/539ba1f2-1502-4871-b864-e5a3e671c90c/157+Yung+Loh+Rd+living+room3-min.jpg?format=1000w" alt="" style="height: 100%; width: 100%" />
            </div>
            <div class="col-lg-6" style="margin-top: 2%; padding-bottom: 2%">
              <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625643360993-AOOX3SJSCYM4ZIP9HB8P/607A+Edgefield+Plains+4Room+Resale+Flat+Living+Room+%283%29.jpg?format=1000w" alt="" style="height: 100%; width: 100%" />
            </div>
          </div>
        </div>
      </div>

      <div class="himage">
        <div class="himage2">
          <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26174659/living-room-design-in-simple-3-bhk-villa-interior-design.jpeg" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="ward">
    <div class="wardrobe">
      <div class="wimage">
        <div class="wimage1">
          <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/b0818196-18a8-424e-90ce-aa15b20fbf24/Grandeur+Park%2C+2+Bedder+Condominium+Study+3.jpg?format=1000w" alt="" />
        </div>
        <div class="wimgover">
          <h1>WARDROBE</h1>
        </div>
      </div>
      <div class="wimg" style="margin-left: 12%">
        <div class="container" style=" height: 700px; width: 700px; overflow: hidden; padding-top: 2%; padding-bottom: 2%">
          <div class="row" style="display: inline; margin: 0">
            <div class="col-lg-6">
              <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26174802/scandinavian-style-3-bhk-flat-interior-design-for-wardrobe.jpeg" alt="" style="height: 100%; width: 100%" />
            </div>
            <div class="col-lg-6" style="margin-top: 2%; padding-bottom: 2%">
              <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26153423/kids-bedroom-interior-design-for-3-bhk-flat.jpg" alt="" style="height: 100%; width: 100%" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="wardrobe1">
      <div class="wimg" style="margin-left: 12%">
        <div class="container" style=" height: 700px; width: 700px; overflow: hidden; padding-top: 2%; padding-bottom: 2%">
          <div class="row" style="display: inline; margin: 0">
            <div class="col-lg-6">
              <img onclick="openLightbox(event)" src="https://www.99acres.com/microsite/articles/files/2023/07/Sliding-Wardrobe-Designs-1.jpg" alt="" style="height: 100%; width: 100%" />
            </div>
            <div class="col-lg-6" style="margin-top: 2%; padding-bottom: 2%">
              <img onclick="openLightbox(event)" src="https://i.pinimg.com/originals/fc/06/13/fc061317ec91161989a18db919a7ad5a.jpg" alt="" style="height: 100%; width: 100%" />
            </div>
          </div>
        </div>
      </div>

      <div class="wimage">
        <div class="wimage2">
          <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/04/11162401/floor-to-ceiling-wardrobe-design-with-glass-shutters.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>
  <div id="lightbox" onclick="closeLightbox()">
    <img id="lightbox-image" src="" alt="Enlarged Photo" />
  </div>

  <div class="bottomsection">
    <div class="bottomimg">
      <img src="image/Untitled-cjqWtFyye-transformed.png" alt="" />
    </div>
    <div class="bottomoverlay">
      <div class="bottomtitle">
        <h1>
          LOOKING FOR A
          <br />
          QUALITY AND ADDORABLE INTERIOR DESIGN?
        </h1>
        <a href="contact.php">
          <button>CONTACT NOW</button>
        </a>
      </div>
      <div class="bottomlink">
        <h3>OR</h3>
        <h2>REACH US AT</h2>
        <div class="link">
          <ul>
            <li>
              <a href="https://www.facebook.com">
                <i class="bx bxl-facebook-circle"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com">
                <i class="bx bxl-instagram-alt"></i>
              </a>
            </li>
            <li>
              <a href="https://api.whatsapp.com/send?phone=8735949462" target="_blank">
                <i class='bx bxl-whatsapp'></i>
              </a>
            </li>
            <li>
              <a href="tel:8735949462">
                <i class="bx bxs-phone-call"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <script>
    function openLightbox(event) {
      if (event.target && event.target.tagName === "IMG") {
        const lightbox = document.getElementById("lightbox");
        const lightboxImage = document.getElementById("lightbox-image");
        lightboxImage.src = event.target.src;
        lightbox.style.display = "flex";
      }
    }

    function closeLightbox() {
      const lightbox = document.getElementById("lightbox");
      lightbox.style.display = "none";
    }
  </script>
<?php
        include('footer.php');
      ?>
 

</body>

</html>