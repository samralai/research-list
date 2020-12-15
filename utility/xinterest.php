<?php
  $username= $_POST['username'];
  $interests= $_POST['interests'];
  $education= $_POST['education'];
  $time= $_POST['time'];
  $conn= new mysqli('localhost','phpmyadmin','phpmyadmiN@123','users');
  if(!$conn){
    die("CONNECTION FAILED".mysqli_connect_error());
  }
  $sql="INSERT INTO users.interest (name, interests, education, time) VALUES ('$username', '$interests', '$education', '$time')";
  $result=mysqli_query($conn,$sql);
  if($result == 1) {
    echo("Submit succeeded");
  }
  mysqli_close($conn);
?>