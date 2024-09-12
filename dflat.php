<?php
include('HEAD.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>flat</title>

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
      font-family: "CustomFont66";
      src: url("font/AbrilFatface-Regular.ttf") format("woff");
    }

    @font-face {
      font-family: "CustomFont67";
      src: url("font/Prata-Regular.ttf") format("woff");
    }

    .flathead {
      margin-top: 2%;
      margin-bottom: 1%;
      background: linear-gradient(to left, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.6));
      max-width: max-content;
      margin-left: 1%;
    }

    .flathead h2 {
      padding-left: 5%;
      font-style: italic;
      font-size: 60px;
      font-size: 60px;
      font-family: 'CustomFont66', sans-serif;
    }

    .flathead span {
      color: #404040;
    }

    .designhead {
      margin-right: 40%;
      margin-left: 10%;
      margin-bottom: 1%;
      margin-top: 1%;
    }

    .designhead h1 {
      font-size: 50px;
      font-weight: 800;
      font-family: 'CustomFont67', sans-serif;
    }

    .design {
      display: flex;
      width: 1500px;
      align-content: center;
      margin-left: 10%;

    }



    .design img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 5px;
      transition: all 0.3s ease;
    }

    .design img:hover {
      transform: scale(1.05);
    }

    .design blockquote {
      text-align: justify;
      margin-top: 8%;
      font-size: 18px;
      font-family: 'Times New Roman', Times, serif;
      text-align: justify;
      justify-content: center;
    }

    .design a {
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .design a:hover {
      color: black;
      text-decoration: underline;

    }

    .photos {
      display: flex;
      width: 1500px;
      align-content: center;
      margin-left: 10%;
      margin-top: 1%;
    }

    .photos img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 5px;
      transition: all 0.3s ease;
    }

    .photos img:hover {
      transform: scale(1.05);
    }

    .bottomsection {
      text-align: center;
      width: 1100px;
      margin-left: 20%;
    }

    .marquee {
      overflow: hidden;
      white-space: nowrap;
    }

    .marquee a {
      margin-right: 20px;
      display: inline-block;
    }

    .marquee img {
      width: 500px;
      height: auto;
      border-radius: 5px;
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
  <!-- <div class="stepbar">
      <div class="row" style="box-shadow: 20px 20px 60px #636262, inset -20px -20px 60px #ffffff40; background-color: azure">
        <div class="col-lg-3">
          <div class="stephead">
            <h1>AMBIANCE <sup>&copy;</sup></h1>
          </div>
        </div>

        <div class="col-lg-9">
          <div class="progressbar-wrapper">
            <div class="step-container">
              <div class="step-item active">Step 1</div>
              <div class="step-item active">Step 2</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <br /><br /> -->

  <div class="flatdesign">
    <div class="flathead">
      <h2>HERE ARE SOME FLAT 
        <span>
          DESIGNS
        </span></h2>
    </div>
    <div class="designhead">
      <div class="container">
        <h1>DESIGN ...1</h1>
      </div>
    </div>
  </div>
  <div class="design1">
    <div class="design">
      <div class="row" style=" display: flex">
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/da4f80f3-8b78-4354-a175-8eb45b5229a3/Swiss+Blk+356b+Ubi+Ave+3+-+Kerbe-0242-min.jpg?format=1000w" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>
              Getting a 3-room HDB flat is a popular choice, especially for new homeowners due to its price value and availability. Every homeowner’s dream is to have a big spacious home to come back to and live in. However, it is no secret that space is very limited in 3-room. Trying to renovate and optimise the space available can be very challenging. Believe it or not, design planning a 3-room interior design is very doable. Nowadays, there are plenty of options, even for small spaces like
              3-room. So here a option for you for more info about this <a href="tel:9876543210">CONTACT US</a> or <a href="contact.php">CLICK HERE</a>.
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/ad8e4c50-03bc-4fd0-a22f-9385157eb518/Swiss+Blk+356b+Ubi+Ave+3+-+Kerbe-0032-min.jpg?format=1000w" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/337d3741-8d16-406e-a9a2-d4968fc5db4d/Swiss+Blk+356b+Ubi+Ave+3+-+Kerbe-0146-min.jpg?format=1000w" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/e8be3666-a1f6-4b87-b849-f6f3d54d0b49/Swiss+Blk+356b+Ubi+Ave+3+-+Kerbe-0232-min.jpg?format=750w" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1ec72895-0219-4b7e-bbd4-1e2ae903239d/Swiss+Blk+356b+Ubi+Ave+3+-+Kerbe-0169-min.jpg?format=1000w" alt="" /></div>
      </div>
    </div>
  </div>
  <br />
  <br>
  <br>
  <br />
  <div class="designhead">
    <div class="container">
      <h1>DESIGN ...2</h1>
    </div>
  </div>
  <div class="design1">
    <div class="design">
      <div class="row" style=" display: flex">
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/91bb6039-0508-4447-954c-f7e653501dcc/157+Yung+Loh+Rd+living+room1-min.jpg?format=1000w" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>
              Contrasting wooden textures with dark grey tones give off a rustic feel that is vamped up with a modern edge as extensive use of wooden textures and different hues from the grey palette dominates most of this moody yet cozy abode. Classical and industrial elements come together to create this clean and sophisticated open kitchen space. The kitchen backsplash provides a visual avenue for homeowners to get creative and try unique and eye-catching designs. The striking yellow, black
              and grey geometric design forms a vibrant and chic combo without overpowering the surrounding features to know more about this <a href="tel:9876543210">CONTACT US</a> or <a href="contact.php">CLICK HERE</a>.
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/539ba1f2-1502-4871-b864-e5a3e671c90c/157+Yung+Loh+Rd+living+room3-min.jpg?format=1000w" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/4b802a72-d939-4f8d-8788-6c22b61b84bd/157+Yung+Loh+Rd+bedroom-min.jpg?format=1000w" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/4b4c7441-ae44-4092-8522-474e60b943d2/157+Yung+Loh+Rd+toilet-min.jpg?format=2500w" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/d3157a83-ee80-487e-92f8-8271a82ff27a/157+Yung+Loh+Rd+bedroom1-min.jpg?format=1000w" alt="" /></div>
      </div>
    </div>
  </div>
  <br />
  <br>
  <br>
  <br />
  <div class="designhead">
    <div class="container">
      <h1>DESIGN ...3</h1>
    </div>
  </div>
  <div class="design1">
    <div class="design">
      <div class="row" style=" display: flex">
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/b5f23c5d-76c7-4ce8-8024-186f6dcd41e1/413C+Northshore+Drive%2C+4+Room+BTO+Flat+Kitchen+1.jpg?format=750w" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>
              It's all about balance with tones in this abode. Dark grey tones contrast beautifully with earthy wooden textures, effortlessly mingling together to achieve a modern yet rustic look. 🤩 Create dramatic spaces with dark colours. The usage of different shades of grey makes the kitchen space look sleek and sophisticated. Turn your bathroom into a warm and cosy sanctuary by introducing warm wooden tones. Warm organic touches make the bathrooms feel like a spa retreat while designer
              tiles create eye-catching drama that adds heaps of character. Gold tones in the bathroom fixtures further uplift the space with style and elegance. 🔱 for more info <a href="tel:9876543210">CONTACT US</a> or <a href="contact.php">CLICK HERE</a>.
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/d6e366ef-6001-4e91-a34d-0bb5d33a8be2/413C+Northshore+Drive%2C+4+Room+HDB+Living+Room+2.jpg?format=750w" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/4d70d510-a157-40f1-9828-06b084ccdb03/413C+Northshore+Drive%2C+4+Room+BTO+Bedroom+3.jpg?format=750w" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/9a27f6c0-2c76-4e9c-b5e8-bf4ceab038c0/413C+Northshore+Drive%2C+4Room+HDB+BTO+Toilet+5.jpg?format=750w" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/5c0569c1-0eec-439f-a2c8-9040b3e511a1/413C+Northshore+Drive%2C+4+Room+HDB+dining+room+1.jpg?format=750w" alt="" /></div>
      </div>
    </div>
  </div>
  <br />
  <br />
  <br>
  <br>
  <div class="designhead">
    <div class="container">
      <h1>DESIGN ...4</h1>
    </div>
  </div>
  <div class="design1">
    <div class="design">
      <div class="row" style=" display: flex">
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/80dda8ed-a1c7-4745-9930-216c33ed944b/Grandeur+Park%2C+2+Bedder+Condominium+Bar+1.jpg?format=1000w" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>
              A wood-on-wood Scandinavian abode designed to perfection in this HDB flat highlights the best features of any nordic-inspired interior design theme. This classy project consists of mostly natural and wooden tones, with an occasional splash of bold pastel shades. In the master bedroom, our designers take on a functional redesign to a common clothes wardrobe, constructing an open concept storage space, perfectly catered to the homeowner’s tastes. With no shortage on storage spaces
              incorporated into the design, smart space planning solutions stand out in this project, leaving an uncluttered finish, commonly seen in Scandinavian-inspired projects. for more info <a href="tel:9876543210">CONTACT US</a> or <a href="contact.php">CLICK HERE</a>.
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/ef169a17-b8d1-4ac7-bceb-aa118a686680/Grandeur+Park%2C+2+Bedder+Condominium+Living+Room+1.jpg?format=1000w" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br>
  <br>
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/87c41fe3-dedd-4f91-ae3c-d52dec5a94ce/Grandeur+Park%2C+2+Bedder+Condominium+Bedroom+3.jpg?format=1000w" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/b0818196-18a8-424e-90ce-aa15b20fbf24/Grandeur+Park%2C+2+Bedder+Condominium+Study+3.jpg?format=1000w" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/4c2e35d1-2ea9-4c97-b6de-003569590ee8/Grandeur+Park%2C+2+Bedder+Condominium+Study+9.jpg?format=1000w" alt="" /></div>
      </div>
    </div>
  </div>
  <br />
  <br />
  <div class="designhead">
    <div class="container">
      <h1>DESIGN ...5</h1>
    </div>
  </div>
  <div class="design1">
    <div class="design">
      <div class="row" style=" display: flex">
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625642501992-0XXZA4SQXHKMU6ZCM9VW/607A+Edgefield+Plains+4Room+Resale+Flat+-+Kitchen.jpg?format=1000w" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>
              A wood-on-wood Scandinavian abode designed to perfection in this HDB flat highlights the best features of any nordic-inspired interior design theme. This classy project consists of mostly natural and wooden tones, with an occasional splash of bold pastel shades. In the master bedroom, our designers take on a functional redesign to a common clothes wardrobe, constructing an open concept storage space, perfectly catered to the homeowner’s tastes. With no shortage on storage spaces
              incorporated into the design, smart space planning solutions stand out in this project, leaving an uncluttered finish, commonly seen in Scandinavian-inspired projects. for more info <a href="tel:9876543210">CONTACT US</a> or <a href="contact.php">CLICK HERE</a>.
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625643360993-AOOX3SJSCYM4ZIP9HB8P/607A+Edgefield+Plains+4Room+Resale+Flat+Living+Room+%283%29.jpg?format=1000w" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625643318144-DSD84PFANDFBURPAE5ZA/607A+Edgefield+Plains+4Room+Resale+Flat+Bedroom+2.jpg?format=1000w" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625643546796-P5UK5O19CT5S42VAS7JC/607A+Edgefield+Plains+4Room+Resale+Flat+Toilet+5?format=1000w" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625643333547-I0IIRIWCJPD1KM5FGAJC/607A+Edgefield+Plains+4Room+Resale+Flat+Living+Room+%282%29.jpg?format=1000w" alt="" /></div>
      </div>
    </div>
  </div>
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />

  <div class="bottomsection">
    <div class="bottomhead">
      <h1>SOME OF OUR BEST DESIGNS.</h1>
    </div>
    <div>
      <p>Here are some of our best design which are choosen more frequently by our visitors and are quiet elegant and excellent.</p>
    </div>
    <div class="bottom-scroller marquee">
      <marquee behavior="" direction="right">
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/e1878890-6d46-4bc3-9ced-95bb67f8ec8f/royal+green+living+room-min.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/bf036b7d-dd3b-45b3-a095-36e78ce55cf3/Swiss+Interior+315A+Punggol+Way-7379.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625637706535-EUD1ZWAVJU9R1305C8HV/Blk+313C+Sumang+Link+5Room+HDB+Resale+%2815%29.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625654641385-OD443W0DV2CPHHPSA29D/3+Bedder+Artra+Living+Room+%287%29.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625636985534-HDOCJWRY0RFCO4UFVOMU/SwissInterior_CompassvaleLink+%284%29.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/e1878890-6d46-4bc3-9ced-95bb67f8ec8f/royal+green+living+room-min.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/bf036b7d-dd3b-45b3-a095-36e78ce55cf3/Swiss+Interior+315A+Punggol+Way-7379.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625637706535-EUD1ZWAVJU9R1305C8HV/Blk+313C+Sumang+Link+5Room+HDB+Resale+%2815%29.jpg?format=750w" alt="" /></a>
        <a href=""><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625654641385-OD443W0DV2CPHHPSA29D/3+Bedder+Artra+Living+Room+%287%29.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625636985534-HDOCJWRY0RFCO4UFVOMU/SwissInterior_CompassvaleLink+%284%29.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1097834362/photo/3d-render-of-luxury-hotel-room.jpg?s=612x612&w=0&k=20&c=pxAHducu3oOvmydK8hSASH97qmstJ_zXF4GDhalT__8=" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1131331857/photo/3d-rendering-beautiful-luxury-bedroom-suite-in-hotel-with-tv.jpg?s=612x612&w=0&k=20&c=z4g9-YTzIYZS7huhEC6OmIQG1KENq1ASYZtQNa6lURw=" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/185244040/photo/hotel-room.jpg?s=612x612&w=0&k=20&c=z2yXofMxbgV-_K_V63W0BAtkFRjRdbbXVyfVStAf93Q=" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/928431714/photo/3d-rendering-modern-luxury-bedroom-suite-and-bathroom.jpg?s=612x612&w=0&k=20&c=kYiupd-t22eEw5xSqHULuv6cjH_0kWkcX4nkooVQdUg=" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/e1878890-6d46-4bc3-9ced-95bb67f8ec8f/royal+green+living+room-min.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/bf036b7d-dd3b-45b3-a095-36e78ce55cf3/Swiss+Interior+315A+Punggol+Way-7379.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625637706535-EUD1ZWAVJU9R1305C8HV/Blk+313C+Sumang+Link+5Room+HDB+Resale+%2815%29.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625654641385-OD443W0DV2CPHHPSA29D/3+Bedder+Artra+Living+Room+%287%29.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625636985534-HDOCJWRY0RFCO4UFVOMU/SwissInterior_CompassvaleLink+%284%29.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/04/06180844/elegant-1bhk-home-design-with-neutral-tones.jpg" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/06/30135419/modern-1bhk-home-living-room-designed-with-comfortable-couch-and-tv-unit.jpg" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2022/03/05170324/1-bhk-bedroom-designed-with-sliding-wardrobe-and-king-sized-bed.jpg" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/e1878890-6d46-4bc3-9ced-95bb67f8ec8f/royal+green+living+room-min.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/bf036b7d-dd3b-45b3-a095-36e78ce55cf3/Swiss+Interior+315A+Punggol+Way-7379.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625637706535-EUD1ZWAVJU9R1305C8HV/Blk+313C+Sumang+Link+5Room+HDB+Resale+%2815%29.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625654641385-OD443W0DV2CPHHPSA29D/3+Bedder+Artra+Living+Room+%287%29.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625636985534-HDOCJWRY0RFCO4UFVOMU/SwissInterior_CompassvaleLink+%284%29.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/04/06180844/elegant-1bhk-home-design-with-neutral-tones.jpg" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/06/30135419/modern-1bhk-home-living-room-designed-with-comfortable-couch-and-tv-unit.jpg" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26182253/u-shaped-kitchen-for-cozy-3bhk-house-design.jpg" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26174752/modular-kitchen-3-bhk-interior-design.jpeg" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26151018/3-bhk-villa-interior-design-of-l-shaped-kitchen.jpg" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/e1878890-6d46-4bc3-9ced-95bb67f8ec8f/royal+green+living+room-min.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/bf036b7d-dd3b-45b3-a095-36e78ce55cf3/Swiss+Interior+315A+Punggol+Way-7379.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625637706535-EUD1ZWAVJU9R1305C8HV/Blk+313C+Sumang+Link+5Room+HDB+Resale+%2815%29.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625654641385-OD443W0DV2CPHHPSA29D/3+Bedder+Artra+Living+Room+%287%29.jpg?format=750w" alt="" /></a>
        <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625636985534-HDOCJWRY0RFCO4UFVOMU/SwissInterior_CompassvaleLink+%284%29.jpg?format=750w" alt="" /></a>
      </marquee>
    </div>
  </div>

  <div id="lightbox" onclick="closeLightbox()">
    <img id="lightbox-image" src="" alt="Enlarged Photo" />
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