<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Form</title>
<link rel="stylesheet" href="../css/style.css">


<style>
    .form-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input[type="text"],
    input[type="email"],
    input[type="date"]
    {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #4caf50;
        color: white;
        padding: 10px 0;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

 
<div class="top">
        <center><h1>PET<span>.</span></h1></center>
    </div>
<br>
<br>
<br>
<br>
<br><br>
<div class="form-container">

<?php

include '../admin/connect.php';

if(isset($_GET['service_id'])){
    $id = mysqli_real_escape_string($con, $_GET['service_id']);

    $sql = "SELECT * FROM `service` WHERE service_id='$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    // Display a form to update contact details
    echo "<form method='post' action=''>
            Service: <input type='text' name='name' value='".$row['service']."' readonly><br>
            Name: <input type='text' name='name' value='".$row['name']."'><br>
            Email: <input type='email' name='email' value='".$row['email']."'><br>
            Mobile: <input type='text' name='mobile' value='".$row['mobile']."'><br>
            Required Date: <input type='date' name='mobile' value='".$row['req_date']."'><br>
            Any specific requests or instructions: <input type='text' name='message' value='".$row['message']."'><br>
            <input type='submit' name='update' value='Update'>
          </form>";

    // Handle the form submission to update contact details
    if(isset($_POST['update'])){
        $service = mysqli_real_escape_string($con, $_POST['service']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $message = mysqli_real_escape_string($con, $_POST['message']);

        // SQL query to update contact details
        $sql = "UPDATE `service` SET name='$name', email='$email', mobile='$mobile', message='$message' WHERE service_id='$id'";
        $result = mysqli_query($con, $sql);

        if($result){
            echo '<script>alert("Update Successfully!");window.location="../user/userpage.php"</script>';
        } else {
            echo '<script>alert("Data not updated!");window.location="../user/userpage.php"</script>';
        }
    }
}
?>

</div>

<br><br><br><br><br><br><br><br><br>

<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Our Products</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">Pet Foods</a></li>
                        <li><a href="#">Pet Training</a></li>
                        <li><a href="#">Pet Hotel</a></li>
                        <li><a href="#">Pet Grooming</a></li>
                     <li><a href="#">Walking & Sitting</a></li>
                     <li><a href="#">Pet Taxi</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>

</body>
</html>