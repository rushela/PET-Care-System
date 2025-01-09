<?php

include '../admin/connect.php';
if(isset($_POST['submit'])){
    $service=$_POST['service'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $date=$_POST['date'];
    $message=$_POST['message'];

    $sql="insert into `service` (service,name,email,mobile,req_date,message)
    values('$service','$name','$email','$mobile','$date','$message')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script>alert("Details sent!");window.location="services.php"</script>';
        
    }else{
        die(mysqli_error($con));
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get service</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/getservice.css">
</head>
<body>
    
    <div class="top">
        <center><h1>PET<span>.</span></h1></center>
    </div>

        
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="../home.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="../products/products.php">Products</a></li>
                <li><a href="../contact/contactus.php">Contact Us</a></li>
                <li><a href="../about/aboutus.php">About Us</a></li>
                <li><a href="../user/userpage.php">Account</a></li>
            </ul>
        </nav>
    </header>

    <div class="contactus">
        <div class="form-container">
            <h1>Give Details for the Service</h1>
            <form action="#" method="post">

                <label for="service">Service Type:</label>
                <select id="service" name="service" autocomplete="off">
                    <option value="Walking & Sitting">Walking & Sitting</option>
                    <option value="Pet Grooming">Pet Grooming</option>
                    <option value="Pet Training">Pet Training</option>
                    <option value="Pet Taxi">Pet Taxi</option>
                    <option value="Health & Wellness">Health & Wellness</option>
                    <option value="Pet Hotel">Pet Hotel</option>
                </select>

                <label for="name">Your Name</label><br>
                <input type="text" id="name" name="name" placeholder="Your Name" autocomplete="off"><br>
                
                <label for="email">Your Email</label><br>
                <input type="email" id="email" name="email" placeholder="Your Email" autocomplete="off"><br>
                
                <label for="phone">Your Phone Number</label><br>
                <input type="text" id="phone" name="mobile" placeholder="Your Phone Number" autocomplete="off"><br>
                <small>Format: 123-456-7890</small><br>

                <label for="date">Required Date</label>
                <input type="date" id="date" name="date" autocomplete="off">
                
                <label for="message">Any specific requests or instructions</label><br>
                <textarea id="message" name="message" placeholder="Your Message" rows="5" autocomplete="off"></textarea><br>
                
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
        <div class="image-container">
            <img src="../img/best-service-guarantee.png" alt="Description Image">
        </div>
    </div>
   




    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="../about/aboutus.php">About Us</a></li>
                        <li><a href="services.php">Our Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="../products/products.php">Our Products</a></li>
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
                        <li><a href="../products/products.php">Pet Foods</a></li>
                        <li><a href="services.php">Pet Training</a></li>
                        <li><a href="services.php">Pet Hotel</a></li>
                        <li><a href="services.php">Pet Grooming</a></li>
                        <li><a href="services.php">Walking & Sitting</a></li>
                        <li><a href="services.php">Pet Taxi</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>
    
</body>
</html>