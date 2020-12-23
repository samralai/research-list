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

echo "<table border='0' cellpadding='10' cellspacing='10'>
<tr>
    <td>
    <h3>   </h3><br/>
    
    </td>";

while($row = mysqli_fetch_array($selected_title)) {
    echo "<td>" . $row['title'] . "</td>";
}

echo "</tr>";

echo "<h5>Author:  ";

while($row = mysqli_fetch_array($selected_author)) {
    echo "<td>" . $row['author'] . "</td>";
}

echo "</h5><br/>";


echo "</table>";

mysqli_close($con);
?>

<html>
    <head>
        <title>asdas</title>
    </head>
    <body bgcolor="#ffffff"><center>
        <br><br><br><br><br>
        <div allign="center">
            <table border="0" cellpadding="10" cellspacing="10">
                <tr>
                    <td>
                        <table width="380" border="0" cellpadding="10" cellspacing="10" align="right">
                            <h3>Title</h3><br/> <!-- select title from articles where id=1; -->
                            <h5>Author: <?php echo 'Hello' ?> </h5><br/> <!-- select author from articles where id=1; -->
                            <h5>DOI: 241726491</h5><br/> <!-- select doi from articles where id=1; -->
                            <p> 
                                </p> <!-- select content from articles where id=1; -->
                        </table>
                        <ashdkahsj akdha="1"></ashdkahsj>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>