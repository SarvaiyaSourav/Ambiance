<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add user</title>
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

        .formhead {
            margin-left: 36%;
            margin-top: 10%;
            text-align: center;
            width: 50%;
        }

        .formhead h1 {
            background: linear-gradient(to left, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0), rgba(0.2, 0.2, 0.2, 0.6));
            font-size: 60px;
        }

        .adminform {
            width: 50%;
            margin-left: 36%;
            margin-top: 1%;
            border: 1px solid black;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6), rgba(0.2, 0.2, 0.2, 0.8));
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        

        .adminform h2 {
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
            color: #333;
        }

        .admintable {
            margin-top: 5%;
            padding-left: 30%;
            margin-bottom: 5%;
        }

        .admintable label {
            display: block;
            font-size: 30px;
            color: black;
            margin-bottom: 20px;
        }

        .admintable input[type="text"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid black;
            border-radius: 5px;
            margin-bottom: 22px;
        }

        .admintable input[type="text"]:focus{
            outline: none;
        }

        .admintable input[type="submit"] {
            width: 50%;
            margin-left: 30%;
            padding: 15px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 18px;
            color: #fff;
            background-color: black;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 700;
        }

        .adminsection {
            margin-left: 24%;
            width: 70%;
            margin-top: 5%;
        }

        .adminsection h2{
            background-color: black;
            text-align: center;
            color: white;
            font-size: 50px;
            padding-bottom: 10px;
        }

        .adminsection table{
            margin-top: 2%;
            margin-left: 30%;
            width: 40%;
            border-collapse: collapse;
            border: 1px solid black;
        }

        .adminsection th{
            background-color: black;
            color: white;
            font-size: 28px;
            text-align: start;
            padding-top: 15px;
            padding-left: 10px;
        }

        .adminsection tr{
            text-align: start;
            font-size: 18px;
            padding-left: 10px;
            background-color: #808080;
            /* padding: 50px; */
        }
        .adminsection tr:nth-child(even) {
            background-color: #e6e6e6;
        }

        .adminsection td{
            padding-left: 10px;
            font-size: 18px;
            padding: 10px;
        }

        .adminsection button {
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
        .adminsection button:hover {
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
        <h1>ADD USER </h1>
    </div>

    <div class="formhead">
        <h1>REGISTER AS AN ADMIN</h1>
    </div>

    <div class="adminform">
        <form method="POST">
            <div class="admintable">
                <table>
                    <tr>
                        <td><label for="name">USERNAME:</label></td>
                        <td><input name="name" type="text"></td>
                    </tr>

                    <tr>
                        <td><label for="username">EMAIL:</label></td>
                        <td><input name="username" type="text"></td>
                    </tr>
                    <tr>
                        <td><label for="password">PASSWORD:</label></td>
                        <td><input name="password" type="text"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input name="adduser" type="submit" value="ADD USER">
                        </td>
                    </tr>
                </table>
            </div>
        </form>

    </div>

    <?php
    include('connection.php');

    if (isset($_POST['adduser'])) {

        
        $email = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO adminuser(username,password) VALUES('$email','$password')";


        $adduser = mysqli_query($conn, $query);
        if ($adduser) {
            // echo "ok inserted!!";
        } else {
            echo "NO...INSERTED";
        }        
    }
    ?>
</body>
</html>