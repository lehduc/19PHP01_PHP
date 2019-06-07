<?php 
$errName = $errEmail = $errPhone = $errSex =$errBirthday = '';
if (isset($_POST['submit'])){
	if ($_POST['name'] == ''){
	$errName = 'Please input Name';
	}
	else {
	$errName = '';
	}
	if($_POST['email'] == ''){
	$errEmail = 'Please input Email';
	}
	else {
	$errEmail = '';
	}
	if($_POST['phone'] == ''){
	$errPhone = 'Please input phone';
	}
	else {
	$errPhone = '';
	}
	if($_POST['sex'] == ''){
	$errSex = 'Please input Sex';
	}
	else {
	$errSex = '';
	}
	if($_POST['birthday'] == ''){
	$errBirthday = 'Please input Birthday';
	}
	else {
	$errBirthday = '';
	}
}
	if (isset ($_POST['submit'])){
		echo $_POST['name'];  
		echo "<br>";
		echo $_POST['email'];
		echo "<br>";
		echo $_POST['phone'];
		echo "<br>";
		echo $_POST['sex'];
		echo "<br>";
		echo $_POST['hometown'];
		echo "<br>";
		echo $_POST['birthday'];
		echo "<br>";
	}
?>