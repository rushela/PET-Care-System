<?php
    include "../admin/connect.php";

    $sql = "SELECT * FROM `contact` ORDER BY created_at DESC LIMIT 1";
    $result = mysqli_query($con, $sql);

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/table.css">
   
</head>
<body>
    
    <div class="top">
        <center><h1>PET<span>.</span></h1></center>
    </div>

    <br>

    <h2><center>If you want update details, you can update now. You unable to update details again!</center></h2>


    <table border="1">
        <thead>
            <tr>
                <th>Your Name</th>
                <th>Your Email</th>
                <th>Your Phone Number</th>
                <th>Your Message</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>

        <?php

            if(mysqli_num_rows($result) > 0)
            {
                $row = mysqli_fetch_assoc($result);

                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['mobile'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";

                echo "<td><button class='update'><a href='update_contact.php? contact_id=" . $row['contact_id'] . "'>Update</a></button> </td>";
                echo"</tr>";
            }
   


?>

        </tbody>
    </table>

    <br><br>

    <center><button class="delete"><a href="contactus.php">Go Back</a></button></center>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="../about/aboutus.php">About Us</a></li>
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