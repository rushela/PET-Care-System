<?php

$servername = getenv('MYSQL_HOST');
$username   = getenv('MYSQL_USERNAME');
$password   = getenv('MYSQL_PASSWORD');
$dbname     = getenv('MYSQL_DATABASE');

if(!$con)
{
    die(mysqli_error($con));
}

?>