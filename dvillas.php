<?php
include('HEAD.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VILLAS</title>

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

    .design a {
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .design a:hover {
      color: black;
      text-decoration: underline;
    }

    .design blockquote {
      text-align: justify;
      margin-top: 5%;
      font-size: 18px;
      font-family: 'Times New Roman', Times, serif;
      text-align: justify;
      justify-content: center;
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
      width: auto;
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
      <h2>HERE ARE SOME VILLAS 
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
            <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26182253/u-shaped-kitchen-for-cozy-3bhk-house-design.jpg" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>
              Designed with the intent of being playful and warm, this 3BHK home combines two distinct design styles to strike a balance in the middle. Rich wooden textures stand out as the major focal point of the master bedroom as a contrast to the rest of the interiors that have been designed with a pastel colour scheme to bring in cheery vibe to this villa. To know more
              <a href="tel:9876543210">CONTACT US</a> or <a href="contact.php">CLICK HERE</a>.
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26182116/living-room-interior-design-for-3-bhk-flat-in-bangalore.jpg" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26182056/classic-bedroom-design-in-3-bhk-home-design.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26182047/art-deco-3-bhk-house-interior-design.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://www.homelane.com/blog/wp-content/uploads/2024/02/DSC00497-768x513.jpg" alt="" /></div>
      </div>
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26182125/minimalistic-style-bathroom-design-for-3-bhk-design.jpg" alt="" /></div>
        <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26182106/dining-cum-kitchen-area-for-3-bhk-villa-house-design.jpg" alt="" /></div>
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
  <div class="design1">
    <div class="design">
      <div class="row" style=" display: flex">
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26174752/modular-kitchen-3-bhk-interior-design.jpeg" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>A modern home designed with neutral colour palette and few warm tones to keep it from being too over stimulating. Ample usage of wood, stone and fabric textures for an understated industrial feel.To know more about us <a href="tel:9876543210">CONTACT US</a> or <a href="contact.php">CLICK HERE</a>.</blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26174629/dining-room-interior-design-for-modern-3-bhk-flat-bangalore.jpeg" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26174659/living-room-design-in-simple-3-bhk-villa-interior-design.jpeg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26174731/modern-3-bhk-interior-design-of-master-bedroom.jpeg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26174609/bunk-bed-design-modern-3bhk-house-design.jpeg" alt="" /></div>
      </div>
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26174836/study-unit-interior-design-for-3-bhk-flat.jpeg" alt="" /></div>
        <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26174802/scandinavian-style-3-bhk-flat-interior-design-for-wardrobe.jpeg" alt="" /></div>
      </div>
    </div>
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26174844/stylish-3-bhk-apartment-interior-design-for-bathroom.jpeg" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26174742/modern-bathroom-3-bhk-flat-interior-design-in-india.jpeg" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26174709/minimal-foyer-for-modern-3-bhk-home-design.jpeg" alt="" /></div>
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
            <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26151018/3-bhk-villa-interior-design-of-l-shaped-kitchen.jpg" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>
              A beautiful foyer unit with textured wallpaper and a side cabinet with drawers for storage. A simple yet elegant living room with a cosy sofa and an accent wall in orange peps up the space. A TV unit designed with low lying cabinet finished in wood and white laminate has open shelves on one side to showcase your books and decor. A geometric patterned. A sleek L shaped kitchen in a dual colour tone with hexagonal tiled backsplash,
              handleless base and overhead cabinets finished in high gloss laminate make it functional and pretty. for more info <a href="tel:9876543210">CONTACT US</a> or <a href="contact.php">CLICK HERE</a>.
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26152452/l-shaped-kitchen-design-for3-bhk-flat-interior-design.jpg" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26152841/small-living-room-3-bhk-flat-interior-design-india.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26153351/dining-area-3-bhk-flat-interior-design-in-india.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26152427/latest-bdroom-designs-in-3-bhk-interior-design.jpg" alt="" /></div>
      </div>
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26153302/bedroom-design-in-3-bhk-flat-design-in-banglore-mumbai-hyderabad.jpg" alt="" /></div>
        <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26152803/master-bedroom-design-in-3-bhk-interior-design.jpg" alt="" /></div>
      </div>
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26153423/kids-bedroom-interior-design-for-3-bhk-flat.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26153249/bathroom-design-for-3-bhk-house-interior-design.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26152823/modern-bathroom-design-in-3-bhk-flat-design.jpg" alt="" /></div>
      </div>
    </div>
  </div>
  <br /><br />
  <div class="designhead">
    <div class="container">
      <h1>COMMON BEDROOM DESIGNS FOR VILA...</h1>
    </div>
  </div>
  <div class="design1">
    <div class="design">
      <div class="row" style=" display: flex">
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1200234294/photo/classical-bedroom-and-living-room-3d-render.jpg?s=612x612&w=0&k=20&c=g8ByMu3KS4kCY6TsdiJrfQ_wzeMEGwS-bo3jsoQVGI0=" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1194686012/photo/bedroom-in-new-luxury-home.jpg?s=612x612&w=0&k=20&c=X6Ymu7p4GM7X_Su11DAZ_3WT8McL4xchV7ZLv6IMsM4=" alt="" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1266155645/photo/luxurious-master-bedroom-interior.jpg?s=612x612&w=0&k=20&c=bCPLLk6rFaDLz-gJT460YwG-nbMLTEJgHkdeT7OvQD0=" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1277958613/photo/luxurious-modern-bedroom-with-dressing-room.jpg?s=612x612&w=0&k=20&c=_jtCMKe60-g_crAhyWSyg74cBSNaSbgzitxipYDkGQI=" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://images.livspace-cdn.com/plain/https://d3gq2merok8n5r.cloudfront.net/abhinav/ond-1634120396-Obfdc/ond-2022-1664872805-f0ijv/mbr-1664872893-qeyQW/br-1666881566-g8ezJ.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://i.pinimg.com/736x/5d/bb/5e/5dbb5ef85962b2209b071c30c140a62d.jpg" alt="" /></div>
      </div>
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/911397374/photo/modern-loft-bedroom-with-black-and-white-3d-rendering-image.jpg?s=612x612&w=0&k=20&c=9GaJn0Pa4vTEED5nARFAFfO3nt6CcMWac2eyMxpvxP0=" alt="" style="margin-left: 20%;" /></div>
        <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/501857244/photo/loft-and-modern-bedroom.jpg?s=612x612&w=0&k=20&c=SUGpOQYQ2085J8j9_TdmlFVDXAgUwMCBaAaoTBcERtc=" alt="" style="margin-left: 20%;" /></div>
      </div>
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1362542871/photo/modern-luxury-bedroom.jpg?s=612x612&w=0&k=20&c=lbCQYjffKBhD9_BzgA5RuBEmD92H1vS99aei6l_jePU=" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/919538864/photo/modern-white-bedroom-with-sea-view-3d-rendering-image.jpg?s=612x612&w=0&k=20&c=E9BwGqdUf-QODEwklRkbJG5bjiiv0YJ8ORU-L4THz4w=" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1148202428/photo/luxury-bedroom-interior.jpg?s=612x612&w=0&k=20&c=vZF8d7QvaXqljapoz9PbuQq2Xs9rTAWPi4K1wnKn7Bk=" alt="" /></div>
      </div>
    </div>
  </div>

  <div class="designhead">
    <div class="container">
      <h1>COMMON HALL DESIGNS FOR VILA...</h1>
    </div>
  </div>
  <div class="design1">
    <div class="design">
      <div class="row" style=" display: flex">
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1214217738/photo/luxury-beach-house-sofa-armchair-stool-side-table-lamps-curtains-in-living-room-with-infinity.jpg?s=612x612&w=0&k=20&c=VeixJM2GPZV9GGEcPFH_g6nwVhyE4ahp1oYAb_Y6GUY=" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="image/Screenshot 2024-02-20 191503.png" alt="" style="height: 254px;" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1266156392/photo/modern-living-room-in-3d.jpg?s=612x612&w=0&k=20&c=q0VML2b2tuUouHq9sK63yho6YNVaxXKIrmN0tUx8rQs=" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1165742876/photo/modern-living-room.jpg?s=612x612&w=0&k=20&c=vHGeJilWBSktnAtf5pmr6-YBs75rf3sKTdDGQneDYHU=" alt="" style="margin-left: 20%;" /></div>
        <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1298286077/photo/luxury-living-room-at-night-with-sofa-floor-lamp-and-parquet-floor.jpg?s=612x612&w=0&k=20&c=TqNpPKaLvfCTEXzdipoD_zXRdJ_XKVx8SJ1ypyhimv4=" alt="" style="margin-left: 20%;" /></div>
      </div>
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1308686874/photo/modern-luxury-living-room-interior-with-beautiful-ocean-view.jpg?s=612x612&w=0&k=20&c=iNijxXVSIxxL1c-K_M4rfTHu178rapUHY67JByzvd6I=" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1304831445/photo/interior-of-luxurious-living-room-with-sofa-and-bookshelf-dusk-scenery-from-the-window.jpg?s=612x612&w=0&k=20&c=sbcOG2i2biR1yXU3WXl-dKIHMx1TBFLNz1iPfV7hnH4=" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1148202428/photo/luxury-bedroom-interior.jpg?s=612x612&w=0&k=20&c=vZF8d7QvaXqljapoz9PbuQq2Xs9rTAWPi4K1wnKn7Bk=" alt="" /></div>
      </div>
    </div>
  </div>

  <div class="designhead">
    <div class="container">
      <h1>COMMON BATHROOMS DESIGNS FOR VILA...</h1>
    </div>
  </div>
  <div class="design1">
    <div class="design">
      <div class="row" style=" display: flex">
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1334118685/photo/computer-generated-image-of-interior-of-bathroom-in-3d-with-houseplant.jpg?s=612x612&w=0&k=20&c=5jnGzz3zsNA4MtiyWXBAN1MfIcmVYDpNO1HsAqPuCIo=" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1414004145/photo/bathroom-in-the-villa.jpg?s=612x612&w=0&k=20&c=e0J-5j3JJq-JkLx1RYrsjsZutHxBBBiQoj7O8K9t_iU=" alt="" style="height: 362px;" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1172894166/photo/luxury-bathroom-with-black-marble-floor-and-white-marble-wall-3d-render.jpg?s=612x612&w=0&k=20&c=atPIaukTv8IFY8LRO-vLJ0W0-3NIuCtUdbfaNA3OlIA=" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1308459643/photo/bathroom-on-open-air-veranda-with-beautiful-tropical-garden-view.jpg?s=612x612&w=0&k=20&c=_NC4kQuBVmigol9nsSpU_mmKorGBToq7slBuDWSDbEY=" alt="" style="margin-left: 20%;" /></div>
        <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1357608243/photo/elegant-modern-bathroom-interior-with-marble-flooring-brown-bathtub-and-sink-on-countertop.jpg?s=612x612&w=0&k=20&c=BjZM9a4VcFz_0FM8uu-w6HpUvsspSXzuKfKFt4lCqiY=" alt="" style="margin-left: 20%;" /></div>
      </div>
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1073984712/photo/luxurious-minimalist-bathroom-with-wooden-striped-walls.jpg?s=612x612&w=0&k=20&c=1BUAjFenv68XqBqLA9ztsijsSebPaXqJNB1KMKMkLxE=" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1201758006/photo/modern-luxury-black-bathroom-3d-render.jpg?s=612x612&w=0&k=20&c=2M4GHVEerhK7BYzDU0xCfEEmXtr_b4PY1YjRjLLt4aI=" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/486575890/photo/exclusive-modern-bathroom.jpg?s=612x612&w=0&k=20&c=UqyAdWL_Bry-OcewRnx5q_t1T2AtfJZIYzk3hcTes94=" alt="" /></div>
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