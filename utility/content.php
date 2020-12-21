<?php
$con=mysqli_connect("localhost","phpmyadmin","phpmyadmiN@123","articles");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT author FROM articles WHERE id=1");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['author'] . "</td>";
echo "<td>" . $row['author'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>