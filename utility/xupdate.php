<?php
  session_start();
  $username= $_POST['name'];
  $password= $_POST['pass'];
  $email= $_POST['email'];
  $fullname= $_POST['fullname'];
  $id= $_SESSION['id'];

  $conn= new mysqli('localhost','phpmyadmin','phpmyadmiN@123','users');
  if(!$conn){
      die("CONNECTION FAILED".mysqli_connect_error());
  }

  $checkvalue = "SELECT * FROM users.users WHERE id != ('" . $id . "') AND (name='$username' OR email='$email')";
  $checkresult=mysqli_query($conn,$checkvalue);

  if($checkresult->num_rows > 0) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo("Invalid email format");
    } else {
      $sql="UPDATE users.users SET name = '$username', pass = '$password', email = '$email', fullname = '$fullname' WHERE (id = '" . $id . "')";
      $result=mysqli_query($conn,$sql);
      if($result == 1) {
        echo "Update succeeded";
      }
      else {
        echo "Update failed";
      }
    }
  }
  else {
    echo "Error - Duplicated Username or Email";
  }
  mysqli_close($conn);
?>