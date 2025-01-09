<?php

include '../admin/connect.php';
$id=$_GET['updateid'];
$sql="Select * from `reg_users` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$fname=$row['First_Name'];
$lname=$row['Last_Name'];
$dob=$row['dob'];
$email=$row['email'];
$mobile=$row['mobile'];
$address=$row['address'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $fname=$_POST['first-name'];
    $lname=$_POST['last-name'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $password=$_POST['password'];

    $sql="update `reg_users` set id=$id, First_Name='$fname', Last_Name='$lname', dob='$dob', email='$email', mobile='$mobile', address='$address',
    password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script>alert("Change Successful! You have to log again to see changes!");window.location="login.php"</script>';
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
    <title>change</title>
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
            <h2>Update</h2>
            
            <div class="input-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" autocomplete="off" value=<?php echo $fname;?>>
            </div>
            <div class="input-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" autocomplete="off" value=<?php echo $lname;?>>
            </div>
            <div class="input-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" autocomplete="off" value=<?php echo $dob;?>>
            </div>
            <div class="input-group">
                <label for="email">Email(Username)</label>
                <input type="email" id="email" name="email" autocomplete="off" value=<?php echo $email;?>>
            </div>
            <div class="input-group">
                <label for="contact-number">Contact Number</label>
                <input type="text" id="contact-number" name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
            </div>
            <div class="input-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" autocomplete="off" value=<?php echo $address;?>></textarea>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" autocomplete="off" value=<?php echo $password;?>>
            </div>
            
            <button type="submit" class="button" name="submit">Update</button>
        </form>
    </div>

    

</body>
</html>