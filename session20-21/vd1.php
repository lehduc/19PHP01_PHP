<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<?php 
$errName = $errpass = '';
if (isset($_POST['register'])){
	if ($_POST['name'] == ''){
	$errName = 'Please input yourname';
	}
	else {
	$errName = '';
	}
	if($_POST['password'] == ''){
	$errpass = 'Pleas input your password';
	}
	else {
	$errpass = '';
	}
}
	if (isset ($_POST['name'])){
	echo $_POST['name'];
	echo "<br>";
	echo $_POST['password'];
	}
?>
<h1>Register form</h1>
<form action="#" name="RegisterForm" method="POST">
	<p>Name: 
		<input type="text" name="name">
	</p>
	<p class="err"><?php echo$errName ?></p>
	<p>PassWord: 
		<input type="text" name="password">
	</p>
	<p class="err"><?php echo$errpass ?></p>
	<p>PassWord: 
		<input type="submit" name="register" value="Register">
	</p>
</form>
</body>
</html>