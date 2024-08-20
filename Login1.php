<?php
session_start();


  include("connection.php");
  include("Functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
   //something was posted
   $username = $_POST['username'];
   $password = $_POST['password'];


   if(!empty($username) && !empty($password))
   {
      //read from database
      $query = "select * from user where username = '$username' limit 1";

      $result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result) > 0)
        {
     		$user_data = mysqli_fetch_assoc($result);
     		if($user_data['password'] === $password)
   		 	{
				$_SESSION['username'] = $user_data['username'];
				header("Location: Dashboard.html");
      		      die;
			}
        }
      }
	echo "Please enter valid information";
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
    <title>Login</title>
    <link rel="stylesheet" href="CSS/l_style.css">
  </head>
  <body>
    <div class="Center">
      <h1>Login</h1>
      <form method="post">
        <div class="Field">
          <input type="text" name="username" value="" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="Field">
          <input type="text" name="password" value="" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="Pass">Forgot Password?</div>
        <input type="submit" name="" value="Login">
        <div class="SignUp">
          Not A Member? <a href="http://localhost/lgin/SignIn1.php">Sign Up</a>
        </div>
      </form>
    </div>
  </body>
</html>
