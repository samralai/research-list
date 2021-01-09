<html>
	<head>
		<meta charset="utf-8">
		<title>My Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
	</head>
	<body >
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
        <li><a href='news.php'>News</a></li>";
if(is_null($id)) {
  echo "<li><a href='login.html'>SignIn</a></li>
  <li><a href='signup.html'>SignUp</a></li>";
} else {
  echo "<li><a class='active' href='myprofile.php'>My Profile</a></li>
  <li><a href='utility/logout.php'>Log Out</a></li>";
}
echo "</ul></nav><div allign='center'>";

$con=mysqli_connect("localhost","phpmyadmin","phpmyadmiN@123","users");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(is_null($id)) {
  echo "<table><center><h1 style='color:white'>You are not logged in!</h1></br><h2 style='color:white'>Please sign in to your account.</h2></br><h2 style='color:white'>If you don't have an account you can sign up!</h2></center><table>";
} else {
$selected_name = mysqli_query($con,"SELECT name FROM users WHERE id=$id");
$selected_pass = mysqli_query($con,"SELECT pass FROM users WHERE id=$id");
$selected_email = mysqli_query($con,"SELECT email FROM users WHERE id=$id");
$selected_fullname = mysqli_query($con,"SELECT fullname FROM users WHERE id=$id");
echo "<table class='container'>
  <form name='myform' action='./utility/xupdate.php' method='POST'>
    <tr>
      <td>
        <font>Full Name</font>
      </td>
      <td>";
while($row = mysqli_fetch_array($selected_fullname)) {
  echo "<input class='input' type='text' name='fullname' id='fullname' value='" . $row['fullname'] . "'>";
}
echo "
      </td>
    </tr>
    <tr>
      <td>
        <font>Username</font>
      </td>
      <td>";
while($row = mysqli_fetch_array($selected_name)) {
  echo "<input class='input' type='text' name='name' id='pass' value='" . $row['name'] . "'>";
}
echo "
      </td>
    </tr>
    <tr>
      <td>
        <font>E-Mail</font>
      </td>
      <td>";
while($row = mysqli_fetch_array($selected_email)) {
  echo "<input class='input' type='text' name='email' id='email' value='" . $row['email'] . "'>";
}
echo "
      </td>
    </tr>
    <tr>
      <td>
        <font></font>
      </td>
      <td>
        <button type = 'submit' name='update'>Update</button>
      </td>
    </tr>
  </form>
</table>";

// Change Password

echo "<table class='container'>
  <form name='changepasswordform' action='./utility/xupdatepass.php' method='POST'>
    <tr>
      <td>
        <font>Current Password</font>
      </td>
      <td>
        <input class='input' type='password' name='cpass' id='cpass' value='' placeholder=''>
      </td>
    </tr>
    <tr>
      <td>
        <font>New Password</font>
      </td>
      <td>
        <input class='input' type='password' name='npass' id='npass' value='' placeholder=''>
      </td>
    </tr>
    <tr>
      <td>
        <font></font>
      </td>
      <td>
        <button type = 'submit' name='update'>Update</button>
      </td>
    </tr>
  </form>
</table>";
}

mysqli_close($con);
?>
		</div>
	</body>
</html>
