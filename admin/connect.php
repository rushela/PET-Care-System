<?php

$con=new mysqli('localhost','root','','pet');

if(!$con)
{
    die(mysqli_error($con));
}

?>