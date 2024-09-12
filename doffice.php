<?php
include('HEAD.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OFFICE</title>

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
      <h2>HERE ARE SOME BUSINESS/OFFICE DESIGNS</h2>
    </div>
    <div class="designhead">
      <div class="container">
        <h1>DESIGN ...1</h1>
      </div>
    </div>
  </div>
  <div class="design1">
    <div class="design">
      <div class="row" style="display: flex">
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://cdn.decorilla.com/images/960/re_4672_56e86b7c8ae9c6.75274113/Online-Business-Office-Design-online-interior-designers-2.jpg?cv=1" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>
              Welcome to our modern office space designed for optimal productivity. With an open-concept layout, abundant natural light, and smart technology integration, our workspace promotes collaboration and innovation. Comfortable breakout areas, wellness features, and a commitment to sustainability ensure a balanced and inspiring work environment. Our office reflects our brand identity through cohesive design elements, creating a dynamic hub for creativity and success.

              <a href="tel:9876543210">CONTACT US</a> or <a href="contact.php">CLICK HERE</a>.
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://cdn.decorilla.com/images/960/re_4672_56e86c090d2d36.71251425/Online-Business-Office-Design-online-interior-designers.jpg?cv=1" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://cdn.decorilla.com/images/960/re_4672_56e86bdc21bc43.93118625/Online-Business-Office-Design-online-interior-designers-4.jpg?cv=1" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://cdn.decorilla.com/images/960/re_4672_56e86b9db2e6a7.55505436/Online-Business-Office-Design-online-interior-designers-3.jpg?cv=1" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://cdn.decorilla.com/images/960/re_4672_56e86cf06cb4e4.70984956/Online-Business-Office-Design-online-interior-designers-6.jpg?cv=1" alt="" /></div>
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
      <div class="row">
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://cdn.decorilla.com/images/960/13981_15_53c6c21ac83c54.85833773/Online-Home-Small-Office-Design-interior-design-samples.jpg?cv=1" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>
              a contemporary space designed for peak efficiency. Embracing an open layout, ample natural light, and cutting-edge technology, our workspace encourages seamless collaboration. Comfortable breakout zones, wellness amenities, and sustainability initiatives prioritize a harmonious and inspiring work setting. Aligned with our brand identity, this office is a dynamic hub fostering creativity and triumph. to know more about this <a href="tel:9876543210">CONTACT US</a> or
              <a href="contact.php">CLICK HERE</a>.
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://cdn.decorilla.com/images/960/13981_15_53c6c2190fca29.47159104/Online-Home-Small-Office-Design-interior-design-samples-3.jpg?cv=1" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
    <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://cdn.decorilla.com/images/960/re_1226_5388ed9325e345.23449457/Online-Home-Small-Office-Design-interior-design-samples-2.jpg?cv=1" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://cdn.decorilla.com/images/960/13981_15_53c6c2174c2128.64938041/Online-Home-Small-Office-Design-interior-design-samples-5.jpg?cv=1" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://cdn.decorilla.com/images/960/re_1226_5388edc9db9502.55118800/Online-Home-Small-Office-Design-interior-design-samples-4.jpg?cv=1" alt="" /></div>
      </div>
    </div>
  </div>
  <br />
  <br />
  <!-- <div class="designhead">
    <div class="container">
      <h1>DESIGN ...3</h1>
    </div>
  </div>
  <div class="design1">
    <div class="design">
      <div class="row" style="display: flex">
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://cdn-iopdd.nitrocdn.com/zaRrVPNZirTZZmiWtgULXJtAtnmRczHp/assets/images/optimized/rev-8249d91/www.nobroker.in/blog/wp-content/uploads/2023/03/2.-Simplicity-and-Perfection-The-Perfect-Mix.jpg" alt="" width="100%" height="100%" />
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <blockquote>
              Step into our third office, where modern design meets functionality for optimum performance. Featuring an open layout, abundant natural light, and advanced technology integration, this workspace is tailored for collaborative excellence. Comfortable breakout zones, wellness-centric elements, and sustainable practices contribute to a balanced and invigorating work environment. Infused with our distinctive brand identity, this office serves as a vibrant hub, propelling innovation
              and success. for more info <a href="tel:9876543210">CONTACT US</a> or <a href="#">CLICK HERE</a>.
            </blockquote>
          </div>
        </div>
        <div class="col-lg-4">
          <div>
            <img onclick="openLightbox(event)" src="https://cdn-iopdd.nitrocdn.com/zaRrVPNZirTZZmiWtgULXJtAtnmRczHp/assets/images/optimized/rev-8249d91/www.nobroker.in/blog/wp-content/uploads/2023/03/4.-A-Magical-Conference-Room.jpg" alt="" width="100%" height="100%" />
          </div>
        </div>
      </div>
      <br />
      <br />
    </div> -->
  <!-- <div class="photos">
      <div class="row">
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://cdn-iopdd.nitrocdn.com/zaRrVPNZirTZZmiWtgULXJtAtnmRczHp/assets/images/optimized/rev-8249d91/www.nobroker.in/blog/wp-content/uploads/2023/03/7.-Get-Inspired-from-Nature.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://cdn-iopdd.nitrocdn.com/zaRrVPNZirTZZmiWtgULXJtAtnmRczHp/assets/images/optimized/rev-8249d91/www.nobroker.in/blog/wp-content/uploads/2023/03/9.-Collaborative-Setting.jpg" alt="" /></div>
        <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://cdn-iopdd.nitrocdn.com/zaRrVPNZirTZZmiWtgULXJtAtnmRczHp/assets/images/optimized/rev-8249d91/www.nobroker.in/blog/wp-content/uploads/2023/03/6.-Modernise-the-Room.jpg" alt="" /></div>
      </div>
    </div> -->
  </div>
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