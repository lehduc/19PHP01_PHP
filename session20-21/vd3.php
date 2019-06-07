<!DOCTYPE html>
<html>
<head>
	<title>form dang ky</title>
	<style type="text/css">
		.err{
			color: red;
		}
	</style>
</head>
<body>
<?php 
$errName = $errEmail = $errPhone = $errSex = $errBirthday = '';
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
	if(empty($_POST['sex']) == true){
	$errSex = 'Please choose Sex';
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
		if (isset($_POST['sex']))
			echo $_POST['sex'];
			echo "<br>";
		echo $_POST['hometown'];
		echo "<br>";
		echo $_POST['birthday'];
		echo "<br>";
	}
?>
<h1>Register form</h1>
<form action="#" name="RegisterForm" method="POST">
	<p>Name: <input type="text" name="name"></p>
		<p class="err"><?php echo$errName ?></p>
	<p>Email: <input type="text" name="email"></p>
		<p class="err"><?php echo$errEmail ?></p>
	<p>SĐT: <input type="text" name="phone"></p>
		<p class="err"><?php echo$errPhone ?></p>
	<p>Giới Tính:
		<input type="radio" name="sex" value="Nam">Nam
		<input type="radio" name="sex" value="Nữ">Nữ <br>
	</p>	
	<p class="err"><?php echo$errSex ?></p>
	<p>Quê Quán: 
		 <select name="hometown">
            <option value="Hà Nội">Hà Nội</option>
            <option value="Quảng Ninh">Quảng Ninh</option>
            <option value="Nam Định">Nam Định</option>
            <option value="Quảng Bình">Quảng Bình</option>
            <option value="Quảng Trị">Quảng Trị</option>
            <option value="Đà Nẵng">Đà Nẵng</option>
            <option value="Quảng Nam">Quảng Nam</option>
            <option value="Quảng Ngãi">Quảng Ngãi</option>
            <option value="Bình Định">Bình Định</option>
        </select>
	</p>

	<p>Ngày Sinh: <input type="date" name="birthday"></p>
		<p class="err"><?php echo$errBirthday ?></p>
	<p><input type="submit" name="submit" value="Submit"></p>
</form>	
</body>
</html>