<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Project List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Project List</label>
<?php
session_start();
$id = $_SESSION['id'];
echo "<ul>
        <li><a class='active' href='./'>Home</a></li>
        <li><a href='projects.html'>Projects</a></li>
        <li><a href='news.php'>News</a></li>";
if(is_null($id)) {
  echo "<li><a href='login.html'>SignIn</a></li>
  <li><a href='signup.html'>SignUp</a></li>";
} else {
  echo "<li><a href='myprofile.php'>My Profile</a></li>";
}
?>
      </ul>
    </nav>
    <div class="section">
      <div class="video-cn">
        <video autoplay muted loop>
        <source src="img/bground.mp4" type="video/mp4">
        </video>
      </div>
      <div class="button1">
        <a href="projects.html" class="button">Start</a>
      </div>
    </div>
    <footer>
      <a href="https://www.bilgi.edu.tr/tr/">
      <img class="logos" src="img/bilgilogo.png" style="max-width:10%;height: auto;" alt="altlab" title="altlab" align="left"/></a>
    </footer>
  </body>
</html>