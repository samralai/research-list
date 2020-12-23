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


while($row = mysqli_fetch_array($selected_title)) {
    echo "<td>" . $row['title'] . "</td>";
}

while($row = mysqli_fetch_array($selected_author)) {
    echo "<td>" . $row['author'] . "</td>";
}

while($row = mysqli_fetch_array($selected_doi)) {
    echo "<td>" . $row['doi'] . "</td>";
}

while($row = mysqli_fetch_array($selected_content)) {
    echo "<td>" . $row['content'] . "</td>";
}

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
                            <h3>Title  </h3><br/> <!-- select title from articles where id=1; -->
                            <h5>Author: <?php echo $selected_author ?></h5><br/> <!-- select author from articles where id=1; -->
                            <h5>DOI: <?php echo $selected_doi ?></h5><br/> <!-- select doi from articles where id=1; -->
                            <p>DOI: <?php echo $selected_content ?></p><br/><!-- select content from articles where id=1; -->
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>