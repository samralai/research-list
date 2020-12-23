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
                        <h3>Title <?php echo $selected_title ?> </h3><br/> <!-- select title from articles where id=1; -->
                        <h3>Author: <?php echo $selected_author ?></h3><br/> <!-- select author from articles where id=1; -->
                        <h3>DOI: <?php echo $selected_doi ?></h3><br/> <!-- select doi from articles where id=1; -->
                        <p>DOI: <?php echo $selected_content ?></p><br/><!-- select content from articles where id=1; -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum volutpat finibus enim, in commodo lectus condimentum quis. Vivamus sit amet sagittis dui. Aliquam mi nulla, consequat ut nibh ultrices, porttitor eleifend odio. Donec luctus elit eu elit elementum rhoncus. Fusce vulputate leo et purus pellentesque mattis. Vivamus sollicitudin, augue non volutpat hendrerit, sapien elit vehicula nisi, non pharetra orci nulla quis nulla. Donec blandit, odio a sagittis vestibulum, orci ante accumsan mi, et tristique diam velit non velit. Donec non nisi turpis. Curabitur et commodo ex. Phasellus pulvinar erat ligula.

                                Maecenas nec lectus blandit, eleifend libero et, sodales neque. Nullam sollicitudin egestas aliquam. Praesent vitae interdum elit, a elementum enim. Cras tempor dictum felis, eu consequat libero dictum sed. Fusce accumsan quam in mi pharetra, in finibus augue bibendum. Sed congue neque ut nunc aliquet interdum. Pellentesque congue dictum lectus, vitae viverra lectus viverra ac. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras efficitur diam vel arcu tincidunt mattis. Nulla sem augue, vehicula vitae justo accumsan, fringilla porta magna. Maecenas et malesuada nisl. Vestibulum sit amet dui molestie, tempus ex porttitor, viverra purus. Sed ullamcorper finibus lorem a pharetra.
                                
                                Vivamus at egestas tortor, accumsan vulputate magna. Quisque vehicula tellus vitae sem semper, et scelerisque ex pretium. Aliquam at malesuada quam. Nunc ut efficitur arcu. Nunc dignissim faucibus eros, eu interdum nibh aliquet nec. Phasellus at malesuada odio. Donec ac velit nibh. Mauris convallis lectus vitae pellentesque porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis accumsan fringilla rhoncus.
                                
                                Proin vitae nibh ipsum. Vivamus pretium malesuada risus, vel ultrices tortor interdum nec. Nullam vel eros in eros ornare laoreet. Ut eu lacus massa. Praesent arcu neque, ultricies volutpat sollicitudin eget, efficitur eget sapien. Maecenas nec felis quis massa posuere commodo. Maecenas in justo nisl. Morbi et bibendum nisl, eu eleifend elit. Phasellus sed felis sed ipsum facilisis aliquet ut vitae neque. Mauris tortor nulla, ultricies in elit in, maximus luctus diam.
                                
                                Integer neque orci, fermentum in tempus a, vulputate mollis orci. Donec in consectetur lacus. Proin vel ante est. Praesent eu convallis nulla. Sed porttitor et enim nec egestas. Aenean maximus, mi ut tincidunt convallis, felis lacus consequat ante, vitae elementum felis dolor eu mauris. Donec non sodales sapien. Nulla rhoncus metus ut tellus consectetur dapibus. Curabitur fermentum, quam eu volutpat facilisis, eros diam luctus lacus, sed ullamcorper ex nisi vel nunc. Duis faucibus, tellus quis commodo vestibulum, neque orci vestibulum justo, eu porttitor dui risus vitae erat.
                                
                                </p> <!-- select content from articles where id=1; -->
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>