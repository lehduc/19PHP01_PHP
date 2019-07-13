<?php 
	// thong tin ket noi database
	$server = 'localhost'; //$server = '127.0.0.1'
	$username = 'root'; // username default
	$password = 'none'; // password default
	$database = '19php01_demo1'; // ket noi den database nay
	
	// thuc hien ket noi database
	$connect = mysqli_connect($server, $username, $password, $database);

	// kiem tra ket noi database
	if ($connect === FALSE) {
		echo "Connect fail ".mysqli_connect_error();
	}

	// du lieu dung de chen vao users
	$name = 'Phom Phom'; // $name = $_POST['name'];
	$email = 'duchuynh1797@gmail.com';
	$phone = '0349818102';
	$avatar = 'ok.jpg';
	$city = 'quang tri';
	$gender = 'male';

	// cau lenh insert du lieu
	$sql = "INSERT INTO users (name, email, phone, avatar, city, gender) VALUES ('$name', '$email', '$phone', 'avatar', '$city', '$gender')";

	// thuc thi cau lenh 
	if (mysqli_query($connect, $sql) === TRUE) {
		echo "Register success!";
	} else {
		echo "Register error";
	}

?>