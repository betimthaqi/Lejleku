user<?php
	require 'php/loginconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Regjistrimi</title>
<link rel="stylesheet" href="css/stylelogin.css">
</head>
<body style="background-color:#080613">

	<div id="main-wrapper">
		<center>
			<h2>Regjistrimi</h2>
			<img src="images/logo.png" class="logo"/>
		</center>

		<form class="myform" action="register.php"method="post">
			<label><b>Emri:</b></label><br>
			<input name="fullname" type="text" class="inputvalues" placeholder="Type your Full Name" required/><br>
			<label><b>Gjinia:</b></label>
			<input type="radio" class="radiobtns" name="gender" value="male" checked required> M
			<input type="radio" class="radiobtns" name="gender" value="female" required> F <br>
			<label><b>Kualifikimi</b></label>
			<select class="qualification" name="qualification">
			  <option value="Shkollefillore">Shkolle fillore</option>
				<option value="ShkolleLarte">Shkolle e larte</option>
			  <option value="Bms">Bachelor</option>
			  <option value="Bsc">Master</option>
			  <option value="Phd">Doktorrature</option>
			</select><br>
			<label><b>Username:</b></label><br>
			<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
			<label><b>Password:</b></label><br>
			<input name="password" type="password" class="inputvalues" placeholder="Your password" required/><br>
			<label><b>Confirm Password:</b></label><br>
			<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
			<input name="submit_btn" type="submit" id="signup_btn" value="Regjistrohu"/><br>
			<a href="login.php"><input type="button" id="back_btn" value="Kthehu"/></a>
		</form>

		<?php
			if(isset($_POST['submit_btn']))
			{

				$fullname =$_POST['fullname'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				$gender = $_POST['gender'];
				$qualification = $_POST['qualification'];

				if($password==$cpassword)
				{
					$encryptet_password = md5($password);
					$query= "select * from user WHERE username='$username'";
					$query_run = mysqli_query($con,$query);

					if(mysqli_num_rows($query_run)>0)
					{
						echo '<script type="text/javascript"> alert("Perdoruesi ekziston, provoni nje username tjeter") </script>';
					}
					else
					{
						$query= "insert into user values ('$username','$encryptet_password','$fullname','$gender','$qualification')";
						$query_run = mysqli_query($con,$query);

						if($query_run)
						{
							header('location:login.php');
						}
						else
						{
							echo '<script type="text/javascript"> alert("'.mysqli_error($con).'") </script>';
						}
					}
				}
				else{
				echo '<script type="text/javascript"> alert("Passwordi dhe confirm password nuk perputhen!") </script>';
				}
			}
		?>
	</div>
</body>
</html>
