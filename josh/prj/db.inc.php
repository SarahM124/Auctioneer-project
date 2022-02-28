<?php

$hostname = "";
$username = "auctioneer";
$password = "auctioneerPass2022";

$dbname = "Auctioneer_Database";

$con = mysqli_connect($hostname, $username, $password, $dbname);

if (!$con)
{
    die ("Failed to connect to MySQL: " . mysqli_error($mysqli));
}

?>