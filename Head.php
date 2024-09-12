<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<style>
  @font-face {
    font-family: "CustomFont7";
    src: url("font/Kings-Regular.ttf") format("woff");
  }

  * {
    margin: 0;
    padding: 0;
  }

  nav {
    height: 100px;
    width: 100%;
    background-color: black;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    /* background-color: rgb(245, 245, 255); */
  }

  .navbar ul {
    display: inline;
    list-style: none;
    font-size: 18px;
    float: right;
    margin-right: 18px;
    text-align: center;
    margin-top: 1%;
    /* line-height: 100px; */
  }

  .navbar li {
    display: inline-block;
    /* padding: 10px 20px; */
    position: relative;
    /* line-height: 100px; */

  }

  .navbar li a {
    text-decoration: none;
    color: white;
    transition: all 0.5s ease;
    cursor: pointer;
    padding: 10px 20px;
    transition: all 0.5s ease;

  }


  .navbar ul li a:hover {
    color: #8962cf;
  }

  .navbar ul li a:active {
    background-color: #ddd;
  }

  .navbar nav .menu i {
    font-size: 20px;
    cursor: pointer;
    float: right;
    padding: 15px;
  }

  .navbar #click {
    display: none;
  }

  @media screen and (max-width: 1150px) {
    .navbar ul {
      position: fixed;
      top: 13.55%;
      left: -100%;
      background-color: rgb(45, 45, 56);
      height: 100vh;
      width: 25%;
      text-align: center;
      transition: all 0.5s ease;
    }

    .navbar ul li {
      display: block;
    }

    .navbar #click:checked~ul {
      left: 0%;
    }
  }

  @media screen and (min-width: 1150px) {
    .navbar .menu i {
      display: none;
    }
  }

  .navbar .dropbtn {
    background-color: black;
    color: white;
    padding: 10px 20px;
    font-size: 18px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    border: none;
  }

  /* The container <div> - needed to position the dropdown content */
  .navbar .dropdown {
    position: relative;
    display: inline-block;
    transition: all 0.5s ease;
  }

  /* Dropdown Content (Hidden by Default) */
  .navbar .dropdown-content {
    display: none;
    position: absolute;
    background-color: #2b2e31;
    width: 200px;
    /* box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2); */
    z-index: 1;
    /* margin-top: 27px; */
  }

  /* Links inside the dropdown */
  .navbar .dropdown-content a {
    color: white;
    padding: 15px 5px;
    text-decoration: none;
    display: block;

  }

  /* Change color of dropdown links on hover */
  .navbar .dropdown-content a:hover {
    color: #8962cf;

  }

  /* Show the dropdown menu on hover */
  .navbar .dropdown:hover .dropdown-content {
    display: block;
  }

  /* Change the background color of the dropdown button when the dropdown content is shown */
  .navbar .dropdown:hover .dropbtn {
    color: #8962cf;
  }

  .navbar .head-img {
    width: 250px;
    /* margin-top: 20px; */
    margin-left: 20px;
    /* left: -50px; */
    mix-blend-mode: darken;
  }


  .navbar .donate {
    border-radius: 30px;
    padding: 13px 11px;
    color: #E36955;
    background-color: transparent;
    border: 2px solid #E36955;
  }

  .navbar .donate:hover {
    color: #8962cf;
    text-decoration: none;
    background-color: none;
  }

  .navbar h1 {
    margin-left: 2%;
    color: white;
    font-size: 70px;
    font-weight: 500;
    font-family: 'Times New Roman', Times, serif;
    transition: all 0.5s ease;
  }

  .navbar h1:hover {
    color: #8962cf;
  }

  .navi {
    position: sticky;
    top: 0;
    z-index: 100;
  }

  @media screen and (max-width: 1500px) {
    .navbar ul {
      position: fixed;
      top: 10%;
      right: -100%;
      background-color: #2b2e31;
      height: 100vh;
      width: 30%;
      text-align: left;
      transition: all 0.5s ease;
    }

    .navbar ul li {
      display: block;
      padding: 10px 5px;
    }

    .navbar #click:checked~ul {
      right: -5%;
    }
  }

  @media screen and (max-width: 830px) {
    .navbar ul{
      width: 35%;
    }
  }

  @media screen and (max-width: 690px) {
    .navbar ul{
      width: 45%;
    }
  }

  @media screen and (max-width: 580px) {
    .navbar ul{
      width: 50%;
    }
  }

  @media screen and (max-width: 490px) {
    .navbar ul{
      width: 60%;
    }
  }

  @media screen and (max-width: 380px) {
    .navbar ul{
      width: 70%;
    }
  }
  
  @media screen and (min-width: 1150px) {
    .navbar .menu img {
      display: none;
    }
  }
</style>

<body>
  <div class="navi">
    <nav class="navbar">
      <a style="text-decoration: none;" href="homepage.php">
        <h1>AMBIANCE</h1>
      </a>
      <input type="checkbox" id="click" />
      <label for="click" class="menu">
        <img src="image/menu-header.png" alt="">
      </label>
      <ul>
        <li><a href="homepage.php">HOME</a></li>
        <li><a href="aboutus.php">ABOUT US</a>
        <li></li>

        <!-- <li><a href="">Collaboration</a></li> -->
        <li><a href="portfolio.php">PORTFOLIO</a></li>
        <!-- <li><a href="">Location</a></li> -->
        <!-- <li><a href="">Donation</a></li> -->
        <li><a href="gallery.php">GALLERY</a></li>
        <li><a href="designpakages.php">DESIGNING</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
        <li>
          <div class="dropdown">
            <button class="dropbtn">EXPLORE MORE</button>
            <div class="dropdown-content">
              <a href="login.php">LOGIN</a>
              <a href="register.php">REGISTER</a>
              <a href="careerpage.php">CAREER</a>
            </div>
          </div>

        </li>

      </ul>
    </nav>
  </div>