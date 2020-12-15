<?php
  $username= $_POST['name'];
  $password= $_POST['pass'];
  $conn= new mysqli('localhost','phpmyadmin','phpmyadmiN@123','users');
  $check="SELECT id FROM users.users WHERE name='$username'";
  $check_result=$conn->query($check);
  if ($check_result->num_rows === 0) {
    echo("Log in Failed -- The username that you've entered doesn't match any account.");
  } else {
    if(!$conn){
        die("CONNECTION FAILED".mysqli_connect_error());
    }
    echo("Log in status: ");
    if(isset($username,$password)){
        $sql = "SELECT * FROM users.users WHERE name='$username' AND  pass='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo ("Succeeded!");
            }
        } else {
            echo ("Failed - Error: Invalid Password");
        }
    } else {
        echo ("Failed - Error: 2");
    }
    mysqli_close($conn);
  }
?>