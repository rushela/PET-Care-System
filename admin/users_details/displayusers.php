<?php

include '../connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg users</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/table.css">
   
</head>
<body>
    
    <div class="top">
        <center><h1>PET<span>.</span></h1></center>
    </div>

    <br>

    <h2><center>Users Details<center></h2>

    <br>
    <br>
    <div class="bt">
        <button class="dash"><a href="../admin.php">Dashboard</a></button>
        <button class="update"><a href="adduser.php">Add User</a></button>
    </div>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Frist Name</th>
                <th>Last Name</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th>Password</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>

        <?php

    $sql="Select * from `reg_users`";
    $result=mysqli_query($con,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result))
       {
        $id=$row['id'];
        $fname=$row['First_Name'];
        $lname=$row['Last_Name'];
        $dob=$row['dob'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $address=$row['address'];
        $password=$row['password'];

        echo '<tr>
        <td>'.$id.'</td>
        <td>'.$fname.'</td>
        <td>'.$lname.'</td>
        <td>'.$dob.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$address.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="update"><a href="updateuser.php? updateid='.$id.'">Update</a></button>
        <button class="delete"><a href="deleteuser.php? deleteid='.$id.'">Delete</a></button>

        </tr>';
       }
    }


?>

        </tbody>
    </table>

    </body>
</html>