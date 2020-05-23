<?php
//message vars

$msg= '';
$msgClass ='';
//check for Submit
////kjo <?php echo isset($_POST['name']) ? $name :''; per me rujt qato qe i ka shkru nese e bon fail najsen
//

if(filter_has_var(INPUT_POST,'submit')){
//get form data
$name=htmlspecialchars($_POST['name']);
$email=htmlspecialchars($_POST['email']);
$message=htmlspecialchars($_POST['message']);
//check required fields
if(!empty($email) && !empty($name) && !empty($message)){
//pass
//check email
		if(filter_var($email, FILTER_VALIDATE_EMAIL)==false)
{
	$msg='Please use a valid email (example@gmail.com)';
	$msgClass='alert-danger';

}
			else {
	//pass
		//$msg='Your email was sent';
		$msg="Thanks ".$_POST['name'].".We'll get back to you soon!";
		$msgClass='alert-success';
		}

}
else{
	//fail
	$msg='Please fill in all fields';

	$msgClass='alert-danger';

	}

}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Contact us</title>
	<link rel="icon" href="images/logo-bar.png" type="image/x-icon">
	<link rel="stylesheet" href="css/conStyle.css">

</head>
<body>
	<nav class="navbar navbar-default">

		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Lejleku</a>
			</div>

	</nav>

	<div class="container">
<div class="center"><h1>CONTACT US FOR ANY QUESTION</h1></div>



	<?php if($msg!=''): ?>
		<div class ="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
	<?php endif; ?>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

	<div class="container">



			<label for="fname">Full Name</label>
			<input type="text"  name="name"value="<?php echo isset($_POST['name']) ? $name :'';?>">

			<label for="fname">Email</label>
			<input type="text" name="email" value="<?php echo isset($_POST['email']) ? $email :'';?>">

			<label for="subject">Message</label>
			<textarea name="message"  style="height:200px"><?php echo isset($_POST['message']) ? $message :'';?></textarea>

			<input type="submit" name="submit" class="">
			</form>

		</div>
	</div>

</body>
</html>
