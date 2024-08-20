<?php

 session_start();

  include("connection.php");
  include("Functions.php");

  $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Home</title>
</head>

<body>
<a href="Login.php">Logout</a>
 <h1>Welcome to the page</h1>
</body>
</html>