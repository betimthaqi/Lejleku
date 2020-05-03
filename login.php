<?php
	session_start();
	require 'php/loginconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Kyçja</title>
<link rel="stylesheet" href="css/stylelogin.css">
</head>
<body style="background-color:#080613">

	<div id="main-wrapper">
		<center>
			<h2>Kyçu</h2>
			<img src="images/logo.png" class="logo"/>
		</center>

		<form class="myform" action="index.php" method="post">
			<label><b>Username:</b></label><br>
			<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
			<label><b>Password:</b></label><br>
			<input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br>
			<input name="login" type="submit" id="login_btn" value="Kyçu"/><br>
			<a href="register.php"><input type="button" id="register_btn" value="Regjistrohu"/></a>
		</form>


	</div>
</body>
</html>
