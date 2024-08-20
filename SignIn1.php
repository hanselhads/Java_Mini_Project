<?php
session_start();

  include("connection.php");
  include("Functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
   //something was posted
   $full_name = $_POST['full_name'];
   $username = $_POST['username'];
   $password = $_POST['password'];


   if(!empty($full_name) && !empty($username) && !empty($password))
   {
      //save to database
 	    $user_id = random_num(4);
      $query = "insert into user (user_id,full_name,username,password) values ('$user_id','$full_name','$username','$password')";

      mysqli_query($con , $query);

      header("Location: Login1.php");
      die;
   }else
   {
      echo "Please enter valid information";
   }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link rel="stylesheet" href="CSS/l_style.css">
  </head>
  <body>
    <div class="Center">
      <h1>Sign Up</h1>
      <form method="post">
        <div class="Field">
          <input type="text" required name="full_name" value="">
          <span></span>
          <label>Full Name</label>
        </div>
        <div class="Field">
          <input type="text" required name="username" value="">
          <span></span>
          <label>Username</label>
        </div>
        <div class="Field">
          <input type="text" required name="password" value="">
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" name="" value="Login">
        <div class="SignUp">
          Already A Member? <a href="Login1.html">Login</a>
        </div>
      </form>
    </div>
  </body>
</html>
