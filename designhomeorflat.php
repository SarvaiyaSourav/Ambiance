<?php
        include('HEAD.php');
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>homeorflat</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="aboutus.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <style>
      *{
        margin: 0;
        padding: 0;

      }
      .icon-list {
        display: flex;
      }
      .images {
        height: 128px;
        width: 128px;
        aspect-ratio: 3/2;
      }
      .selectit {
        background-color: #ffffff;
        margin-left: 450px;
        display: flex;
        margin-top: 10%;

      }
      .select {
        margin-left: 50px;
      }

      .selection {
        border: 1px solid azure;
        width: 300px;
        height: 240px;
        border-radius: 50px;
        padding-top: 20px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        transition: all 0.5s ease;
      }
      .selection h1 {
        font-size: 60px;
      }

      .select a {
        text-decoration: none;
        color: #000000;
      }
      .select button {
        border: none;
      }
      .one {
        display: flex;
      }
      .two {
        margin-left: 590px;
        margin-top: 4%;
        margin-bottom: 10%;
      }
      .selection:hover {
        transform: scale(1.1); 
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
      }

      
    </style>
  </head>
  <body>
    <div class="selectit text-center">
      <div class="one">
        <div class="row">
          <div class="icon-list">
            <div class="select">
              <a href="dflat.php">
                <div class="selection">
                  <img class="images" src="image/FLATS.gif" alt="" />

                  <h1>FLATS</h1>
                </div>
              </a>
            </div>
            <div class="select">
              <a href="dvillas.php">
                <div class="selection">
                  <img class="images" src="image/house.gif" alt="" />

                  <h1>VILLAS</h1>
                </div>
              </a>
            </div>
            <div class="select">
              <a href="dhotels.php">
                <div class="selection">
                  <img class="images" src="image/hotel.gif" alt="" />

                  <h1>HOTELS</h1>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="two text-center" >
      <div class="row" >
        <div class="icon-list" >
          <div class="select" >
            <a href="doffice.php">
              <div class="selection">
                <img class="images" src="image/workplace.gif" alt="" />

                <h1>BUISNESS</h1>
              </div>
            </a>
          </div>
          <div class="select">
            <a href="dtenaments.php">
              <div class="selection">
                <img class="images" src="image/home.gif" alt="" />

                <h1>TENENTS</h1>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    
    <?php
        include('footer.php');
    ?>

  </body>
</html>
