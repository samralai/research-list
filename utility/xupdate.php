<?php
  session_start();
  $username= $_POST['name'];
  $password= $_POST['pass'];
  $email= $_POST['email'];
  $id= $_SESSION['id'];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("Invalid email format");
  } else {
    $conn= new mysqli('localhost','phpmyadmin','phpmyadmiN@123','users');
    if(!$conn){
        die("CONNECTION FAILED".mysqli_connect_error());
    }
    $sql="UPDATE users.users SET name = '$username', pass = '$password', email = '$email' WHERE (id = '" . $id . "')";
    $result=mysqli_query($conn,$sql);
    if($result == 1) {
      echo $sql;
      echo "Update succeeded";
    }
    else {
      echo "Update failed";
    }
    mysqli_close($conn);
  }
?>
