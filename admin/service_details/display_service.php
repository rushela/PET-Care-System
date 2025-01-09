<?php

include '../connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/table.css">
   
</head>
<body>
    
    <div class="top">
        <center><h1>PET<span>.</span></h1></center>
    </div>

    <br>

    <h2><center>Service Details<center></h2>

    <br>

    <div class="bt">
        <button class="dash"><a href="../admin.php">Dashboard</a></button>
    </div>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Service</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Required Date</th>
                <th>Requests or Instructions</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>

        <?php

    $sql="Select * from `service`";
    $result=mysqli_query($con,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result))
       {
        $id=$row['service_id'];
        $service=$row['service'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $date=$row['req_date'];
        $message=$row['message'];

        echo '<tr>
        <th>'.$id.'</th>
        <th>'.$service.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$date.'</td>
        <td>'.$message.'</td>
        <td>
        <button class="delete"><a href="delete_service.php? deleteid='.$id.'">Delete</a></button>

        </tr>';
       }
    }


?>

        </tbody>
    </table>

    </body>
</html>