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

        .adminsection {
            margin-top: 5%;
            display: flex;
        }

        .admincon {
            padding: 10px;
            display: flex;
        }

        .con {
            color: white;
            width: 450px;
            padding: 5px;
            border-radius: 20px;
            background-color: black;

        }

        .con h1 {
            color: white;
            font-size: 40px;
            padding-bottom: 10px;
            padding-top: 20px;
            padding-left: 10px;
        }

        .content table {
            padding-top: 40px;
            padding-left: 20px;
            padding-bottom: 30px;
        }

        .content td {
            padding-bottom: 20px;
            padding-left: 20px;
            font-size: 20px;
        }

        .content span {
            font-weight: 700;
            font-size: 20px;
        }

        .con hr {
            width: 85%;
            margin-left: 10px;
        }

        .inquiry {
            margin-left: 24%;
            width: 70%;
            margin-top: 5%;
        }

        .inquiry h2 {
            background-color: black;
            text-align: center;
            color: white;
            font-size: 50px;
            padding-bottom: 10px;
        }

        .inquiry table {
            margin-top: 2%;
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
        }

        .inquiry th {
            background-color: black;
            color: white;
            font-size: 28px;
            text-align: start;
            padding-top: 15px;
            padding-left: 10px;
        }

        .inquiry tr {
            text-align: start;
            font-size: 18px;
            padding-left: 10px;
            background-color: #808080;
            /* padding: 50px; */
        }

        .inquiry tr:nth-child(even) {
            background-color: #e6e6e6;
        }

        .inquiry td {
            padding-left: 10px;
            font-size: 18px;
            padding: 10px;
        }

        .inquiry button {
            background-color: #333333;
            width: 60%;
            text-align: center;
            color: white;
            height: 40px;
            font-size: 20px;
            font-weight: 800;
            font-family: 'Times New Roman', Times, serif;
            border-radius: 10px;
        }

        .inquiry button:hover {
            background-color: black;
            border: 1px solid black;
            color: white;
        }

        .adminsearch{
            margin-left: 80%;
            margin-top: 2%;
        }

        .adminsearch input {
            width: 200px;
            height: 40px;
            border-radius: 10px;
            border: 1px solid black;
            padding-left: 10px;
        }

        .adminsearch button {
            background-color: #333333;
            width: 100px;
            text-align: center;
            color: white;
            height: 40px;
            font-size: 20px;
            font-weight: 800;
            font-family: 'Times New Roman', Times, serif;
            border-radius: 10px;
        }
        .adminsearch button:hover {
            background-color: black;
            border: 1px solid black;
            color: white;
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
        <h1>INQUIRY PANEL</h1>
    </div>

    <div class="adminsearch">
        <form method="post">
            <input type="text" name="search" placeholder="Search">
            <button class="adminsearchbtn">Search</button>
        </form>
    </div>

    <div class="adminsection">
        <div class="row" style="margin-left: 20%; margin-right: 2%; margin-top: 2%; ">
            <div class="admincon">

                <div class="col-lg-6">
                    <div class="con" style="margin-left: 40%;">
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
                <div class="col-lg-6">
                    <div class="con" style="margin-left: 80%;">
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
            </div>
        </div>
    </div>

    <!-- inquiry -->

    <section class="admin" style="margin-top:50px">
        <section class="inquiry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Inquiry Requests</h2>
                        <table>
                            <tr>
                                <th>SR.NO</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phoneno</th>
                                <th>Email</th>
                                
                                <th>Date</th>
                                <th>Message</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>

                            <?php
                            include('connection.php');

                            error_reporting(0);
                        $search = $_POST['search'];
                        $query = "SELECT * FROM inquiry  WHERE name  LIKE '$search%' OR name  LIKE '%$search' OR name  LIKE '%$search%' ";

                            
                            $data = mysqli_query($conn, $query);

                            while ($res = mysqli_fetch_assoc($data)) {

                                echo "
                            
                                <tr>
                                <td>" . $res['sr'] . "</td>    
                                    <td>" . $res['name'] . "</td>
                                    
                                    <td>" . $res['address'] . "</td>
                                    
                                    <td>" . $res['phoneno'] . "</td>
                                    
                                    <td>" . $res['email'] . "</td>
                                    
                                    
                                    <td>" . $res['date'] . "</td>
                                    <td>" . $res['message'] . "</td>
                                    <td>
                                    <a href='portfoliocontactupdate.php?up=" . $res['sr'] . "'><button>Edit</button></a>
                                    </td>
                                    <td class='pencil'>
                                    <a href='deleteportfoliocontact.php?del=" . $res['sr'] . "'><button>Delete</button></a>
                                    </td>
                                    </tr>
                                    ";
                            }

                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </section>





</body>

</html>