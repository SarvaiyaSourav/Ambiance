<?php
  include('HEAD.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="aboutus.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <style>
    @font-face {
      font-family: "CustomFont";
      src: url("font/RubikGlitchPop-Regular.ttf") format("woff");
    }

    @font-face {
      font-family: "CustomFont1";
      src: url("font/DancingScript-VariableFont_wght.ttf") format("woff");
    }

    @font-face {
      font-family: "CustomFont2";
      src: url("font/Satisfy-Regular.ttf") format("woff");
    }

    @font-face {
      font-family: "CustomFont3";
      src: url("font/ProtestRevolution-Regular.ttf") format("woff");
    }

    body {
      font-family: "Times New Roman", Times, serif;
      margin: 0;
      padding: 0;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
    }

    .brand {
      width: 25%;
    }

    .centered-links {
      flex: 1;
      text-align: center;
    }

    .icons {
      margin-left: auto;
    }

    nav ul {
      list-style-type: none;
      margin: 10px;
      padding: 0;
      display: flex;
      justify-content: center;
    }

    nav li {
      margin-right: 20px;
    }

    nav a {
      text-decoration: none;
      color: rgba(255, 255, 255, 0.7);
      font-weight: bold;
    }

    .background-section {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px;
    }

    .centered-links {
      text-align: center;
      padding-left: 500px;
    }

    .centered-links li {
      margin: 20px;
    }

    .heading {
      text-align: center;
      padding: 1%;
      background-color: #333;
      color: #fff;
      font-family: "CustomFont", sans-serif;
    }

    .heading h1 {
      font-size: 60px;
    }

    .heading a {
      text-decoration: none;
      font-family: "CustomFont", sans-serif;
      color: #fff;
    }

    .main-title {
      font-size: 60px;
    }

    .line-2 {
      font-size: 100px;
      font-weight: bold;
      font-family: "CustomFont1", sans-serif;
    }

    /* .introcont{    
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
      } */

    .img {
      float: right;
      margin: 0 0 20px 20px;
    }

    .introcont p {
      font-family: "Times New Roman", Times, serif;
    }

    .ttp {
      text-align: center;
      /* padding-left: 5%; */
    }

    .Heading {
      text-align: center;
      color: rgb(252, 143, 0);
    }

    .box {
      margin: 5%;
      border-right: 1px dashed #ffffff;
      border-left: 1px dashed #ffffff;
      margin-left: 18%;
      margin-right: 18%;
    }

    .container {
      padding: 20px;
    }

    .ttp {
      background-color: rgb(53, 53, 53);
      color: white;
      margin: 5%;
      padding: 2%;
      text-align: center;
    }

    .button {
      width: 40%;
      height: 50px;
      background-color: rgb(252, 143, 0);
      border-color: white;
      font-weight: bold;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .head {
      border-right: #fff 1px solid;
      height: 150px;
    }

    .head h1 {
      color: rgb(252, 143, 0);
      padding-top: 15%;
      font-size: 60px;
    }

    .head1 h1 {
      font-size: 60px;
      color: rgb(252, 143, 0);
      padding-top: 53%;
    }

    .quote {
      color: #fff;
      text-align: justify;
      padding-left: 6%;
    }

    .quote1 {
      color: #fff;
      text-align: justify;
      padding-top: 6%;
      padding-right: 10%;
      border-right: 1px solid white;
      margin-top: 20%;
      height: 160px;
    }

    .missvis {
      background-color: #333;
      margin: 1%;
      padding: 15%;
    }

    .misss {
      background-color: #333;
    }

    .image-scroller {
      width: 100%;
      overflow: hidden;
      white-space: nowrap;
      margin-bottom: 20px;
    }

    .image-scroller img {
      width: 150px;
      height: 100px;
      margin: 5px;
      border: 2px solid #ddd;
      border-radius: 10px;
      object-fit: cover;
      object-fit: fill;
      transition: transform 0.1s ease-in-out;
    }

    .image-scroller img:hover {
      transform: scale(1.1);
    }

    .partner-row {
      background-color: #333;
      padding-bottom: 20px;
    }

    .scrollerhead h2 {
      color: rgb(252, 143, 0);
      font-size: 50px;
      text-align: center;
    }

    .scrollerhead hr {
      border: 1px solid white;
      margin-left: 40%;
      margin-right: 40%;
    }

    .partnership {
      background-color: #333;
      text-align: center;
    }

    .suchead h1 {
      color: rgb(252, 143, 0);
      font-size: 110px;
      font-family: "CustomFont2", sans-serif;

    }

    .suchead hr {
      color: #ffffff;
      width: 12%;
      margin-left: 43%;
      border: 1px solid;

    }

    .suchead p {
      margin-left: 15%;
      margin-right: 15%;
      font-size: 20px;
      font-family: 'Times New Roman', Times, serif;
      color: #ffffff;
    }

    .succc {
      padding-left: 20%;
      padding-right: 20%;
      padding-bottom: 2%;
      padding-top: 1%;
      font-family: "CustomFont3", sans-serif;
    }


    .yellow {
      padding-bottom: 2%;
      padding: 15%;
      color: #ffffff;
      background-color: rgb(252, 143, 0);
    }

    .purple {
      color: #ffffff;
      padding: 15%;
      background-color: rgb(184, 67, 184);
    }

    .yellow i {
      font-size: 50px;
    }

    .purple i {
      font-size: 50px;
    }

    .yellow h4 {
      font-size: 50px;
    }

    .purple h4 {
      font-size: 50px;
    }

    .yellow h6 {
      font-size: 50px;
    }

    .purple h6 {
      font-size: 50px;
    }
  </style>
</head>



<body>

  
  <div class="container">
    <div class="row">
      <div class="about-us">
        <h2 class="main-title">THE HISTORY OF</h2>
        <h3 class="line-2">AMBIANCE.</h3>
        <p class="introcont" style="text-align: justify">
          <img class="img" src="image/chg-about_pic.jpg" alt="" />
          In 1989, Dan Siegrist built his first home, doing much of the work himself. Over the next ten years, Dan’s business grew along with his reputation for quality construction. In 2002, Daniel H. Siegrist Co. became Custom Home Group, Inc. and began building its team – starting with Derrick Siegrist, Dan’s son. In 2015, Jared Erb and Ken Uhrich, who had been longterm employees, joined Dan and Derrick as partners of the company. Four years later, after a long career in construction, Dan
          decided to retire from the company at the end of 2019.
          <br /><br />
          Ambiance has seen many changes over the years, but one thing that has not changed is our commitment to excellent design, quality craftsmanship and customer satisfaction. We hope that you will become our next satisfied customer.What sets Ambiance apart is our commitment to curating a diverse range of design inspirations, practical tips, and expert advice. We understand that each space is as unique as the individual inhabiting it, and our goal is to empower you to turn your vision into
          a reality.
        </p>
      </div>
    </div>
    <br />
  </div>

  <div class="container">
    <div class="ttp">
      <div class="box">
        <div class="box1">
          <div>
            <h4 class="Heading">DESIGN + BUDGET + PROCESS</h4>
            <h3 class="Heading">TRUST THE PROCESS</h3>
          </div>
          <p>
            Through collaboration, exploration, and a commitment to the creative journey,
            <br />we believe that your design aspirations can become a reality. <br />
            So, as you embark on your design adventure, remember to <strong><span style="color: rgb(252, 143, 0); font-style: italic">TRUST THE PROCESS</span></strong> <br />and let Ambiance be your trusted companion along the way.
          </p>

          <p style="color: rgb(252, 143, 0)">--------------------</p>

          <a href="aboutustestimonial.php">
            <button class="button">READ OUR TESTIMONIALS</button>
          </a>
          <a href="aboutusourteam.php ">
            <button class="button" title="meet our team">OUR TEAM</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="misss">
    <div class="container">
      <div class="missvis">
        <div class="row">
          <div class="col-lg-4">
            <div class="head">
              <h1>MISSION</h1>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="quote">
              <blockquote>
                We exist to create the beautiful backdrops against which our clients experience their lives. We are honored by the trust clients impart to us to select the sofa on which emotional conversations will occur, a table on which a young artist will create many masterpieces, and a fabric which can evoke a specific memory 50 years later. Walls contain hope, joy, sadness, grief, and laughter; it is our privilege and our promise to design beautiful spaces within which to experience
                emotion and life.
              </blockquote>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="quote1">
              <blockquote>We aspire to convey the sense of passion we feel about our craft and our clients through our work each day. We hope to challenge and inspire generations of clients through design born of diversity, innovation, collaboration, laughter, and layers. Remove the ego and create design that works—and wows.</blockquote>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="head1">
              <h1>VISION</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  // Assuming $imageURL is a variable containing the dynamic image URL
  $imageURL = "https://banner2.cleanpng.com/20180604/eka/kisspng-home-appliance-consumer-electronics-logo-brand-lg-lg-tv-5b1566435019f6.9977045315281290913281.jpg";
  ?>

  <div class="partner-row">
    <div class="scrollerhead">
      <h2>OUR TRUSTED PARTNERS</h2>
      <hr />
    </div>
    <div class="image-scroller" id="imageScroller">
      <img src="<?php echo $imageURL; ?>" alt="Image 1" />
      <img src="https://images-platform.99static.com//seu9nL7y_fc1Wove9WmwGdJssgw=/244x0:1756x1512/fit-in/500x500/99designs-contests-attachments/59/59407/attachment_59407259" alt="Image 2" />
      <img src="https://img.ph.my-best.com/product_images/33981eb2429b0269bc6d915860772b08.png?ixlib=rails-4.3.1&q=70&lossless=0&w=800&h=800&fit=clip&s=70b3b9115abc1e77220d30fa97fe3ea5" alt="Image 3" />
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSG--CgUWuUqWsG6T4hdM7xIyN2Sf9k1s640w&usqp=CAU" alt="Image 4" />
      <img src="https://e7.pngegg.com/pngimages/348/55/png-clipart-manufacturing-home-appliance-indesit-co-logo-brand-others-company-text.png" alt="Image 5" />
      <img src="https://c8.alamy.com/comp/2C7393G/white-brand-logo-of-haier-smart-home-under-light-chinese-multinational-consumer-electronics-and-home-appliances-company-shoot-at-ces-asia-exhibition-2C7393G.jpg" alt="Image 6" />
      <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/57/Havells_Logo.svg/1200px-Havells_Logo.svg.png" alt="Image 7" />
      <img src="https://static.vecteezy.com/system/resources/thumbnails/003/331/141/small/hand-holding-washing-machine-icon-flat-style-free-vector.jpg" alt="Image 8" />
      <img src="https://w7.pngwing.com/pngs/259/358/png-transparent-whirlpool-corporation-benton-harbor-home-appliance-brand-logo-others-miscellaneous-company-text.png" alt="Image 9" />
      <img src="https://w7.pngwing.com/pngs/259/358/png-transparent-whirlpool-corporation-benton-harbor-home-appliance-brand-logo-others-miscellaneous-company-text.png" alt="Image 10" />
      <img src="https://vectorseek.com/wp-content/uploads/2021/01/Godrej-Logo-Vector.jpg" alt="Image 11" />
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQX_vHtO-6uDlLwzC46sOAmYab8ptWGsJnbVw&usqp=CAU" alt="Image 12" />
      <img src="https://img.freepik.com/free-vector/house-shape-logo-template_1107-29.jpg" alt="Image 13" />
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvbx1frEfpiVOZzF3fZ2RT8020cj-DA1TLbd1gp74uwF8y3AdN-gQzjGm79tfdFM5BGPY&usqp=CAU" alt="Image 14" />
      <img src="https://w7.pngwing.com/pngs/502/902/png-transparent-haval-robert-bosch-gmbh-logo-brand-the-gallery-limited-others-miscellaneous-company-text-thumbnail.png" alt="Image 15" />
      <img src="https://m.economictimes.com/thumb/msid-58060672,width-1200,height-900,resizemode-4,imgsize-76201/tata-company-voltas-eyes-videocons-home-appliances-brand-kenstar.jpg" alt="Image 16" />
      <img src="https://asset.brandfetch.io/idpnf7hVd7/idcS_uzwqG.png" alt="Image 17" />
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoZatVbHcFms92tr-SKt8mcys-WQ332wLpusqzLbW4I76uHVUEANqmbEMxMCmjN7dr0WU&usqp=CAU" alt="Image 18" />
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ6ZH_XXp10hAk4pUlan8YPGuBTvJZl8B_Wg&usqp=CAU" alt="Image 19" />
      <img src="https://images-platform.99static.com//OGDxl_Owwzbxuh-K7Wv0xoAM7KE=/115x152:895x932/fit-in/500x500/99designs-contests-attachments/76/76561/attachment_76561045" alt="Image 20" />
      <img src="https://banner2.cleanpng.com/20180604/eka/kisspng-home-appliance-consumer-electronics-logo-brand-lg-lg-tv-5b1566435019f6.9977045315281290913281.jpg" alt="Image 1" />
      <img src="https://images-platform.99static.com//seu9nL7y_fc1Wove9WmwGdJssgw=/244x0:1756x1512/fit-in/500x500/99designs-contests-attachments/59/59407/attachment_59407259" alt="Image 2" />
      <img src="https://img.ph.my-best.com/product_images/33981eb2429b0269bc6d915860772b08.png?ixlib=rails-4.3.1&q=70&lossless=0&w=800&h=800&fit=clip&s=70b3b9115abc1e77220d30fa97fe3ea5" alt="Image 3" />
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSG--CgUWuUqWsG6T4hdM7xIyN2Sf9k1s640w&usqp=CAU" alt="Image 4" />
      <img src="https://e7.pngegg.com/pngimages/348/55/png-clipart-manufacturing-home-appliance-indesit-co-logo-brand-others-company-text.png" alt="Image 5" />
      <img src="https://c8.alamy.com/comp/2C7393G/white-brand-logo-of-haier-smart-home-under-light-chinese-multinational-consumer-electronics-and-home-appliances-company-shoot-at-ces-asia-exhibition-2C7393G.jpg" alt="Image 6" />
      <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/57/Havells_Logo.svg/1200px-Havells_Logo.svg.png" alt="Image 7" />
      <img src="https://static.vecteezy.com/system/resources/thumbnails/003/331/141/small/hand-holding-washing-machine-icon-flat-style-free-vector.jpg" alt="Image 8" />
      <img src="https://w7.pngwing.com/pngs/259/358/png-transparent-whirlpool-corporation-benton-harbor-home-appliance-brand-logo-others-miscellaneous-company-text.png" alt="Image 9" />
      <img src="https://w7.pngwing.com/pngs/259/358/png-transparent-whirlpool-corporation-benton-harbor-home-appliance-brand-logo-others-miscellaneous-company-text.png" alt="Image 10" />
    </div>
  </div>



  <div class="partnership">
    <div class="suchead">
      <h1>Successes</h1>
      <hr>
      <p>
        Interior design consulting success lies in personalized, budget-conscious solutions, effective communication, and staying abreast of industry trends.
        Achieving lasting client satisfaction and building a reputation for innovation and professionalism are hallmarks of a thriving interior design consulting practice.
      </p>
    </div>

    <div class="succc">
      <div class="row">
        <div class="col-lg-6">
          <div class="yellow">
            <i class='bx bx-building-house'></i>
            <h6>PROJECTS</h6>
            <h4>100</h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="purple" style="margin-bottom: 5%;">
            <i class='bx bx-male-female'></i>
            <h6>CLIENTS</h6>
            <h4>100</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="purple">
            <i class='bx bx-group'></i>
            <h6>OUR TEAM</h6>
            <h4>100</h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="yellow">
            <i class='bx bx-trophy'></i>
            <h6>AWARDS</h6>
            <h4>100</h4>
          </div>
        </div>
      </div>
    </div>

  </div>
















  <script>
    // JavaScript for automatic image scrolling
    const imageScroller = document.getElementById("imageScroller");

    function startImageScroll() {
      // Clone the first image and append it to the end for smooth scrolling
      const firstImage = imageScroller.firstElementChild.cloneNode(true);
      imageScroller.appendChild(firstImage);

      let scrollAmount = 1;

      function scroll() {
        if (scrollAmount > imageScroller.scrollWidth - imageScroller.clientWidth) {
          // Reset scroll position to the beginning
          scrollAmount = 1;
        } else {
          scrollAmount++;
        }

        // Perform the scroll
        imageScroller.scrollLeft = scrollAmount;

        // Set the scroll speed (adjust this value as needed)
        setTimeout(scroll, 1);
      }

      // Start the scrolling animation
      scroll();
    }

    // Start automatic image scrolling when the page loads
    window.onload = startImageScroll;
  </script>

<?php
  
  include('footer.php');
?>



</body>

</html>