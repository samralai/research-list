<?php
  session_start();
  $cpass = $_POST['cpass'];
  $npass = $_POST['npass'];
  $id= $_SESSION['id'];
  if ($cpass == $npass) {
    echo("Both passwords are identical!");
  } else {
    $conn= new mysqli('localhost','phpmyadmin','phpmyadmiN@123','users');
    if(!$conn){
        die("CONNECTION FAILED".mysqli_connect_error());
    }
    $check = "SELECT * FROM users.users WHERE id = '" . $id . "' AND  pass='$password'";
    echo $check;
    echo "<br>";
    $checkresult=mysqli_query($conn,$check);
    if($checkresult->num_rows > 0) {
        $sql="UPDATE users.users SET pass = '$password' WHERE (id = '" . $id . "')";
        $result=mysqli_query($conn,$sql);
        if($result == 1) {
        echo $sql;
        echo "Update succeeded";
        }
        else {
        echo "Update failed";
        }
    }
    else {
        echo "Failed - Error: Invalid Password";
    }
    mysqli_close($conn);
  }
?>
