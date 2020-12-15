<?php
  $username= $_POST['name'];
  $password= $_POST['pass'];
  $email= $_POST['email'];

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("Invalid email format");
  } else {
    $conn= new mysqli('localhost','phpmyadmin','phpmyadmiN@123','users');
    if(!$conn){
        die("CONNECTION FAILED".mysqli_connect_error());
    }
    $sql="INSERT INTO users.users (name, pass, email) VALUES ('$username', '$password', '$email')";
    $result=mysqli_query($conn,$sql);
    if($result == 1) {
      echo("Sign up succeeded");
    }
    else {
      echo("Sign up failed");
    }
    mysqli_close($conn);
  }
?>
