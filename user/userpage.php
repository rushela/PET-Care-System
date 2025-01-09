<?php

    include "../admin/connect.php";
    session_start();

    $id = $_SESSION['id'];
    $address = $_SESSION['address'];
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/userpage.css">
    <link rel="stylesheet" href="../css/table1.css">
   
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
                <li><a href="../about/aboutus.php">About Us</a></li>
                <li><a href="userpage.php">Account</a></li>
        </nav>
        
    </header>

    <div class="right-links">
    <?php echo '<a href="changeprofile.php? updateid='.$id.'"><button class="btn1">Change Profile</a></button>' ?>
    <?php echo '<a href="deleteprofile.php? deleteid='.$id.'"><button class="btn1">Delete Profile</a></button>' ?>
        <a href="logout.php"><button class="btn">Log Out</button></a>
    </div>
    
    <div class="user">
        <h2>Your Information</h2>
        <div class="user-info">
            <label for="id">User ID:</label>
            <p id="id"><?php echo $_SESSION['id']; ?></p>
        </div>
        <div class="user-info">
            <label for="first-name">First Name:</label>
            <p id="first-name"><?php echo $_SESSION['first-name']; ?></p>
        </div>
        <div class="user-info">
            <label for="last-name">Last Name:</label>
            <p id="last-name"><?php echo $_SESSION['last-name']; ?></p>
        </div>
        <div class="user-info">
            <label for="dob">Date of Birth:</label>
            <p id="dob"><?php echo $_SESSION['dob']; ?> </p>
        </div>
        <div class="user-info">
            <label for="email">Email:</label>
            <p id="email"><?php echo $_SESSION['email']; ?></p>
        </div>
        <div class="user-info">
            <label for="mobile">Contact Number:</label>
            <p id="mobile"><?php echo $_SESSION['mobile']; ?></p>
        </div>
        <div class="user-info">
            <label for="address">Address:</label>
            <p id="address"><?php echo $address; ?></p>
        </div>
        <div class="user-info">
            <label for="password">Password:</label>
            <p id="password"><?php echo $_SESSION['password']; ?></p>
        </div>
        </div>
    </div>
    </div>

    <h2>If you want to edit infromation of service which are submitted, you can search it using email and edit it.</h2> 
        <div class="search">
            <form method="post">
                    <input type="text" placeholder="Enter Email" name="search">
                    <button name="submit">Search</button>
            </form>
            <div class="list">
                <table class="table">
                <?php
                    if(isset($_POST['submit']))
                    {
                        $search=$_POST['search'];

                        $sql="Select * from `service` where email='$search'";
                        $result=mysqli_query($con,$sql);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                echo '<thead>
                                <tr>
                                <th>Service</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Required Date</th>
                                <th>Any specific requests or instructions</th>
                                <th>Operation</th>
                                </tr>
                                </thead>';

                                while($row=mysqli_fetch_assoc($result))
                                {
                                     echo '<tbody>
                                     <tr>
                                    <td>'.$row['service'].'</td>
                                    <td>'.$row['name'].'</td>
                                    <td>'.$row['email'].'</td>
                                    <td>'.$row['mobile'].'</td>
                                    <td>'.$row['req_date'].'</td>
                                    <td>'.$row['message'].'</td>
                                    <td><button class="update"><a href="../services/updateservice.php? service_id=' . $row['service_id'] . '">Update</a></button></td>
                                    </tr>
                                    </tbody>';
                                }
                            }
                            else
                            {
                                echo '<h2>Data not found</h2>';
                            }
                        }
                    }
                ?>
            </table>
                

            </div>  

        </div>

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

