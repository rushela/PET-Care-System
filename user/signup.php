<?php

include '../admin/connect.php';
if(isset($_POST['submit'])){
    $fname=$_POST['first-name'];
    $lname=$_POST['last-name'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $password=$_POST['password'];

    $sql="insert into `reg_users` (First_Name,Last_Name,dob,email,mobile,address,password)
    values('$fname','$lname','$dob','$email','$mobile','$address','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script>alert("Registration Successful!");window.location="../welcome.php"</script>';
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
    <title>signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
    
    <div class="top">
        <center><h1>PET<span>.</span></h1></center>
    </div>

    <div class="signup">
        <form class="registration-form" method="POST">
            <h2>Registration</h2>
            
            <div class="input-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" autocomplete="off">
            </div>
            <div class="input-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" autocomplete="off">
            </div>
            <div class="input-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" autocomplete="off">
            </div>
            <div class="input-group">
                <label for="email">Email(Username)</label>
                <input type="email" id="email" name="email" autocomplete="off">
            </div>
            <div class="input-group">
                <label for="contact-number">Contact Number</label>
                <input type="text" id="contact-number" name="mobile" autocomplete="off">
            </div>
            <div class="input-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" autocomplete="off"></textarea>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" autocomplete="off">
            </div>

            <button type="submit" class="button" name="submit">Register</button>
        </form>
    </div>

    

</body>
</html>