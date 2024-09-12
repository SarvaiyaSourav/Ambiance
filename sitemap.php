<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitemap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="aboutus.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Font1|Font2|Font3" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;

            text-align: center;
        }

        #nav {
            margin: 20px;
            margin-left: 20%;
            color: black;
            font-size: 18px;
        }

        #nav ul {
            list-style-type:circle;
            padding: 0;
        }

        #nav ul li {
            margin: 10px 0;
        }

        #nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            transition: all,ease,0.5s;
        }

        #nav ul li a:hover {
            color: red;
        }

        #nav ul li ul {
            margin-left: 20px;
            padding-left: 20px;
        }

        #nav ul li ul li {
            list-style:circle ;
            margin: 5px 0;
        }

        #nav ul li ul li a {
            font-size: 16px;
        }

        

        #nav ul li ul li ul {
            margin-left: 20px;
            padding-left: 20px;
            border-left: 2px solid #ccc;
        }

        #nav ul li ul li ul li a {
            font-size: 0.9em;
        }


    </style>
</head>

<body>
    <header>
        <h1>Website Sitemap</h1>
    </header>
    <nav id="nav">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li>
                <a href="aboutus.php">About Us</a>
                <ul>
                    <li><a href="aboutusourteam.php">Our Team</a></li>
                    <li><a href="aboutustestimonial.php">Our Testimonials</a></li>
                    <li><a href="aboutus.php"></a>Our Partners</li>
                </ul>
            </li>
            <li>
                <a href="portfolio.php">Portfolio</a>
                <ul>
                    <ul><a href="readmore1.php">Project 1</a>
                        <li><a href="readmore1.php">3-Room SpaceSavvy</a></li>
                        <li><a href="">Comment</a></li>
                        <li><a href="portfoliocontact.php">Contact Us</a></li>
                    </ul>
                    <ul><a href="readmore2.php">Project 2
                        </a>
                        <li><a href="readmore1.php">Chic Rustic Contrast</a></li>
                        <li><a href="">Comment</a></li>
                        <li><a href="portfoliocontact.php">Contact Us</a></li>
                    </ul>
                    <ul><a href="readmore3.php">Project 3</a>
                        <li><a href="readmore1.php">Compact Comfort</a></li>
                        <li><a href="">Comment</a></li>
                        <li><a href="portfoliocontact.php">Contact Us</a></li>
                    </ul>
                    <ul><a href="readmore4.php">Project 4</a>
                        <li><a href="readmore1.php">Ambiance Appeal</a></li>
                        <li><a href="">Comment</a></li>
                        <li><a href="portfoliocontact.php">Contact Us</a></li>
                    </ul>
                    <ul><a href="readmore5.php">Project 5</a>
                        <li><a href="readmore1.php">Playful Fusion Villa</a></li>
                        <li><a href="">Comment</a></li>
                        <li><a href="portfoliocontact.php">Contact Us</a></li>
                    </ul>
                    <ul><a href="readmore6.php">Project 6</a>
                        <li><a href="readmore1.php">Neutral Industrial Haven</a></li>
                        <li><a href="">Comment</a></li>
                        <li><a href="portfoliocontact.php">Contact Us</a></li>
                    </ul>
                    <ul><a href="readmore7.php">Project 7</a>
                        <li><a href="readmore1.php">Dynamic Workspace Hub</a></li>
                        <li><a href="">Comment</a></li>
                        <li><a href="portfoliocontact.php">Contact Us</a></li>
                    </ul>
                    <ul><a href="readmore8.php">Project 8</a>
                        <li><a href="readmore1.php">Elegant Cozy Chic</a></li>
                        <li><a href="">Comment</a></li>
                        <li><a href="portfoliocontact.php">Contact Us</a></li>
                    </ul>
                </ul>
            </li>
            <li>
                <a href="gallery.php">Gallery</a>
                <ul>

                    <li><a href="gallery.php">Kitchen</a></li>
                    <li><a href="gallery.php">Bedroom</a></li>
                    <li><a href="gallery.php">Bathroom</a></li>
                    <li><a href="gallery.php">Livingroom</a></li>
                    <li><a href="gallery.php">Wardrobe</a></li>


                </ul>
            </li>
            <li>
                <a href="designpakages.php">Designing</a>
                <ul>

                    <li><a href="dtenaments.php">Tenaments</a></li>
                    <li><a href="dflat.php">Flats</a></li>
                    <li><a href="dhotels.php">Hotels</a></li>
                    <li><a href="doffice.php">Office</a></li>
                    <li><a href="dvillas.php">Villas</a></li>


                </ul>
            </li>

            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="careerpage.php">Carrer</a></li>
            <li><a href="privacypolicy.php">Privacy Policy</a></li>
            <li><a href="termsandcondition.php">Terms and Condition</a></li>
        </ul>
    </nav>
</body>

</html>

</div>
</body>

</html>