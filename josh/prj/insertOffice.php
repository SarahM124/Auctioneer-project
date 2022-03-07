
<link rel="stylesheet" href="styles.css">   <!--This links all the css styles-->

<?php

include 'db.inc.php';

echo "The details sent down are: " . "<br>";

echo "The address is :" . $_POST['address'] . "<br>";
echo "The location is :" . $_POST['location'] . "<br>";

echo "The area is :" . $_POST['area'] . "<br>";
echo "The layout is :" . $_POST['layout'] . "<br>";

echo "The internet is :" . $_POST['internet'] . "<br>";
echo "The telephone is :" . $_POST['telephone'] . "<br>";

echo "The reception is :" . $_POST['reception'] . "<br>";
echo "The security is :" . $_POST['security'] . "<br>";

echo "The residence is :" . $_POST['residence'] . "<br>";
echo "The facilities are :" . $_POST['facilities'] . "<br>";

echo "The ownership is :" . $_POST['ownership'] . "<br>";
echo "The type of price is :" . $_POST['price'] . "<br>";

echo "The viewing times are :" . $_POST['times'] . "<br>";
echo "The sellerID is :" . $_POST['sellerID'] . "<br>";


$sql = "INSERT INTO `office`(`Address`, `Location`, `Area`, `Layout`, `Internet`, `Telephone`, `Reception`, `Security`, `Residence`, `Canteen`, `Ownership`, `Price`, `Times`, `SellerID`) VALUES ('$_POST[address]','$_POST[location]','$_POST[area]','$_POST[layout]','$_POST[internet]','$_POST[telephone]','$_POST[reception]','$_POST[security]','$_POST[residence]','$_POST[facilities]','$_POST[ownership]','$_POST[price]','$_POST[times]','$_POST[sellerID]')";

if (!mysqli_query($con,$sql))
{
    die ("An error in the SQL Query: " . mysqli_error($con));
}

echo "<br>A record has been added";

mysqli_close($con);




?>

<form action="addOffice.php" method="Post">
    <br>
    <input type="submit" value="Return to Insert Page"/>

</form>