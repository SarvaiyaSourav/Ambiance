
<?php
include('HEAD.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home page</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
      overflow-x: hidden;
    }



    @font-face {
      font-family: "CustomFont";
      src: url("font/Galada-Regular.ttf") format("woff");
    }

    @font-face {
      font-family: "CustomFont1";
      src: url("font/GreatVibes-Regular.ttf") format("woff");
    }

    @font-face{
      font-family: "CustomFont2";
      src: url("font/GreatVibes-Regular.ttf") format("woff");
    }

    @font-face{
      font-family: "CustomFont3";
      src: url("font/Merienda-VariableFont_wght.ttf") format("woff");
    }

    .overlayhome {
      position: absolute;
      width: 50.2%;
      height: 240px;
      background-color: #4d4d4d;
      top: 20%;
      left: 49.7%;
      box-shadow: rgb(38, 57, 77) 0px 80px 120px -40px;
    }

    .overlayhome h1 {
      color: white;
      padding-left: 2%;
      font-size: 150px;
      font-family: 'Times New Roman', Times, serif;
      /* text-shadow: 0 2px 1px black,  */
      /* -1px 3px 1px black,  */
      /* -2px 5px 1px black; */

    }

    .overlayhome h2 {
      padding-left: 50%;
      font-size: 40px;
      font-family: 'Times New Roman', Times, serif;
      color: white;

    }

    .midd {
      overflow: hidden;
      margin-top: 10%;
    }

    .middinner h1 {
      font-size: 48px;
      padding-left: 15%;
      padding-right: 15%;
      padding-bottom: 50px;
    }

    .middinner p {
      padding-left: 20%;
      padding-right: 20%;
      font-size: 20px;
      padding-bottom: 50px;
    }

    .middinner h2 {
      font-size: 35px;
      padding-bottom: 100px;
    }

    .middinner button {
      height: 75px;
      font-weight: 700;
      font-size: 18px;
      width: 38%;
      border-top-left-radius: 20px;
      border-bottom-right-radius: 20px;
      border: 2px solid;
      transition: all 0.5s ease;
    }

    .middinner button:hover {
      background-color: black;
      color: white;
    }

    .middinner {
      padding-top: 15%;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .midd1 {
      overflow: hidden;
      margin-top: 5%;
    }

    .middimage {
      position: relative;
      background-image: url('image/vase-decorations-indoor-studio-r (1).jpg');
      background-size: cover;
      background-position: center;
      height: 600px;
    }

    .middimage h1 {
      font-size: 60px;
      padding-left: 18%;
      padding-right: 18%;
      padding-top: 180px;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .midd1overlay {
      position: absolute;
      width: 100%;
      height: 100%;
      background: linear-gradient(to top, black, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
      top: 0;
      left: 0;
    }

    .glance {
      margin-top: 5%;
      font-family: 'Times New Roman', Times, serif;
    }

    .glance button {
      margin-top: 2%;
      height: 75px;
      font-weight: 700;
      font-size: 18px;
      width: 10%;
      border-top-left-radius: 20px;
      border-bottom-right-radius: 20px;
      border: 2px solid;
      transition: all 0.5s ease;
    }

    .glance button:hover {
      background-color: black;
      color: white;
    }

    .decorative {
      overflow: hidden;
      padding: 50px;
    }

    .decorate {
      display: flex;
    }

    .decor {
      padding: 20px;
    }

    .decorate img {
      width: 100%;
      height: 100%;
    }

    .decor p {

      padding-right: 20%;
      padding-top: 10px;
      font-weight: 600;
    }

    .decor a {
      font-size: 20px;
      text-decoration: none;
      color: black;
    }

    .decor a:hover {
      color: #0000cc;
    }

    .decorative h1 {
      font-size: 60px;
      text-align: center;
      font-weight: 800;
      font-family: 'Times New Roman', Times, serif;
    }

    .decorative h2 {
      font-size: 30px;
      text-align: center;
      font-family: 'Times New Roman', Times, serif;
    }

    .middlehead {
      margin-top: 5%;
    }

    .middlehead h1 {
      font-size: 80px;
      font-family: 'CustomFont1', sans-serif;
    }

    .middlehead cite {
      font-family: 'Times New Roman', Times, serif;
      font-weight: 800;
      font-size: 25px;
      margin-left: 50%;
    }

    .about {
      margin-top: 2%;
      padding-left: 15%;
      padding-right: 10%;
    }

    .us {
      display: flex;
    }

    .aboutcontent {

      padding-left: 30%;
      padding-top: 25%;
    }

    .aboutcontent h1 {
      font-size: 50px;
      font-family: 'Times New Roman', Times, serif;
      margin-bottom: 10%;
    }

    .aboutcontent p {
      font-size: 18px;
      text-align: justify;
      font-family: 'Times New Roman', Times, serif;
      margin-bottom: 10%;
    }

    .aboutcontent button {
      height: 55px;
      margin-top: 10%;
      font-size: 18px;
      width: 50%;
      border: 1px solid;
      transition: all 0.5s ease;
    }

    .aboutcontent button:hover {
      background-color: black;
      color: white;
    }

    .portfolio {
      padding: 10%;
    }

    .portfolio h1 {
      font-size: 70px;
      font-family: 'Times New Roman', Times, serif;
      margin-bottom: 1%;
      text-align: center;
    }

    .portfolio p {
      text-align: center;
      font-size: 20px;
      font-family: 'Times New Roman', Times, serif;
      margin-bottom: 5%;
    }

    .port {
      display: flex;
    }

    .portcontent img {
      transition: all 0.8s ease;
      border-top-left-radius: 50px;
      border-top-right-radius: 20px;
      border-bottom-right-radius: 50px;
      border-bottom-left-radius: 20px;
    }

    .portcontent img:hover {
      transform: scale(1.1);
    }

    .portcontent p {
      margin-top: 3%;
      font-size: 35px;

    }

    .portcontent a {
      cursor: default;
      text-decoration: none;
      color: black;
      font-family: 'Times New Roman', Times, serif;
    }

    .portcontent a:hover {
      text-decoration: underline;
    }

    .portfolio button {
      height: 55px;
      margin-top: 4%;
      margin-left: 40%;
      font-size: 18px;
      width: 20%;
      border: 1px solid;
      transition: all 0.5s ease;
    }

    .portfolio button:hover {
      background-color: black;
      color: white;
    }

    .connect .col-lg-12 {
      display: flex;
    }

    .bottomlink ul {
      margin-left: 43%;
      margin-top: 8%;
      display: flex;
      transform: translate(-50%, -50%);
    }


    .connectcontent {
      padding-left: 10%;
      padding-right: 10%;
      padding-top: 5%;
    }

    .contactlink li {
      list-style: none;
      margin: 0 25px;
    }

    .contactlink a {
      display: block;
      text-align: center;
      font-size: 45px;
      color: white;
      padding-left: 10%;
      width: 100%;
      height: 100%;
      transition: all 0.8s ease;
    }

    .contactlink a:hover {
      color: black;
      transform: scale(1.07);
    }

    .connectcontent h1 {
      font-size: 50px;
      color: white;
      font-family: 'Times New Roman', Times, serif;
      margin-bottom: 5%;
    }

    .connectcontent hr {
      width: 25%;
      border: 2px solid white;
    }

    .connectcontent p {
      font-size: 18px;
      text-align: justify;
      color: white;
      font-family: 'Times New Roman', Times, serif;
      margin-bottom: 5%;
    }

    .connectcontent button {
      height: 55px;
      margin-top: 5%;
      font-size: 18px;
      width: 40%;
      margin-left: 30%;
      color: white;
      font-weight: 700;
      background-color: transparent;
      border: 1px solid white;
      transition: all 0.5s ease;
    }

    .connectcontent button:hover {
      background-color: black;
      /* color:  #ff8000; */
      color: white;
      border: 1px solid black;
    }

    .bottomlink h3 {
      text-align: center;
      margin-top: 2%;
      font-size: 20px;
      color: white;
      font-family: 'Times New Roman', Times, serif;
      margin-bottom: 5%;
    }

    .bottomlink hr {
      margin-top: 8%;
      width: 75%;
      margin-left: 10%;
      border: 1px solid white;
    }

    .bottomlink h2 {
      text-align: center;
      margin-top: 2%;
      font-size: 35px;
      text-decoration: underline;
      color: white;
      font-family: 'Times New Roman', Times, serif;
      margin-bottom: 5%;
    }

    .bottomsec {
      text-align: center;
      margin-left: 20%;
    }

    .bottomsec p {
      font-size: 12px;
    }

    .bottomsec a {
      text-decoration: underline;
      color: white;
      font-family: 'Times New Roman', Times, serif;
    }

    .qoute {
      margin-top: 5%;
      background-color: #ffe6cc;
      height: 300px;
      color: #a6a6a6;
    }

    .qoute h1 {
      text-align: center;
      padding-top: 1%;
      font-size: 30px;
      
      font-family: 'Times New Roman', Times, serif;
      margin-bottom: 1%;
    }
    .qoute p {
      text-align: justify;
      padding-left: 20%;
      padding-right: 20%;
      
    }

    .qoute span{
      font-family: 'CustomFont2',sans-serif;
    }

    .qoute h2{
      text-align: center;
      font-family: 'CustomFont2',sans-serif;
      font-size: 70px;
      font-weight: 500;

      margin-bottom: 1%;
    }
  </style>
</head>

<body>
  <div class="homehead">
    <img src="image/1000_F_452768315_mU04ZBosq14q2ON-transformed (1).jpeg" alt="" height="900px" width="100%">
    <div class="overlayhome">
      <h1>AMBIANCE</h1>
      <h2>Trust The Process</h2>
    </div>

    <div class="midd">
      <div class="row">
        <div class="col-lg-6">
          <div class="middinner text-center">
            <h1>Designing Timeless Spaces, Tailored To You.</h1>
            <p>"Ambiance Interior Design, acclaimed for excellence, serves clients nationwide with bespoke residential and commercial transformations."</p>

            <h2>Experience • Attentiveness • Versatility</h2>
            <a href="contact.php">
              <button>WANNA BE OUR CLIENT</button>
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img style="overflow: hidden;" src="image/324A4358 (1).jpg" alt="" height="800px" width="100%">
        </div>
      </div>
    </div>

    <div class="midd1 text-center">
      <div class="row">
        <div class="middimage">
          <div class="col-lg-12">
            <div class="midd1overlay"></div>
            <div class="middh">
              <h1>"Elevating Spaces, Enriching Lives: Experience the Essence of Ambiance."</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="glance text-center">
      <h1>
        A Glance At Some Of Our Work
      </h1>
      <span>
        <a href="portfolio.php">
          <button>
            OUR PORTFOLIO
          </button></a>
        &nbsp; &nbsp; &nbsp;
        <a href="gallery.php">
          <button>
            OUR GALLERY
          </button>
        </a>
      </span>
    </div>

    <div class="decorative">
      <h1>The Prettiest Room Decor Ideas</h1>
      <h2>HOP TO IT IN STYLE!</h2>
      <div class="row">
        <div class="decorate">
          <div class="col-lg-3">
            <div class="decor">
              <a href="gallery.php">
                <img src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/da4f80f3-8b78-4354-a175-8eb45b5229a3/Swiss+Blk+356b+Ubi+Ave+3+-+Kerbe-0242-min.jpg?format=1000w" alt="">
              </a>
              <a href="gallery.php">
                <p>The heart of home, where memories simmer.</p>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="decor">
              <a href="gallery.php">
                <img src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/337d3741-8d16-406e-a9a2-d4968fc5db4d/Swiss+Blk+356b+Ubi+Ave+3+-+Kerbe-0146-min.jpg?format=1000w" alt="">
              </a>
              <a href="gallery.php">
                <p>Sanctuary for rest, dreams, and peace.</p>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="decor">
              <a href="gallery.php">
                <img src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/9a27f6c0-2c76-4e9c-b5e8-bf4ceab038c0/413C+Northshore+Drive%2C+4Room+HDB+BTO+Toilet+5.jpg?format=750w" alt="">
              </a>
              <a href="gallery.php">
                <p>Refreshing, cleansing, private oasis of comfort.</p>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="decor">
              <a href="gallery.php">
                <img src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/b0818196-18a8-424e-90ce-aa15b20fbf24/Grandeur+Park%2C+2+Bedder+Condominium+Study+3.jpg?format=1000w" alt="">
              </a>
              <a href="gallery.php">
                <p>Organized, stylish, storage solution for clothes.</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="middlehead text-center">
      <h1>“Love of beauty is taste, Creation of beauty is art.”</h1>
      <cite>-Ambiance</cite>
    </div>

    <div class="about">
      <div class="row">
        <div class="us">
          <div class="col-lg-6">
            <img src="image/photo-1618220179428-22790b461013 (1).jpg" alt="" height="100%" width="100%">
          </div>
          <div class="col-lg-6">
            <div class="aboutcontent">
              <h1>About US</h1>
              <p>"Welcome to Ambiance, where design meets sophistication. With a passion for creating timeless spaces, we tailor each project to reflect your unique style and vision. Our team of experts is dedicated to delivering excellence, transforming residential and commercial spaces nationwide. Experience the essence of Ambiance as we elevate environments and enrich lives through innovative design solutions. Trust us to bring your dream space to life."</p>
              <p>
                At Ambiance, we prioritize attention to detail, ensuring every aspect of your project is meticulously crafted to perfection. With a focus on versatility, we adapt to your needs, whether it's a cozy home or a dynamic workplace. Our commitment to excellence extends beyond aesthetics to functionality, creating spaces that enhance your daily life. Let us inspire you with our creative solutions and unparalleled dedication to quality.
              </p>
              <p>
                With a team of passionate designers and craftsmen, we bring your vision to life, exceeding expectations at every turn. From concept to completion, we collaborate closely with you, ensuring your satisfaction every step of the way. Experience the joy of living in spaces that inspire and rejuvenate, curated by Ambiance.
              </p>

              <a href="aboutus.php">
                <button>
                  READ MORE
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio">
      <h1>PORTFOLIO</h1>
      <p>Discover our portfolio showcasing exquisite designs crafted to perfection. Experience the epitome of aesthetic brilliance.</p>
      <div class="row">
        <div class="port">
          <div class="col-lg-6">
            <div style="padding-right: 5%;" class="portcontent text-center">
              <a href="readmore2.php">
                <img src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/91bb6039-0508-4447-954c-f7e653501dcc/157+Yung+Loh+Rd+living+room1-min.jpg?format=1000w" alt="" height="100%" width="100%">
              </a>
              <a href="readmore2.php">
                <p>
                  CHIC RUSTIC CONTRAST
                </p>
              </a>
            </div>
          </div>
          <div class="col-lg-6">
            <div style="padding-left: 5%;" class="portcontent text-center">
              <a href="readmore3.php">
                <img src="https://www.homelane.com/blog/wp-content/uploads/2024/02/FILM-5.00_02_46_17.Still024-768x432.jpg" alt="" height="484px" width="100%">
              </a>
              <a href="readmore2.php">
                <p>
                  COMPACT COMFORT
                </p>
              </a>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <div class="row">
        <div class="port">
          <div class="col-lg-6">
            <div style="padding-right: 5%;" class="portcontent text-center">
              <a href="readmore7.php">
                <img src="https://cdn.decorilla.com/images/960/re_4672_56e86b7c8ae9c6.75274113/Online-Business-Office-Design-online-interior-designers-2.jpg?cv=1" alt="" height="434px" width="100%">
              </a>
              <a href="readmore7.php">
                <p>
                  DYNAMIC WORKSPACE HUB
                </p>
              </a>
            </div>
          </div>
          <div class="col-lg-6">
            <div style="padding-left: 5%;" class="portcontent text-center">
              <a href="readmore8.php">
                <img src="https://media.designcafe.com/wp-content/uploads/2020/09/26151018/3-bhk-villa-interior-design-of-l-shaped-kitchen.jpg" alt="" height="100%" width="100%">
              </a>
              <a href="readmore8.php">
                <p>
                  ELEGANY COZY CHIC
                </p>
              </a>
            </div>
          </div>
        </div>
      </div>

      <a href="portfolio.php">
        <button>
          LOAD MORE
        </button>
      </a>
    </div>


    <div class="connect">
      <div class="row">
        <div style="background-color: #8b705b;" class="col-lg-12">
          <img src="image/82044638_2545648002370137_224383 (1).jpg" alt="" height="850px" width="50%">
          <div class="connectcontent">
            <h1>CONTACT US
              <hr>
            </h1>

            <p>"Step into a world of unparalleled ambiance on our website, where every click unveils a new experience. Immerse yourself in a digital haven designed to evoke tranquility and inspiration. With carefully curated visuals and seamless navigation, explore our virtual sanctuary crafted to transport you to realms of serenity. Let the soothing colors and captivating design elements create an atmosphere of relaxation and wonder.</p>
            <a href="contact.php">
              <button>
                CONTACT NOW
              </button>
            </a>

            <div class="coonectlinks">
              <div class="bottomlink">
                <hr>
                <h3>OR</h3>
                <h2>REACH US AT</h2>
                <div class="contactlink">
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

            <div class="bottomsec">
              <p>FOR MORE DETAILS YOU CAN MAIL US ON <a href="mailto:ambiance@gmail.com">Ambiance@gmail.com</a> </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="qoute text-center">
      <h1>WE APPRECIATE YOUR VISIT TO <span>Ambiance</span></h1>
      <p>"In the quiet of the night, amidst the soft glow of flickering candles and the gentle rustle of leaves outside, one can find solace in the enchanting ambiance, where the soul finds its melody and the heart its tranquility.

        We extend our heartfelt gratitude for visiting our serene corner of the internet. Your presence adds to the harmony of our digital space.
        We hope you found inspiration in the tranquil atmosphere we aim to cultivate. Feel free to linger a while longer and immerse yourself in the calming ambiance we offer.
        Thank you once again for gracing us with your presence. Until we meet again, may peace and tranquility accompany your journey.
      </p>
      
      <h2>-Ambiance</h2>
    </div>
  </div>



  <?php
  include('footer.php');
  ?>
</body>

</html>