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
                <th>Name</th>
                <th>Qty</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Method</th>
                <th>Card-No</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>

        <?php

    $sql="Select * from `products_pay`";
    $result=mysqli_query($con,$sql);
    if($result){
       while($row=mysqli_fetch_assoc($result))
       {
        $id=$row['id'];
        $name=$row['name'];
        $qty=$row['qty'];
        $address=$row['address'];
        $mobile=$row['mobile'];
        $method=$row['method'];
        $card_no=$row['card_no'];

        echo '<tr>
        <th>'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$qty.'</td>
        <td>'.$address.'</td>
        <td>'.$mobile.'</td>
        <td>'.$method.'</td>
        <td>'.$card_no.'</td>
        <td>
        <button class="delete"><a href="delete_payment.php? deleteid='.$id.'">Delete</a></button>

        </tr>';
       }
    }


?>

        </tbody>
    </table>

    </body>
</html>