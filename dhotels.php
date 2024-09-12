<?php
include('HEAD.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HOTELS</title>

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

<!-- <body>
    <div class="stepbar">
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
    <h2>HOTEL ROOMS DESIGN...</h2>
  </div>
</div>
<div class="design1">
  <div class="design">
    <div class="row" style=" display: flex">
      <div class="col-lg-4">
        <div>
          <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1056769738/photo/3d-rendering-beautiful-luxury-bedroom-suite-in-hotel-with-tv.jpg?s=612x612&w=0&k=20&c=AYTegW4p8iERL4dbP7K73dZsJ6N69eT_IwNl6soN0Yc=" alt="" width="100%" height="100%" />
        </div>
      </div>
      <div class="col-lg-4">
        <div>
          <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1050564514/photo/3d-rendering-beautiful-luxury-bedroom-suite-in-hotel-with-tv.jpg?s=612x612&w=0&k=20&c=vb5TDikFeFij3n-eN7sVKlmXt0CjSX1aQRXnQh2M3Ls=" alt="">
        </div>
      </div>
      <div class="col-lg-4">
        <div>
          <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1050564508/photo/3d-rendering-beautiful-luxury-bedroom-suite-in-hotel-with-tv.jpg?s=612x612&w=0&k=20&c=SKRc7W-0bQ6npNxIMZnBzQf5DLx0ojPjJBqu8NwC9qc=" alt="" width="100%" height="100%" />
        </div>
      </div>
    </div>
    <br />
    <br />
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1179468253/photo/3d-rendering-beautiful-luxury-bedroom-suite-in-hotel-with-tv-and-working-table.jpg?s=612x612&w=0&k=20&c=CvMxI0JxTYRL7G-A_APJa-VQmlNYiWII9b0qJ_cr3Sc=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1179468252/photo/3d-rendering-beautiful-luxury-bedroom-suite-in-hotel-with-tv-and-working-table.jpg?s=612x612&w=0&k=20&c=0aPk8YCB2E3b4qvyGtGRDCO4UvbUu5FvGvWLOURlYA8=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1179468244/photo/3d-rendering-beautiful-luxury-bedroom-suite-in-hotel-with-tv-and-working-table.jpg?s=612x612&w=0&k=20&c=hrxKV60GoveLQ7Tr6eQN3T34c_1cJmIQTpkTwZC6hmA=" alt="" /></div>
    </div>
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1216599448/photo/3d-rendering-luxury-chinese-bedroom-suite-in-resort-hotel.jpg?s=612x612&w=0&k=20&c=5o1Nx0R5pwN6VnXCGiq8JlAwDBWB4TtsQZ3hhmTMq0Y=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1216599429/photo/3d-rendering-luxury-tropical-bedroom-suite-in-resort-hotel-and-resort.jpg?s=612x612&w=0&k=20&c=HQo2fJhnJ_ZtMu5fgOfLyVYPvRgiGVYOPBFAl7MpmXg=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1216598691/photo/3d-rendering-luxury-tropical-bedroom-suite-in-resort-hotel-and-resort.jpg?s=612x612&w=0&k=20&c=V9ZU-Bfgi1JFiyBDLcsA6y6sPN-9GHVkrxfWBk09UJ4=" alt="" /></div>
    </div>
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1346608029/photo/interior-mock-up-with-zen-bed-plant-and-decoartion-in-japanese-bedroom-3d-rendering.jpg?s=612x612&w=0&k=20&c=f2Yh3Jk8js0c3rDbpGziIrHuw25NZdeA12Tb3oohQ_4=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1346607972/photo/interior-mock-up-with-zen-bed-plant-and-decoartion-in-japanese-bedroom-3d-rendering.jpg?s=612x612&w=0&k=20&c=rFF45Ts6oLXPlbwRp0NqudR56s-K7kiFqBRt-fGg_U4=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1346607974/photo/interior-mock-up-with-zen-bed-plant-and-decoartion-in-japanese-bedroom-3d-rendering.jpg?s=612x612&w=0&k=20&c=GzA3BqHjNpgL7hZFnmQ7IpS2UTWlIX8mLt6IN3UKN2M=" alt="" /></div>
    </div>
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1503357803/photo/modern-japan-style-tiny-room.jpg?s=612x612&w=0&k=20&c=Knxw-FOBVP3t-DQ0n6v1IginWEF3k7cpoWMN6vqSWmY=" alt="" style="margin-left: 20%;"></div>
      <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1503357504/photo/modern-japan-style-tiny-room.jpg?s=612x612&w=0&k=20&c=yJEUziD49hxWJZ5BsXehkNG8e-3TDhKZqKuH4oxIoas=" alt="" style="margin-left: 20%;"></div>
    </div>
  </div>
</div>
<br />
<br />
<div class="designhead">
  <div class="container">
    <h1>HOTEL SUITS DESIGN</h1>
  </div>
</div>
<div class="design2">
  <div class="design">
    <div class="row" style=" display: flex">
      <div class="col-lg-4">
        <div>
          <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1198357643/photo/double-bed-in-african-boutique-resort.jpg?s=612x612&w=0&k=20&c=qb_ncE6IT4n3nWUCASRAuVkoj15k9Ajn-vmhO86yvxM=" alt="" width="100%" height="100%" />
        </div>
      </div>
      <div class="col-lg-4">
        <div>
          <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1208302975/photo/beautiful-room-with-garden-view.jpg?s=612x612&w=0&k=20&c=D_MWWu4yIfTPrq52BfjQQzgYlGbvurPVAZMfnDCO2U0=" alt="">
        </div>
      </div>
      <div class="col-lg-4">
        <div>
          <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1300052012/photo/double-bedroom-with-balcony.jpg?s=612x612&w=0&k=20&c=XVPLFoAKWuxKqI55lzB4YEVoQu-CGa1ZcV_kkg7Bgws=" alt="" width="100%" height="100%" />
        </div>
      </div>
    </div>
    <br />
    <br />
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1085713272/photo/beautiful-hotel-for-honeymoon-sweet.jpg?s=612x612&w=0&k=20&c=mrFWLfA3sxgpR87lAyn_PBwShaLGwQECa_ZZEaUoJ1A=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/544347714/photo/classic-style-hotel-bedroom-interior.jpg?s=612x612&w=0&k=20&c=PtOuZYDgu4t_u9CC_EbdDWUp_pmZWEhJyMteSj072F4=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/160992248/photo/sconces-and-canopy-above-bed-in-luxury-bedroom.jpg?s=612x612&w=0&k=20&c=teaDHuHrfZXecSMbZHxiO4jvaxyT_LG_ErpIen_pkLA=" alt="" /></div>
    </div>
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/903070220/photo/modern-interior-of-the-bedroom-in-the-apartment.jpg?s=612x612&w=0&k=20&c=rdNXBDSUF-7XzMY1W6Shd6cE2PoiLjmr79WgTE080XA=" alt="" style="margin-left: 20%;" /></div>
      <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/534764781/photo/hotel-bedroom.jpg?s=612x612&w=0&k=20&c=iN3TtQezN6K8wglyXZyWZarLOQHWNrGSaEYUQSFuP5A=" alt="" style="margin-left: 20%;" /></div>
    </div>
  </div>
</div>
<br />
<br />
<div class="designhead">
  <div class="container">
    <h1>LUXURY HOTEL ROOMS DESIGN</h1>
  </div>
</div>
<div class="design1">
  <div class="design">
    <div class="row" style=" display: flex">
      <div class="col-lg-4">
        <div>
          <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/961155294/photo/3d-rendering-luxury-modern-bedroom-with-wood-cabinet-and-chandelier.jpg?s=612x612&w=0&k=20&c=RbPo7-kGX-0-ncq2EshpHjs9I87y0_SCrnnBzOWnj8o=" alt="" width="100%" height="100%" />
        </div>
      </div>
      <div class="col-lg-4">
        <div>
          <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1263512542/photo/3d-rendering-luxury-bedroom-suite-in-resort-high-rise-hotel-with-working-table.jpg?s=612x612&w=0&k=20&c=fSrBDW17Df0hUmw5dSdxMK0I1yHjdQKMMuFjMDelkno=" alt="">
        </div>
      </div>
      <div class="col-lg-4">
        <div>
          <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1306511957/photo/3d-rendering-luxury-modern-bedroom-suite-tv-with-wardrobe-and-walk-in-closet-and-working-table.jpg?s=612x612&w=0&k=20&c=oc_VMajHngitARAwEOvOFKANDYjWIAmp-qDui9alTgA=" alt="" width="100%" height="100%" />
        </div>
      </div>
    </div>
    <br />
    <br />
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1097834362/photo/3d-render-of-luxury-hotel-room.jpg?s=612x612&w=0&k=20&c=pxAHducu3oOvmydK8hSASH97qmstJ_zXF4GDhalT__8=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1131331857/photo/3d-rendering-beautiful-luxury-bedroom-suite-in-hotel-with-tv.jpg?s=612x612&w=0&k=20&c=z4g9-YTzIYZS7huhEC6OmIQG1KENq1ASYZtQNa6lURw=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1155735307/photo/3d-render-modern-bedroom.jpg?s=612x612&w=0&k=20&c=Pl1Ar5pCdw4AZCsbxz8Kcw9kUzu1rQSGxV5_HODWZwQ=" alt="" /></div>
    </div>
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1077161992/photo/3d-render-modern-luxury-hotel-bedroom.jpg?s=612x612&w=0&k=20&c=ANqH7adC-VAKp1BmlGjbr5ZkrSb-0uPlLxZinEDO4MI=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1398581327/photo/3d-rendering-beautiful-luxury-bedroom-suite-in-hotel-with-tv.jpg?s=612x612&w=0&k=20&c=xJ-lSWIbU7IfEu8b_L52iym6tLiC7xzyY-sauikK9fI=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1213885014/photo/3d-rendering-beautiful-luxury-bedroom-suite-in-hotel-with-tv-and-working-table.jpg?s=612x612&w=0&k=20&c=uh5VwJIdtaAsfUIbtQtHpsIV8RiiYfYbBt2J-9uaNBc=" alt="" /></div>
    </div>
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1297440392/photo/3d-render-of-luxury-hotel-suite-room-bedroom.jpg?s=612x612&w=0&k=20&c=pNUOfmVxEKUCAewM2gn4UNXSB9CwX1cd-8Fj8yZzwug=" alt="" style="margin-left: 20%;" /></div>
      <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1269593924/photo/3d-rendering-modern-luxury-bedroom-suite-and-bathroom.jpg?s=612x612&w=0&k=20&c=ges92OLEsboE5TrJQNqyOHmwSmKxlLnNlsOQmyRqjkQ=" alt="" style="margin-left: 20%;" /></div>
    </div>
  </div>
</div>
<br />
<br />
<div class="designhead">
  <div class="container">
    <h1>HOTEL BATHROOMS</h1>
  </div>
</div>
<div class="design1">
  <div class="design">
    <div class="row" style=" display: flex">
      <div class="col-lg-4">
        <div>
          <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1084656062/photo/interior-of-a-hotel-bathroom.jpg?s=612x612&w=0&k=20&c=rZxxHZ_QxV4SZtNwi1izI1jKLckdS9Uz0LZc_M41_OE=" alt="" width="100%" height="100%" />
        </div>
      </div>
      <div class="col-lg-4">
        <div>
          <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1454303048/photo/modern-dark-luxury-minimalist-bathroom.jpg?s=612x612&w=0&k=20&c=YSmUMMxsAhgD_W6EybLOjaswbR8d6BSDjjZjfCAGfDA=" alt="">
        </div>
      </div>
      <div class="col-lg-4">
        <div>
          <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1152076563/photo/luxurious-bathroom.jpg?s=612x612&w=0&k=20&c=MQivd61YQOs2EprqgoBWIrP_Xw8qEmjhqI1xR0EjLhQ=" alt="" width="100%" height="100%" />
        </div>
      </div>
    </div>
    <br />
    <br />
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1304826235/photo/luxury-bathroom-interior-with-shower-toilet-mirror-and-yellow-towels.jpg?s=612x612&w=0&k=20&c=bUEbM3oGL_28QbeXrozy1ITjYFME42D2uOGrYh8iOkI=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1024173540/photo/concept-of-modern-decoration-design-of-bathroom-for-luxury-hotel-residential.jpg?s=612x612&w=0&k=20&c=EF0NHlr9zGpfdb7NdHbRjKJOnW7U98Etj6XpuXFydps=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1175191124/photo/clean-and-white-bathroom-with-amenities.jpg?s=612x612&w=0&k=20&c=q_Yh02aMm_OFmyMZ2jADJobgsMuZxFDlpF9AwBzk7xk=" alt="" /></div>
    </div>
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1292268646/photo/local-style-bathroom-with-blank-orange-wall-3d-render.jpg?s=612x612&w=0&k=20&c=hLRQr0rtQ2L0lh7X-SfkgXT5jcNkCt8JTm3cnB_1n1g=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1404266465/photo/modern-luxury-bathroom-interior.jpg?s=612x612&w=0&k=20&c=4ZI3-BHT5c4uxX_df_-Fpu-iMKdPAzVaBkd0oYLLT7Q=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/636956780/photo/bathroom-and-toilet-for-people-with-disabilities.jpg?s=612x612&w=0&k=20&c=S_8Aw3wDvziJxu7CUtvR56lpqj8SpwArdD4M0LhBPyw=" alt="" /></div>
    </div>
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1303185195/photo/luxury-white-marble-bathroom-interior.jpg?s=612x612&w=0&k=20&c=c63JOfEICPvTKTP0aDR_-BBhg31tXFlWzP62quUuwUM=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1339918907/photo/modern-contemporary-loft-bathroom-with-outdoor-shower-3d-render.jpg?s=612x612&w=0&k=20&c=ATvmXVKPcp5PSYvisgMDg61P8WX7sn1XKafhgnoI96s=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1074729344/photo/luxury-villa-minimalist-black-bathroom.jpg?s=612x612&w=0&k=20&c=9DUvbS7bKVNEt-xI3V0v3e8Jx_2x0pSTaI2qVl9878M=" alt="" /></div>
    </div>
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1392092286/photo/modern-bathroom-interior-design.jpg?s=612x612&w=0&k=20&c=B86G58-ag_CyXBDS-IknDTo3AF2nWWJNM0zelgJ6QAA=" alt="" style="margin-left: 20%;" /></div>
      <div class="col-lg-6"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/94391980/photo/luxury-beach-room.jpg?s=612x612&w=0&k=20&c=buvqaib8EhrNPYAQ0oeu8vE1RIRJGZcQQJlEwLy2LKE=" alt="" style="margin-left: 20%;" /></div>
    </div>
  </div>
</div>
<br />
<br />
<div class="designhead">
  <div class="container">
    <h1>RECEPTION DESIGN ...</h1>
  </div>
</div>
<div class="design1">
  <div class="design">
    <div class="row" style=" display: flex">
      <div class="col-lg-4">
        <div>
          <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/183323074/photo/lobby-reception-waiting-area.jpg?s=612x612&w=0&k=20&c=HHXykuupJsVZymQCk0kZEfEVURiyBhxaatTxdzr7Cb8=" alt="" height="100%" width="100%" />
        </div>
      </div>
      <div class="col-lg-4">
        <div>
          <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1275799442/photo/interior-of-a-hotel-lobby-with-reception-desks-with-transparent-coronavirus-plexiglass-lexan.jpg?s=612x612&w=0&k=20&c=JFvs5DIZ_G9orE7S1TpzWbbThtLF3wxGDK8LJ5DwAb8=" alt="">
        </div>
      </div>
      <div class="col-lg-4">
        <div>
          <img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1222444645/photo/reception-waiting-area-lobby-with-wall-decorate-sales-gallery-on-white-marble-floor-and-table.jpg?s=612x612&w=0&k=20&c=WbvcOPg3NuBvRO9RgsxUptFG8Q_taemZds7HNOFXdSI=" alt="" width="100%" height="100%" />
        </div>
      </div>
    </div>
    <br />
    <br />
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/583976714/photo/lobby-entrance-with-reception-desk-in-a-dental-clinic.jpg?s=612x612&w=0&k=20&c=zgYPSMEy0Kh4-_NUT-dWrZT6aXnEuGHH5zPjaHJc72E=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1396686399/photo/reception-area-of-modern-spa-with-reception-desk-potted-plants-decorative-objects-and-marble.jpg?s=612x612&w=0&k=20&c=AY7pitkD1y8W0vc9Rm5dLnsfFH4q36e-E9AMnJLnghk=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1460001647/photo/reception-area-of-modern-office-with-reception-desk-potted-plants-office-rooms-and-marble.jpg?s=612x612&w=0&k=20&c=JLQeoDxG0se9Wv6xmFtioJG8X18_L2B3TNJ_wXPft_0=" alt="" /></div>
    </div>
  </div>
  <div class="photos">
    <div class="row">
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/912014800/photo/modern-business-hall.jpg?s=612x612&w=0&k=20&c=LXnS-LDhiEOEYgpBfpJs-cR9buO4cNp4mOnnLY9fXPI=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/1280635859/photo/modern-office-lobby-interior-with-long-wooden-planks-background-and-reception-desk-with-green.jpg?s=612x612&w=0&k=20&c=94ifBlHQtPAlQcjTuC1spRn_jC_blo6kN1Xk3v1T98Q=" alt="" /></div>
      <div class="col-lg-4"><img onclick="openLightbox(event)" src="https://media.istockphoto.com/id/157429315/photo/reception-desk.jpg?s=612x612&w=0&k=20&c=FddQfMJNRB7kWg3iDL6yulpRb1rhMctwDpCcjtTehfY=" alt="" /></div>
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
      <a href="gallery.php"><img onclick="openLightbox(event)" src="https://images.squarespace-cdn.com/content/v1/5c3c4ca8365f02e708cc7c8c/1625654641385-OD443W0DV2CPHHPSA29D/3+Bedder+Artra+Living+Room+%287%29.jpg?format=750w" alt="" /></a>
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