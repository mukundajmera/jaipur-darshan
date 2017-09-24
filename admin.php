<?php
ob_start();
?>
<html>
<head>
<title>Admin Login</title>
<link rel="shortcut icon" href="images/images-5.jpeg">
</head>
<body font="Tahoma" bgcolor="#33CCCC">
<center>
<h1>Welcome Admin</h1><br>
<b>
<form method="get" action="adminlogin.php">
Login ID: 
  <input type="text" name="username" required  autocomplete="off"><br><br>
Password: <input type="password" name="password" required  > 
<br><br>
  <input type="submit" name="login" value="Sign In"> 
</form>

</b>
</center>
</body>
</html>
