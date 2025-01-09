<?php

include '../admin/connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $qty=$_POST['qty'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $method=$_POST['method'];
    $card_no=$_POST['card_no'];

    $sql="insert into `products_pay` (name,qty,address,mobile,method,card_no)
    values('$name','$qty','$address','$mobile','$method','$card_no')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script>alert("Payment Successful!");window.location="products.php"</script>';
        
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
    <title>products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/buyform.css">
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
                <li><a href="../user/userpage.php">Account</a></li>
            </ul>
        </nav>
    </header>

    <div class="buy">
        <h2>Payment Form</h2>
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" autocomplete="off">
            <label for="qty">Quantity:</label>
            <input type="text" id="qty" name="qty" autocomplete="off">
            <label for="address">Address:</label>
            <textarea id="address" name="address" autocomplete="off"></textarea>
            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile" autocomplete="off">
            <label for="payment-method">Payment Method(Credit or Debit):</label>
            <input type="text" id="method" name="method" autocomplete="off">           
            <label for="card_no">Card Number:</label>
            <input type="text" id="card_no" name="card_no" autocomplete="off">

            <button type="submit" name="submit">Buy</button>
        </form>
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
                        <li><a href="products.php">Our Products</a></li>
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
                        <li><a href="products.php">Pet Foods</a></li>
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