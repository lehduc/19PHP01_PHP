<!DOCTYPE html>
<html>
<head>
	<title>form tinh tong 2 so</title>
</head>
<body>
	<?php 
$errnhapa = $errnhapb = '';
if (isset($_POST['submit'])){
	if ($_POST['numb1'] == ''){
	$errnhapa = 'Please input a';
	}
	else {
	$errnhapa = '';
	}
	if($_POST['numb2'] == ''){
	$errnhapb = 'Please input b';
	}
	else {
	$errnhapb = '';
	}
}
	if (isset ($_POST['submit'])){
	echo $_POST['numb1'] + $_POST['numb2'];
	echo "<br>";
	}
?>
<h1>Tính tổng</h1>
<form action="#" name="sumnumber" method="POST">
	<p>Nhập a: 
		<input type="number" name="numb1">
	</p>
	<p class="err"><?php echo$errnhapa ?></p>
	<p>Nhập b: 
		<input type="number" name="numb2">
	</p>
	<p class="err"><?php echo$errnhapb ?></p>
	<p> 
		<input type="submit" name="submit" value="Tính">
	</p>
</form>
</body>
</html>