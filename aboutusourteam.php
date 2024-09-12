<?php
  
  include('HEAD.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>our team</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="aboutus.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />

  <style>
    @font-face {
      font-family: "CustomFont";
      src: url("font/RubikGlitchPop-Regular.ttf") format("woff");
    }

    @font-face {
      font-family: "CustomFont1";
      src: url("font/ProtestStrike-Regular.ttf") format("woff");
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
    }

    .heading h1 {
      font-size: 60px;
      color: rgb(252, 143, 0);
    }

    .heading a {
      text-decoration: none;
      font-family: "CustomFont", sans-serif;
    }

    .overlay {
      position: absolute;
      top: 10.2%;
      width: 100%;
      height: 34%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
      box-sizing: border-box;
      background: rgba(214, 209, 209, 0.5);
    }

    .overlay h1 {
      margin: 0;
      font-size: 60px;
      color: #000000;
      font-family: "CustomFont1", sans-serif;
    }

    .overlay hr {
      width: 5%;
      margin-right: 0.5%;
      border: 1px solid #000000;
    }

    .overlay a {
      text-decoration: none;
      font-size: small;
      color: #000000;
      transition: all 0.5s ease;
    }

    .overlay a:hover {
      color: #000000;
    }

    .team-section {
      padding: 10%;
      text-align: center;

    }

    .team-member {
      margin-top: 15%;

    }

    .team-member-card {
      width: 400px;
      padding: 20%;
      background-color: #444;
      border-radius: 8px;
      text-align: center;
      height: 700px;
    }

    .team-member-img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 10%;
    }

    .team-member-name {
      font-size: 24px;
      color: rgb(252, 143, 0);
      margin-bottom: 5%;
    }

    .team-member-role {
      font-size: 19.2px;
      color: #fff;
      margin-bottom: 5%;
    }

    .team-member-description {
      color: #fff;
      text-align: justify;
      font-size: 20px;
      font-family: 'Times New Roman', Times, serif;
    }
  </style>
</head>

<body>



<!-- 
  <div class="heading">
    <a href="aboutus.html">
      <h1>About Us</h1>
    </a>
  </div> -->

  <div>
    <div>
      <img src="https://image.architonic.com/prj2-3/20088195/one-cu-interior-design-lab-poly-the-landscape-mansion-architonic-018-03-arcit18.jpg" width="100%" height="339px" alt="" />
    </div>
    <div class="overlay">
      <span>
        <a href="homepage.php">HOME</a>
        <span>&nbsp;&nbsp;||&nbsp;&nbsp;</span>
        <a href="aboutus.php">ABOUT US</a>
      </span>
      <hr />
      <h1>INTERIOR DESIGN TEAM MEMBERS</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="team-section">
          <div class="team-member">
            <div class="team-member-card">
              <img class="team-member-img" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcT7r-IhfNFzPufmJDtvzJYc2XSTyZ073CRWcyrufRheMz5XeVzy" alt="Team Member" />
              <div class="team-member-name">TOM CRUISE</div>
              <div class="team-member-role">LEAD DESIGNER</div>
              <div class="team-member-description">
                With a keen eye for aesthetics, Emma brings creativity and innovation to our design projects. Her passion for detail ensures every project is a visual masterpiece.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="team-section">
          <div class="team-member">
            <div class="team-member-card">
              <img class="team-member-img" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQca59lIsX6cXLNmRMle2fcCkURB4AvtkSqh-4Do1NwxEW49fNW" alt="Team Member" />
              <div class="team-member-name">LIONARDO DICAPRIO</div>
              <div class="team-member-role">PROJECT MANAGER</div>
              <div class="team-member-description">
                Alexandra excels in project management, ensuring smooth coordination between team members and clients. Her organizational skills keep projects on track and within deadlines.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="team-section">
          <div class="team-member">
            <div class="team-member-card">
              <img class="team-member-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUmN4uyB1Bw9_XQSppnQ6cRmrYvds_zsVuAxYQD5ZhJWoh3Gxs" alt="Team Member" />
              <div class="team-member-name">SANDRA BULLOCK</div>
              <div class="team-member-role">ARCHITECTURE</div>
              <div class="team-member-description">
                As a senior architect, Ryan combines technical expertise with a flair for design. His leadership and experience contribute to the successful execution of architectural projects.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="team-section">
          <div class="team-member">
            <div class="team-member-card">
              <img class="team-member-img" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT4_oabkNac86frp59gU06YbH4Bdnhn4PElfznQ0BjOLRc8mq9N" alt="Team Member" />
              <div class="team-member-name">MARGOT ROBBIE</div>
              <div class="team-member-role">INTERIOR DESIGNER</div>
              <div class="team-member-description">
                Olivia's passion lies in transforming spaces into inviting environments. Her expertise in interior design brings harmony and style to every project she undertakes.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="team-section">
          <div class="team-member">
            <div class="team-member-card">
              <img class="team-member-img" src="https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcTizmtErjwXQq8OOuyKYrZWt-u94mc8z1jhBaNi0LzmUWVROxtW_2_ZotVBTuYsLjTXh5bgrVqIgYLEg1A" alt="Team Member" />
              <div class="team-member-name">SCARLLET JHONSON</div>
              <div class="team-member-role">VICE PRESIDENT</div>
              <div class="team-member-description">
                Experienced in all project phases, Bryanne believes active listening is the key to success. She thrives in client engagement and functional programming, helping clients understand their current and future needs while maximizing program requirements and optimizing spatial footprints.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="team-section">
          <div class="team-member">
            <div class="team-member-card">
              <img class="team-member-img" src="https://cdn.britannica.com/99/254199-050-98CF4E04/Robert-Downey-JR-UK-premier-Oppenheimer-movie-July-2023.jpg" alt="Team Member" />
              <div class="team-member-name">ROBERT DOWNEY</div>
              <div class="team-member-role">PRESIDENT/SENIOR SOFTWARE DEVELOPER</div>
              <div class="team-member-description">
                As PRESIDENT and design leader, Chris focuses on design excellence and ensures design quality and continuity from conceptual inception through to construction administration and post-occupancy evaluation.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  
  include('footer.php');
?>

 

</body>

</html>