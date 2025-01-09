<?php

include '../connect.php';
$id=$_GET['updateid'];
$sql="Select * from `feedback` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$feedback=$row['feedback'];


if(isset($_POST['submit'])){
    $feedback=$_POST['feedback'];

    $sql="update `feedback` set id=$id, feedback='$feedback' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script>alert("Update Successfully!");window.location="display_feedback.php"</script>';
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
    <title>Update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/signup.css">
   
</head>
<body>
    
    <div class="top">
        <center><h1>PET<span>.</span></h1></center>
    </div>

    <br><br><br><br><br><br><br>

    <div class="signup">
        <form class="registration-form" method="POST">
            <h2>Update</h2>
       
            <div class="input-group">
                <label for="feedback">Feedback</label>
                <input type="text" id="feedback" name="feedback" autocomplete="off" value=<?php echo $feedback;?>>
            </div>

            <button type="submit" class="button" name="submit">Update</button>
        </form>
    </div>

    

</body>
</html>