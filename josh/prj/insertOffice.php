<?php

include 'db.inc.php';

date_default_timezone_set("UTC");
echo "The details sent down are: <br>";

echo "The address is :" . $_POST['firstname'] . "<br>";
echo "Surname is :" . $_POST['surname'] . "<br>";

$date = date_create($_POST['dob']);

echo "Date of Birth is :" . date_format($date,"d/m/Y") . "<br>";

$sql = "INSERT INTO `` (``, ``, ``) VALUES ('', '', '');";

if (!mysqli_query($con,$sql))
{
    die ("An error in the SQL Query: " . mysqli_error($con));
}

echo "<br>A record has been added";

mysqli_close($con);

?>

<form action="insert.html" method="Post">
    <br>
    <input type="submit" value="Return to Insert Page"/>

</form>