<?php
        session_start();
        if (!isset ($_SESSION["loggedin"]))
        {
            header("Location: login.php");
            exit;
        }
?>

<?php
    include("connection.php");

    $srno = $_GET['up'];

    $query = "SELECT * FROM career WHERE sr = '$srno'";
    $data = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($data);
    
    $sr = $row['sr'];
    $fullname = $row['fullname'];
    $address = $row['address'];
    $phoneno = $row['phoneno'];
    $email = $row['email'];
    $qualification = $row['qualification'];
    $experience = $row['experience'];
    $skil = $row['skill'];
    $dob = $row['dob'];
    $referral = $row['referral'];
    $occupation = $row['occupation'];
    $time = $row['time'];
    $date = $row['date'];
    $jdate = $row['jdate'];
    $status = $row['status'];
    
    



    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Update Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 15px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

   

    <form action="" method="POST">
        <label for="sr">SR.NO</label>
        <input type="text" name="sr" value="<?php echo $sr; ?>" required readonly>

        <label for="fullname">Name:</label>
        <input type="text" name="fullname" value="<?php echo $fullname; ?>" >

        <label for="address">Address:</label>
        <input type="text" name="address" value="<?php echo $address; ?>" >

        <label for="phoneno">Phoneno:</label>
        <input type="text" name="phoneno" value="<?php echo $phoneno; ?>" >

        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">

        <label for="qualification">QUALIFICATION:</label>
        <input name="qualification" type="text" value="<?php echo $qualification; ?>" id="qualification" />


        <label for="experience">EXPERIENCE</label>
        <input name="experience" type="text" value="<?php echo $experience; ?>" id="experience" />


        <label for="skill">SKILL</label>
        <input name="skill" type="text" value="<?php echo $skil; ?>" id="skill" />

        <label for="dob">DATE OF BIRTH</label>
        <input name="dob" type="date" value="<?php echo $dob; ?>" id="dob" />


        <label for="referral">REFERRAL</label>
        <input name="referral" type="text" value="<?php echo $referral; ?>" id="referral" />

        <label for="occupation">OCCUPATIONS</label>
        <select name="occupation"  id="occupation">
            <option value="INTERIOR DESIGNER" <?php if($occupation='INTERIOR DESIGNER' ) echo 'selected';?>>INTERIOR DESIGNER</option>
            <option value="DESIGN MANAGER" <?php if($occupation='DESIGN MANAGER' ) echo 'selected';?>>DESIGN MANAGER</option>
            <option value="DESIGNER" <?php if($occupation='DESIGNER' ) echo 'selected';?>>DESIGNER</option>
            <option value="ARCHITECTE" <?php if($occupation='ARCHITECTE' ) echo 'selected';?>>ARCHITECTE</option>
            <option value="SOFTWARE DEVELOPER" <?php if($occupation='SOFTWARE DEVELOPER' ) echo 'selected';?>>SOFTWARE DEVELOPER</option>
        </select>


        <label for="time">TIME</label>
        <input name="time" type="text" value="<?php echo $time; ?>" id="time"  />

        <label for="date">DATE</label>
        <input name="date" type="date" value="<?php echo $date; ?>" id="date"  />


        <label for="jdate">JOINING DATE</label>
        <input name="jdate" type="date" value="<?php echo $jdate; ?>" id="jdate"  />

        <label for="status">STATUS</label>
        <input name="status" type="text" value="<?php echo $status; ?>" id="status"  />


        <input type="submit" name="update" value="Update">
    </form>

    <?php
    if (isset($_POST['update'])) {
        $srno = $_POST['sr'];
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $phoneno = $_POST['phoneno'];
        $email = $_POST['email'];
        $qualification = $_POST['qualification'];
        $experience = $_POST['experience'];
        $skil = $_POST['skill'];
        $dob = $_POST['dob'];
        $referral = $_POST['referral'];
        $occupation = $_POST['occupation'];
        $time = $_POST['time'];
        $date = $_POST['date'];
        $jdate = $_POST['jdate'];
        $status = $_POST['status']; 
        
        $query = "UPDATE career SET fullname='$fullname', email='$email', phoneno='$phoneno', qualification='$qualification', experience='$experience', skill='$skil', dob='$dob', referral='$referral',
        occupation='$occupation', time='$time', date='$date', jdate='$jdate', status='$status' WHERE sr='$srno'";
        
        $data = mysqli_query($conn, $query);
        if ($data) {
            header("Location: adminpanel.php");
            
        } else {
            echo "Data not updated!";
        }

    }
    ?>

</body>

</html>