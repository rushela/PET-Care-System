<?php

include '../admin/connect.php';
if(isset($_POST['submit'])){
    $feedback=$_POST['feedback'];

    $sql="insert into `feedback` (feedback)
    values('$feedback')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script>alert("Thank you!");window.location="aboutus.php"</script>';
        
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
    <title>aboutus</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/aboutus.css">
    <link rel="stylesheet" href="../css/table.css">

</head>
<body>
    
    <div class="top">
        <center><h1>PET<span>.</span></h1></center>
    </div>
    

        
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="../home.php">Home</a></li>
                <li><a href="../services/services.php">Services</a></li>
                <li><a href="../products/products.php">Products</a></li>
                <li><a href="../contact/contactus.php">Contact Us</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="../user/userpage.php">Account</a></li>
            </ul>
        </nav>
        
    </header>

    <div class="aboutus">
        <section class="about">
            <center><h1>Who We Are</h1></center>
            <p>At PET., we're a team of dedicated animal lovers on a mission to enrich the lives of pets and their owners worldwide. 
                With a shared passion for fostering strong bonds between humans and animals, we strive to provide valuable resources, heartfelt stories, 
                and a supportive community for every pet parent. Get to know the faces behind our platform and discover our commitment to promoting responsible pet ownership and spreading joy, 
                one wagging tail at a time.</p>
        </section>
        <section class="team">
            <center><h2>Our Team</h2></center>
            <div class="team-member">
                <img src="../img/profilepic.jpg" alt="Team Member 1">
                <h3>Tashen Chamika</h3>
                <p>CEO & Founder</p>
            </div>
            <div class="team-member">
                <img src="../img/profilepic.jpg" alt="Team Member 2">
                <h3>Gavindu Rushela</h3>
                <p>Marketing Director</p>
            </div>
            <div class="team-member">
                <img src="../img/profilepic.jpg" alt="Team Member 2">
                <h3>Hirusha Holipitiya</h3>
                <p>Genaral Manager</p>
            </div>
            <div class="team-member">
                <img src="../img/profilepic.jpg" alt="Team Member 2">
                <h3>Isuri Weerasinghe</h3>
                <p>Assistant Manager</p>
            </div>
        </section>
    </div>

    <section class="feedback">
            <h2>Give A Feedback</h2>
            <form action="#" method="post">
                <input type="text" id="feedback" name="feedback" placeholder="Your Feedback" autocomplete="off"><br>
                <button type="submit" name = "submit">Submit</button>
            </form>
        </section>

        <table >
        <thead>
            <tr>
                <th>Feedbacks</th>
            </tr>
        </thead>
        <tbody>

        <?php

            $sql="Select * from `feedback`";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result))
                {
                     $feedback=$row['feedback'];

                        echo '<tr>
                        <td>'.$feedback.'</td>
                        </tr>';
                 }
             }


        ?>


        </tbody>
    </table>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="../services/services.php">Our Services</a></li>
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
                        <li><a href="../services/services.php">Pet Training</a></li>
                        <li><a href="../services/services.php">Pet Hotel</a></li>
                        <li><a href="../services/services.php">Pet Grooming</a></li>
                        <li><a href="../services/services.php">Walking & Sitting</a></li>
                        <li><a href="../services/services.php">Pet Taxi</a></li>
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