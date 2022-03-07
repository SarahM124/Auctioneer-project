<?php

$hostname = "localhost";
$username = "J";
$password = "J";

$dbname = "prj";

$con = mysqli_connect($hostname, $username, $password, $dbname);

if (!$con)
{
    die ("Failed to connect to MySQL: " . mysqli_error($mysqli));
}

?>