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
    $sql="UPDATE users.users SET name = '$username', pass = '$password', email = '$email' WHERE (id = '" .$_SESSION['uname'] . "')";
    $result=mysqli_query($conn,$sql);
    if($result == 1) {
      echo "Update succeeded";
    }
    else {
      echo "Update failed";
    }
    mysqli_close($conn);
  }
?>
