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
	$msg='Please use a valid email';
	$msgClass='alert-danger';
}
			else {
	//pass
		$msg='Your email was sent';
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
	<link rel="stylesheet" href="conStyle.css">
	
</head>
<body>
	<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Lejleku</a>
			</div>
		</div>
	</nav>

	<div class="container">
	<?php if($msg!=''): ?>
		<div class ="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
	<?php endif; ?>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<div class="container">  
  <!--<form id="contact" action="" method="post">-->
  
		<!--<div class="form-group">-->

			<label for="fname">Full Name</label>
			<input type="text" id="fname" name="name"value="<?php echo isset($_POST['name']) ? $name :'';?>">
		<!--</div>-->
		<!--<div class="form-group">-->
			<label for="fname">Email</label>
			<input type="text" id="fname" name="email" value="<?php echo isset($_POST['email']) ? $email :'';?>">
		<!--</div>-->
		<!--<div class="form-group">-->
			<label for="subject">Message</label>
			<textarea name="message" id="subject" style="height:200px"><?php echo isset($_POST['message']) ? $message :'';?></textarea>
			<!--</div>-->
			<input type="submit" name="submit" class="">
			</form>
		
		</div>
	
			
</body>
</html>