<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
    />
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
<style>
  /* .HH-footer h1 {
    font-weight: 600;
    margin-bottom: 20px;
  } */

  .HH-footer h4 {
    font-size: 25px;
    font-weight: bold;
  }

  .HH-footer blockquote {
    padding-right: 20px;
  }

  .HH-footer .icon i {
    font-size: 30px;
    color: #d6d6d6;
    margin-right: 30px;
    transition: all 0.5s ease;
  }

  .HH-footer .icon i:hover {
    color: #8962cf;
    transform: translateY(-5px);
  }

  .HH-footer li {
    list-style-type: none;
    font-size: 18px;
    color: #d6d6d6;
  }

  

  .HH-footer img {
    width: 100%;
    transition: all 0.5s ease;
  }

  .HH-footer .gal a:hover img {
    scale: 1.2;
  }

  @media screen and (max-width: 990px) {
    /* .HH-footer{
          align-items: center;
          justify-content: center;
           text-align: center; 
        } */

    .HH-footer blockquote {
      padding-right: 0px;
    }

    .HH-footer .gal img {
      width: 100%;
    }

    .HH-footer img {
      width: 270px;
    }

    .HH-footer h4 {
      margin-top: 20px;
    }
  }

  .icon h1{
    margin-top: 20px;
    font-size: 30px;
  }

  .icon h3{
    margin-top: 40px;
    margin-bottom: 20px;
    font-size: 20px;
  }

  .policy{
    margin-left: 40px;
  }

  .policy h1{
    font-size: 30px;
    padding-top: 20px;
  }

  .icon{
    transition: all 0.5s ease;
  }

  .quicklinks a{
    color: #d8d8d8;
    text-decoration: none;
    font-size: 18px;
    font-weight: 400;
    transition: all 0.5s ease;
  }
  .quicklinks a:hover{
    color: #8962cf;
  }

  .contactus a{
    color: #d8d8d8;
    text-decoration: none;
    font-size: 18px;
    font-weight: 400;
    transition: all 0.5s ease;
  }
  .contactus a:hover{
    color: #8962cf;
  }

  .policy a{
    color: #d8d8d8;
    text-decoration: none;
    font-size: 18px;
    font-weight: 400;
    transition: all 0.5s ease;
  }
  .policy a:hover{
    color: #8962cf;
  }


 
</style>


<body>
  <section class="HH-footer" style="
        background-color: #000000;
        color: white;
        font-family: 'Lato', sans-serif;
        padding: 60px;
        margin-top:20px;
        font-family: 'Times New Roman', Times, serif;
      ">
    <div class="container">
      <div class="row">
        <!-- Address -->
        <div class="col-lg-4">
          <img src="image/Screenshot 2024-03-26 185443.png" id="footer-immg" style="width: 380px;" alt="" />
          <!-- <h1 style="font-family: 'Times New Roman', Times, serif;">AMBIANCE</h1> -->
          <div class="icon">
            <!-- <h1>LET'S CHAT</h1> -->
            <h3>Have a Support Question?</h3>
            <a href="https://facebook.com" ><i class="bx bxl-facebook-circle"></i></a>
            <a href="https://instagram.com"><i class="bx bxl-instagram-alt"></i></a>
            <a href="https://twitter.com"><i class="bx bxl-twitter"></i></a>
            <a href="https://api.whatsapp.com/send?phone=8735949462&text=website%20Visitor"><i class="bx bxl-whatsapp"></i></a>
          </div>
        </div>

        <!-- Links  -->
        <div class="col-lg-2 col-md-4">
          <div class="quicklinks">
            <h4>Quick Links</h4>
            <hr style="
                  border: none;
                  height: 4px;
                  background: rgb(255, 255, 255);
                  width: 65px;
                  margin-top: -1%;
                " />
            <li><a href="homepage.php">HOME</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="portfolio.php">PORTFOLIO</a></li>
            <li><a href="careerpage.php">CAREER</a></li>
            <li><a href="designpakages.php">DESIGNING</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="sitemap.php">SITEMAP</a></li>
            
          </div>
        </div>
        
        <!-- Policy -->
        <div class="col-lg-4 col-md-4">
          <div class="policy">
            <h4>Legal</h4>
            <hr style="
                border: none;
                height: 4px;
                background: rgb(255, 255, 255);
                width: 50px;
                margin-top: -1%;
              " />
            <li><a href="privacypolicy.php">PRIVACY POLICY</a></li>
            <li><a href="termsandcondition.php">TERMS AND CONDITION</a></li>
          </div>
        </div>

        <!-- Help -->
        <div class="col-lg-2">
         <div class="contactus">
             <h4>Contact Us</h4>
             <hr style="
                   border: none;
                   height: 4px;
                   background: rgb(255, 255, 255);
                   width: 70px;
                   margin-top: -1%;
                 " />
             <li>
               <a href="https://maps.app.goo.gl/s6wXWmdQFqu6pxzZ8">
                  
                   <i class="bx bxs-home"></i>Address: 123 Main Street, Cityville, Country
               </a>
             </li>
             <br />
             <li><a href="tel:8735949462">
               <i class="bx bxs-phone"></i> +91 9409612056
             </a></li>
             <br />
             <li><a href="mailto:ambiance@gmail.com">
               <i class="bx bx-envelope"></i> ambiance@gmail.com
             </a></li>
         </div>
        </div>
      </div>
    </div>
  </section>
</body>


