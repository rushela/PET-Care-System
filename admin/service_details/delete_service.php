<?php
include '../connect.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];

    $sql="delete from `service` where service_id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo '<script>alert("Deletion Successful!");window.location="display_service.php"</script>';
    }
    else
    {
        die(mysqli_error($con));
    }
}

?>