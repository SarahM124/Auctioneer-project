<?php

include "db.inc.php";

$sql = "SELECT `ID`, `Address` FROM `office`;";

if (!$result = mysqli_query($con, $sql))
{
    die ('Error in querying the database ' . mysqli_error($con));
}

echo "<br><select>";

while ($row = mysqli_fetch_array($result))
{
    $id = $row['ID'];
    $address = $row['address'];
    echo "<option>$id $address</option>";
}
echo "</select>";
mysqli_close($con);

?>