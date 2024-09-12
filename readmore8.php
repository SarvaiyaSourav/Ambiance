<?php
        include('HEAD.php');
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Project 8 - Read More</title>
  <link rel="stylesheet" href="styles.css" />
  <!-- Include other stylesheets as needed -->
  <style>
    @font-face {
      font-family: "CustomFont";
      src: url("font/Lobster-Regular.ttf") format("woff");
    }

    body {
      font-family: "Arial", sans-serif;
      background-color: #f5f5f5;
      color: #333;
    }

    .readmore {
      max-width: 1200px;
      margin: 0 auto;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      border-radius: 10px;
    }

    .phead h1 {
      font-size: 50px;
      font-family: "CustomFont", sans-serif;
    }

    .phead h1:hover {
      cursor: default;
      transition: all 0.3s ease;
      text-shadow: 0 2px 1px #000000, -1px 3px 1px #000000, -2px 5px 1px #000000;
    }

    .project-details {
      text-align: justify;
      margin-bottom: 20px;
      font-family: "Times New Roman", Times, serif;
    }

    .project-details a {
      text-decoration: none;
      color: #007bff;
    }

    .project-details a:hover {
      transition: all 0.3s ease;
      color: #023f80;
    }

    .project-images {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .project-images img {
      border-radius: 10px;
      width: 100%;
      max-width: 48%;
      transition: transform 0.3s ease-in-out;
    }

    .project-images img:hover {
      transform: scale(1.1);
    }

    .back-link {
      margin-right: 68%;
      display: block;
      margin-top: 20px;
      text-decoration: none;
      color: #007bff;
      font-weight: bold;
      transition: color 0.3s ease-in-out;
    }

    .back-link:hover {
      color: #023f80;
    }

    .pbottomsec {
      margin-top: 2%;
      display: flex;
    }

    .pbottomsec button {
      padding: 15px 30px 15px;
      border-radius: 10px;
      color: black;
      /* background-color: rgb(77, 77, 77); */
      font-weight: bold;
      font-size: 18px;
      border: transparent;
      transition: all 0.4s ease;
      font-family: "Times New Roman", Times, serif;
      margin-left: 20%;
    }

    .pbottomsec button:hover {
      background-color: rgb(46, 46, 46);
      color: white;
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


    .comments label {
      display: block;
      margin-bottom: 8px;
      font-size: 25px;
      margin-left: 10%;
      font-family: times, "Times New Roman";
      font-weight: 700;
      transition: all 0.1s ease;
    }

    .comments input {
      width: 50%;
      padding: 15px;
      margin-bottom: 15px;
      border: 1px solid black;
      margin-left: 10%;
      transition: all 0.5s ease;
    }

    .comments textarea {
      width: 60%;
      padding: 15px;
      margin-left: 10%;
      box-sizing: border-box;
      margin-bottom: 15px;
      border: 1px solid black;
      transition: all 0.5s ease;
    }

    .btnn button {
      background-color: #000000;
      color: white;
      border: none;
      cursor: pointer;
      width: 20%;
      height: 50px;
      font-size: 20px;
      border-radius: 5px;
      margin-left: 40%;
      transition: all 0.3s ease;
      font-weight: 700;
      font-family: "Times New Roman", Times, serif;
    }

    .btnn button:hover {
      background-color: transparent;
      color: black;
      border: 1.5px solid black;
      border-radius: 5px;
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
  <div class="container">
   <div class="readmore">
     <hr />
     <div class="project-details">
       <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26151018/3-bhk-villa-interior-design-of-l-shaped-kitchen.jpg" alt="Project 1 Image 1" style="border-radius: 15px; width: 100%" />
       <div class="phead">
         <h1>Elegant Cozy Chic</h1>
       </div>
       <hr />
       <p>
         A beautiful foyer unit with textured wallpaper and a side cabinet with drawers for storage. A simple yet elegant living room with a cosy sofa and an accent wall in orange peps up the space. A TV unit designed with low lying cabinet finished in wood and white laminate has open shelves on one side to showcase your books and decor. A geometric patterned wallpaper against the TV unit complements the look. A sleek L shaped kitchen in a dual colour tone with hexagonal tiled backsplash,
         handleless base and overhead cabinets finished in high gloss laminate make it functional and pretty.
       </p>
     </div>
     <div class="project-images">
       <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26152841/small-living-room-3-bhk-flat-interior-design-india.jpg" alt="" />
       <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26153351/dining-area-3-bhk-flat-interior-design-in-india.jpg" alt="" />
       <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26152427/latest-bdroom-designs-in-3-bhk-interior-design.jpg" alt="" />
       <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26153302/bedroom-design-in-3-bhk-flat-design-in-banglore-mumbai-hyderabad.jpg" alt="Project 1 Image 3" />
       <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26152803/master-bedroom-design-in-3-bhk-interior-design.jpg" alt="Project 1 Image 3" />
       <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26153423/kids-bedroom-interior-design-for-3-bhk-flat.jpg" alt="Project 1 Image 3" />
       <img onclick="openLightbox(event)" src="https://media.designcafe.com/wp-content/uploads/2020/09/26152823/modern-bathroom-design-in-3-bhk-flat-design.jpg" alt="Project 1 Image 3" style="margin-left: 25%" />
       <!-- Add more images as needed -->
     </div>
     <div class="pbottomsec">
       <a href="portfolio.php#goto8" class="back-link">&larr; Back to Portfolio</a>
       <a href="portfoliocontact.php">
         <button>CONTACT US</button>
       </a>
     </div>
   </div>
  </div>

  <div class="comm">
    <div class="comheader text-center">
      <h1>Give Your Comments On Our Project.</h1>
    </div>

    <div id="comment-list" class="comment-list mt-4">
      <section class="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <?php
              // Include your database connection file
              include('connection.php');

              // Fetch latest 2 comments from the database
              $query = "SELECT * FROM comments ORDER BY name";
              $data = mysqli_query($conn, $query);

              // Display each comment
              while ($res = mysqli_fetch_assoc($data)) {
                echo "<div class='comment'>
                          <p class='name'>FullName: " . $res['name'] . "</p>
                          <p class='comment-content'>Comment: " . $res['comment'] . "</p>
                        </div>";
              }
              ?>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="comments">
      <form action="" method="POST">
        <div class="row">
          <div class="col-lg12">
            <div class="row mb-3">
              <div class="col-md-12">
                <label for="name" style="margin-top: 20px;">Enter Your Fullname</label>
                <input name="name" type="text" id="name" />
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-12">
                <label for="email">Your Email</label>
                <input name="email" type="text" id="email" />
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-12">
                <label for="comment">Write Comment</label>
                <textarea name="comment" id="comment" rows="4" placeholder="Enter your Message" required></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-12 btnn">
                <button name="submit" type="submit" onclick="reloadPageAndClearCookies()">COMMENT</button>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-12">
                <input name="sr" type="text" id="sr" hidden />
              </div>
            </div>
          </div>
        </div>
      </form>



    </div>
  </div>

  <?php
  include("connection.php");
  if (isset($_POST['submit'])) {
    $srno = $_POST["sr"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    $query = "INSERT INTO comments (sr,name,email,comment) 
    VALUES ('$srno','$name','$email','$comment')";
    $submit = mysqli_query($conn, $query);
    if ($submit) {
      // echo "ok inserted!!";
    } else {
      echo "NO...INSERTED";
    }
  }
  ?>

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

<script>
    function reloadPageAndClearCookies() {
      // Clear cookies
      document.cookie = 'yourCookieName=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';

      // Reload the page
      location.reload();
    }
  </script>

<?php
        include('footer.php');
      ?>

</body>

</html>