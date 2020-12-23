

<html>
    <head>
        <title>asdas</title>
    </head>
    <body bgcolor="#ffffff"><center>
        <br><br><br><br><br>
        <div allign="center">
        <?php
$con=mysqli_connect("localhost","phpmyadmin","phpmyadmiN@123","articles");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$selected_title = mysqli_query($con,"SELECT title FROM articles WHERE id=1");
$selected_author = mysqli_query($con,"SELECT author FROM articles WHERE id=1");
$selected_doi = mysqli_query($con,"SELECT doi FROM articles WHERE id=1");
$selected_content = mysqli_query($con,"SELECT content FROM articles WHERE id=1");

echo "<table border='0' cellpadding='10' cellspacing='10'>
<tr>
    <td>
    <h3>";  

while($row = mysqli_fetch_array($selected_title)) {
    echo "<td>" . $row['title'] . "</td>";
}

echo "</h3><br/>
    
</td>";

echo "</tr>";

echo "<h5>Author:  ";

while($row = mysqli_fetch_array($selected_author)) {
    echo "<td>" . $row['author'] . "</td>";
}

echo "</h5><br/>";


echo "</table>";

mysqli_close($con);
?>
        </div>
    </body>
</html>