<?php
$con=mysqli_connect("localhost","phpmyadmin","phpmyadmiN@123","articles");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT author FROM articles WHERE id=1");

$selected_title = mysqli_query($con,"SELECT title FROM articles WHERE id=1");
$selected_author = mysqli_query($con,"SELECT author FROM articles WHERE id=1");
$selected_doi = mysqli_query($con,"SELECT doi FROM articles WHERE id=1");
$selected_content = mysqli_query($con,"SELECT content FROM articles WHERE id=1");

echo "<table border='1'>
<tr>
<th>Author</th>
<th>Title</th>
<th>DOI</th>
<th>Content</th>
</tr>";


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['author'] . "</td>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['doi'] . "</td>";
echo "<td>" . $row['content'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>