<?php
include('HEAD.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>tenents</title>

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
      <h2>HERE ARE SOME TENENTS <span>DESIGNS</span></h2>
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
            <img onclick="openLightbox(event)" src="https://www.homelane.com/blog/wp-content/uploads/2024/02/FILM-5.00_02_46_17.Still024-768x432.jpg" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>
              Catering to the needs of a multigenerational Gujarati family, in Ahmedabad is as warm and inviting as the family themselves! The design narrative takes into account the functional requirements of every member of the household, with clearly demarcated spatial configurations and an overarching emphasis on comfort. The result is a home filled with love, with communal spaces that nurture togetherness, and private spaces that meet individual design sensibilities. To know more
              <a href="tel:9876543210">CONTACT US</a> or <a href="contact.php">CLICK HERE</a>.
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://www.homelane.com/blog/wp-content/uploads/2024/02/FILM-5.00_00_58_02.Still006-768x432.jpg" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://www.homelane.com/blog/wp-content/uploads/2024/02/FILM-5.00_01_31_10.Still010-768x432.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://www.homelane.com/blog/wp-content/uploads/2024/02/FILM-5.00_02_43_09.Still023-768x432.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://www.homelane.com/blog/wp-content/uploads/2024/02/DSC00497-768x513.jpg" alt="" /></div>
      </div>
    </div>
  </div>
  <br />
  <br />
  <div class="designhead">
    <div class="container">
      <h1>DESIGN ...2</h1>
    </div>
  </div>
  <div class="design2">
    <div class="design">
      <div class="row" style=" display: flex">
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="image/tenents1.png" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>Fell in love with Ambiance the moment they stepped into the nearest Experience Centre. As we put it, “Ambiance’s quality of workmanship and cost-effective rates were very convincing, so we chose them without a second thought!”.To know more about us <a href="tel:9876543210">CONTACT US</a> or <a href="contact.php">CLICK HERE</a>.</blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://www.homelane.com/blog/wp-content/uploads/2024/01/DSC00402-768x513.jpg" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://www.homelane.com/blog/wp-content/uploads/2024/01/DSC00423-768x513.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://www.homelane.com/blog/wp-content/uploads/2024/01/DSC00378-768x513.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://www.homelane.com/blog/wp-content/uploads/2024/01/DSC00407-768x513.jpg" alt="" /></div>
      </div>
    </div>
  </div>
  <br />
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
            <img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/da4f80f3-8b78-4354-a175-8eb45b5229a3/Swiss+Blk+356b+Ubi+Ave+3+-+Kerbe-0242-min.jpg?format=1000w" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>
              A beautiful foyer unit with textured wallpaper and a side cabinet with drawers for storage. A simple yet elegant living room with a cosy sofa and an accent wall in orange peps up the space. A TV unit designed with low lying cabinet finished in wood and white laminate has open shelves on one side to showcase your books and decor. A geometric patterned wallpaper against the TV unit complements the look. A sleek L shaped kitchen in a dual colour tone with hexagonal tiled backsplash,
              handleless base and overhead cabinets finished in high gloss laminate make it functional and pretty. for more info <a href="tel:9876543210">CONTACT US</a> or <a href="contact.php">CLICK HERE</a>.
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/03/06173404/elegant-living-room-design-with-cosy-sofa-in-1bhk-apartment-design.jpg" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/03/06173238/1bhk-apartment-bedroom-design-with-classy-interiors.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/03/06173331/bathroom-designed-by-best-1bhk-apartment-interior-designers.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/03/06173345/breakfast-table-with-chairs-between-living-room-and-kitchen-in-1bhk-house.jpg" alt="" /></div>
      </div>
    </div>
  </div>
  <br />
  <br />
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
            <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/03/06121608/l-shaped-modular-kitchen-with-base-cabinets-for-1-bhk-house-interior.jpg" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>
              A modern 1BHK home with elegant interiors and a combination of soothing neutral colour scheme with a pop of yellow for a warm look. Space saving furniture across the home makes smart utilisation of available area. This 1BHK home has been designed with white marble flooring that makes it appear bigger and adds to the vibrancy.for more info <a href="tel:9876543210">CONTACT US</a> or <a href="contact.php">CLICK HERE</a>.
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/03/06121634/white-and-light-wood-tv-unit-designed-by-best-1bhk-house-designers-in-bangalore.jpg" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/03/06121535/bedroom-interior-design-in-1-bhk-house-design.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/03/06121543/dual-toned-bathroom-designed-in-1bhk-house-interior-design.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/03/06121526/bedroom-designed-with-grey-pink-white-colour-scheme-in-1bhk-home-design.jpg" alt="" /></div>
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
            <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/04/06183531/u-shaped-modular-kitchen-design-in-1bhk-house-design.jpg" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>
              This 1BHK is designed with neutral tones and minimal furniture for a uber-cool chic look. The neutral colour scheme and woodwork across the home infuses a warm and inviting aura into the space.

              for more info <a href="tel:9876543210">CONTACT US</a> or <a href="contact.php">CLICK HERE</a>.
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/04/06183502/living-room-design-with-yellow-sofa-in-1bhk-house-design.jpg" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/04/06183441/1bhk-home-interiors-with-luxurious-bedroom-with-wooden-shelves-and-storage-cabinets.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/04/06183450/bathroom-design-with-vanity-unit-for-1bhk-house-design-in-bengaluru.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2021/04/06183432/1bhk-home-design-with-foyer-unit-with-textured-wallpaper-pendant-lights.jpg" alt="" /></div>
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
  <br /><br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />

  <div id="lightbox" onclick="closeLightbox()">
    <img id="lightbox-image" src="" alt="Enlarged Photo" />
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