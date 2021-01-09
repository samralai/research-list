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
        <li><a href='./'>Home</a></li>
        <li><a href='projects.php'>Projects</a></li>
        <li><a class='active' href='news.php'>News</a></li>";
if(is_null($id)) {
  echo "<li><a href='login.html'>SignIn</a></li>
  <li><a href='signup.html'>SignUp</a></li>";
} else {
  echo "<li><a href='myprofile.php'>My Profile</a></li>
  <li><a href='utility/logout.php'>Log Out</a></li>";
}
?>
      </ul>
    </nav>    
      <footer>
      <a href="https://www.bilgi.edu.tr/tr/">
          <img class="logos" src="img/bilgilogo.png" style="max-width:10%;height: auto;" alt="altlab" title="altlab" align="left"/></a>
      </footer>
      <form class="projects-body">
        <div class="home-box custom-box hide">
          <h3>Instruction:</h3>
          <p>Total number of questions: <span class="total-questions">3</span></p>
          <button type="button" class="btn">Ready</button>
        </div>
        <div class="quiz-box custom-box">
          <div class="question-number">
            
          </div>
          <div class="question-text">
            
          </div>
          <div class="option-container">
            
          </div>
          <div class="next-question-btn">
            <button type="button" class="btn" onclick="next()">Next</button>
          </div>
          <div class="answers-indicator">
            
          </div>
          
        </div>
        <script src="script.js"></script>
        <script src="app.js"></script>
      </form>
  </body>
</html>