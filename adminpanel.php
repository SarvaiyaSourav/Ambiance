<?php
        session_start();
        if (!isset ($_SESSION["loggedin"]))
        {
            header("Location: login.php");
            exit;
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }







        #menu {

            position: fixed;
            top: 0;
            left: 0;
            width: 350px;
            height: 100%;
            background-color: #d9d9d9;
            padding-top: 40px;
            background-color: black;
        }

        #menu a {
            display: block;
            padding: 15px 50px;
            color: white;
            text-decoration: none;
            font-size: 25px;
            transition: ease all 0.3s;
        }

        #menu a:hover {
            color: #8962cf;
        }

        #menu h1 {
            color: white;
            padding-left: 20px;
            font-size: 50px;
            padding-bottom: 30px;
        }

        #menu hr {
            border: 1.5px solid white;
        }

        .adminhead {
            background-color: #808080;
            color: black;
            margin-left: 35%;
            text-align: end;
            width: 65%;
            height: 100px;
            background: linear-gradient(to left, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3), rgba(0.2, 0.2, 0.2, 0));
        }

        .adminhead h1 {
            padding-right: 50px;
            font-size: 50px;
            padding-top: 30px;
        }

        .adminsection{
            margin-top: 5%;
        }
        .admincon{
            padding: 10px;
            display: flex;
        }

        .con{
            color: white;
            width: 450px;
            padding: 5px;
            border-radius: 20px;
            background-color: black;

        }

        .con h1{
            color: white;
            font-size: 40px;
            padding-bottom: 10px;
            padding-top: 20px;
            padding-left: 10px;
        }
        
        .content table{
            padding-top: 40px;
            padding-left: 20px;
            padding-bottom: 30px;
        }

        .content td{
            padding-bottom: 20px;
            padding-left: 20px;
            font-size: 20px;
        }

        .content span{
            font-weight: 700;
            font-size: 20px;
        }
        .con hr{
            width: 85%;
            margin-left: 10px;
        }

        .homepage{
            margin-top: 2%;
            margin-left: 20%;
        }

        .homepage a{
            color: blue;
            text-decoration: none;
            font-size: 30px;
        }

        .homepage a:hover{
            color: black;
            text-decoration: underline;
        }
        

        
    </style>
</head>

<body>

    <div id="menu">
        <h1>AMBIANCE</h1>
        <hr>
        <a href="adminpanel.php">DASHBOARD</a>
        <a href="contactadminp.php">CONTACT</a>
        <a href="portfoliocontactadmin.php">INQUIRY</a>
        <a href="registeradminp.php">REGISTER</a>
        <a href="careeradmin.php">CAREER</a>
        <a href="careerinterview.php">INTERVIEW</a>
        <a href="careerstaff.php">STAFF</a>
        <a href="careerrejected.php">REJECTED</a>
        <a href="commentadmin.php">COMMENT</a>
        <a href="adminuser.php">USER</a>
        <a href="adminlogout.php">LOGOUT</a>
    </div>

    <div class="adminhead">
        <h1>ADMIN PANEL</h1>
    </div>

    


    <div class="adminsection">
<!-- 1 -->
        <div class="row" style="margin-left: 20%; margin-right: 2%; ">
            <div class="admincon">
                <div class="col-lg-4">
                    <div class="con">
                        <h1>USER REGISTER</h1>
                        <hr>
                        <div class="content">
                            <table>
                                <tr>
                                    <td><span>REGISTERED USER'S:</span></td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td><span>TOTAL USER'S:</span></td>
                                    <td>70</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="con" style="margin-left: 10%;">
                        <h1>LOGGED USER'S</h1>
                        <hr>
                        <div class="content">
                            <table>
                                <tr>
                                    <td><span>USER LOGGED IN:</span></td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <td><span>TOTAL LOGIN'S:</span></td>
                                    <td>60</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="con" style="margin-left: 20%;">
                        <h1>INQUIRIES</h1>
                        <hr>
                        <div class="content">
                            <table>
                                <tr>
                                    <td><span>PROJECT INQUIRIES:</span></td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td><span>TOTAL INQUIRIES:</span></td>
                                    <td>70</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- 2 -->
        <div class="row" style="margin-left: 20%; margin-right: 2%; margin-top: 2%; ">
            <div class="admincon">
                <div class="col-lg-4">
                    <div class="con">
                        <h1>PROJECT'S</h1>
                        <hr>
                        <div class="content">
                            <table>
                                <tr>
                                    <td><span>PENDING PROJECT'S:</span></td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td><span>TOTAL PROJECT'S:</span></td>
                                    <td>70</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="con" style="margin-left: 10%;">
                        <h1>USER CONTACTED</h1>
                        <hr>
                        <div class="content">
                            <table>
                                <tr>
                                    <td><span>PROJECT CONTACTS:</span></td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <td><span>TOTAL CONTACT:</span></td>
                                    <td>60</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="con" style="margin-left: 20%;">
                        <h1>CONTACTS</h1>
                        <hr>
                        <div class="content">
                            <table>
                                <tr>
                                    <td><span>USER'S CONTACT'S:</span></td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td><span>TOTAL CONTACT'S:</span></td>
                                    <td>70</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- 3 -->
        <div class="row" style="margin-left: 20%; margin-right: 2%; margin-top: 2%; ">
            <div class="admincon">
                <div class="col-lg-4">
                    <div class="con">
                        <h1>COMMENTS</h1>
                        <hr>
                        <div class="content">
                            <table>
                                <tr>
                                    <td><span>DISPLAYED COMMENTS:</span></td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td><span>TOTAL COMMENTS:</span></td>
                                    <td>70</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="con" style="margin-left: 10%;">
                        <h1>STAFF</h1>
                        <hr>
                        <div class="content">
                            <table>
                                <tr>
                                    <td><span>MALE:</span></td>
                                    <td>40</td>
                                </tr>
                                <tr>
                                    <td><span>FEMALE'S:</span></td>
                                    <td>20</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="con" style="margin-left: 20%;">
                        <h1>INTERVIEW'S</h1>
                        <hr>
                        <div class="content">
                            <table>
                                <tr>
                                    <td><span>PENDING:</span></td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td><span>REJECTED:</span></td>
                                    <td>70</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="homepage">
        <a href="homepage.php">
        <span>&larr;</span>HOMEPAGE
        </a>
    </div>




</body>

</html>