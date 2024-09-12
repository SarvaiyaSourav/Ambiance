<?php
  include('HEAD.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>testimonials</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="aboutus.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />

  <style>
    @font-face {
      font-family: "CustomFont";
      src: url("font/RubikGlitchPop-Regular.ttf") format("woff");
    }

    

    

    .container {
      position: relative;
      margin-left: 22%;
      margin-top: 1%;
    }

    .overlay {
      position: absolute;
      top: 0;
      width: 30%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
      box-sizing: border-box;
    }

    .overlay h2 {
      margin: 0;
      color: #fff;
    }

    .overlay hr {
      width: 30%;
      margin: 20px auto;
      border: 1px solid #ffffff;
      /* Set the border color to dark (in this case, #333) */
    }

    .image {
      width: 80%;
      height: auto;
    }

    .overlay a {
      text-decoration: none;
      font-size: small;
      color: #ffffff;
    }

    .five {
      width: 60%;
      padding-top: 50px;
      text-align: center;
      background-color: #333;
      /* width: 25%; */
      padding-bottom: 90px;
      padding-right: 10px;
    }

    .five h3 {
      text-align: center;
      color: rgb(252, 143, 0);
      margin-top: 10%;
    }

    .five hr {
      color: #ffffff;
      margin: 10%;
    }

    .five blockquote {
      text-align: justify;
      margin-top: 15%;
      color: #ffffff;
      padding-left: 10%;
      padding-right: 10%;
    }

    .five cite {
      color: #ffffff;
      float: right;
      margin-bottom: 20%;
    }

    .col-lg-10 {
      background-color: #333;
      text-align: center;
      margin-top: 8%;
      margin-right: 20%;
    }

    .col-lg-10 h1 {
      color: rgb(255, 255, 255);
      margin-top: 5%;
    }

    .col-lg-10 hr {
      color: #ffffff;
      margin-left: 45%;
      margin-right: 45%;
    }

    .col-lg-10 blockquote {
      color: #ffffff;
      padding-right: 10%;
      padding-left: 10%;
      margin-left: 10%;
      margin-right: 10%;
      border-left: #ffffff 1px solid;
      border-right: #ffffff 1px solid;
      margin-top: 2%;
    }

    .col-lg-10 cite {
      color: rgb(252, 143, 0);
    }

    .col-lg-10 a {
      text-decoration: none;
      color: rgb(252, 143, 0);
    }

    .am {
      float: right;
      margin-right: 10%;
      margin-top: 2%;
    }

    #container1{
      margin-left: 23%;
      width: 100%;
    }

    #container2{
      margin-left: 22%;
    }

    #container3{
      margin-left: 22%;
    }

    #container4{
      margin-left: 22%;
    }

    #container5{
      margin-left: 22.2%;
      width:100%;
    }
  </style>
</head>

<body>



 


  <div class="container" id="container1">
    <img class="image" src="image/pexels-vika-glitter-1648776.jpg" alt="Your Image" />
    <div class="overlay">
      <hr>
      <h2>TESTIMONIAL</h2>
      <span>
        <a href="homepage.php">HOME</a>
        <span>&nbsp;&nbsp;||&nbsp;&nbsp;</span>
        <a href="aboutus.php">ABOUT US</a>
      </span>
      <hr style="border: 1px dashed white;">
    </div>
  </div>

  <br> <br>

  <div class="container" id="container2">
    <div class="row">

      <div class="col-lg-7">
        <img style="height: 100%; width: 100%;" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/da4f80f3-8b78-4354-a175-8eb45b5229a3/Swiss+Blk+356b+Ubi+Ave+3+-+Kerbe-0242-min.jpg?format=1000w" alt="">
      </div>


      <div class="col-lg-5">
        <div class="five">
          <h3>
            NOT A ROOM LIKE IT
          </h3>
          <hr>
          <blockquote>
            AMBIANCE. possesses an incredible talent for understanding the unique needs and preferences of their clients.
            They took the time to listen to my ideas, lifestyle, and aesthetic preferences, translating them into a stunning and functional design that exceeded my expectations.
          </blockquote>
          <cite>-CHERYL PECK</cite>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="container" id="container3">
   <div class="dany">
     <div class="row">
    
       <div class="col-lg-7">
         <img style="height: 100%; width: 100%;" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/337d3741-8d16-406e-a9a2-d4968fc5db4d/Swiss+Blk+356b+Ubi+Ave+3+-+Kerbe-0146-min.jpg?format=1000wz" alt="">
       </div>
    
    
       <div class="col-lg-5">
         <div class="five">
           <h3>
             LIVING THE DREAM
           </h3>
           <hr>
           <blockquote>
             What truly sets AMBIANCE apart is their attention to detail.
             Every element of the design, from the color palette to the furniture selection, was carefully curated to create a harmonious and inviting atmosphere. Their keen eye for balance and proportion resulted in a space that not only looks beautiful but also feels incredibly comfortable and functional.
           </blockquote>
           <cite>-DANY JAMES</cite>
         </div>
       </div>
     </div>
   </div>
  </div>
  <br>
  <div class="container" id="container4">
    <div class="row">

      <div class="col-lg-7">
        <img style="height: 100%; width: 100%;" src="https://media.designcafe.com/wp-content/uploads/2021/04/06183502/living-room-design-with-yellow-sofa-in-1bhk-house-design.jpg" alt="">
      </div>


      <div class="col-lg-5">
        <div class="five">
          <h3>
            PROFESSIONAL IN ACTION
          </h3>
          <hr>
          <blockquote>
            Throughout the project, AMBIANCE demonstrated a high level of professionalism. They seamlessly coordinated with contractors and vendors, ensuring the project stayed on track and within budget, with clear and transparent communication.
            Thanks to the creative vision and expertise of AMBIANCE, I am now living in a home that reflects my personality and style.
          </blockquote>
          <cite>-JENIL SAR</cite>
        </div>
      </div>
    </div>
  </div>

  <div class="container" id="container5">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <h1>
          THANK YOU
        </h1>
        <hr>
        <cite>DEAR <a href="aboutustestimonial.html">TESTIMONIALS</a></cite>
        <blockquote>
          I hope this message finds you well. I wanted to take a moment to express my deepest gratitude for the incredible testimonial you provided.
          Your kind words have truly touched me, and I feel privileged to have had the opportunity to work with your lovely places.
        </blockquote>
        <cite class="am"><a href="firstpage.html">
            <h3>-AMBIANCE.</h3>
          </a></cite>
      </div>
      <div class="col-lg-1"></div>
    </div>
  </div>

  <?php
  include('footer.php');
?>
  <!--  -->
 

</body>

</html>