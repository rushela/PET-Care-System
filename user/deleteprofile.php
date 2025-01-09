<?php
include '../admin/connect.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];

    $sql="delete from `reg_users` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo '<script>alert("Your Account delete Successfully!");window.location="../welcome.php"</script>';
    }
    else
    {
        die(mysqli_error($con));
    }
}

?>