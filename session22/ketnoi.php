<?php  
	// thong tin ket noi
	$sever = 'localhost'; //$sever = '127.0.0.1'
	$username = 'root'; // username default
	$password = '';// password default
	$database = 'dulieu';//ket noi den database nay

	//thuc hien ket noi
	$connect = mysqli_connect($sever, $username, $password, $database);
	//var_dump($conenect);

	//kiem tra ket noi
	if ($connect === FALSE) {
		echo "Connect fail".mysqli_connect_error();
	} else {
		echo "Connect success!";
	}

	//du lieu chen vao
	//$name = 'Phom test';
	//$email = 'duchuynh1797@gmail.com';
	//$phone = '0349818101';
	//$avatar = 'ok.jpg';
	//$city = 'hue';
	//$gender = 'male';

	$username = "phomphom";
	$password = "01233210";

	// lenh thuc thi
	//$sql = "INSERT INTO users (name, email, phone, avatar, city, gender) VALUES ('$name','$email','$phone','$avatar','$city','$gender')";
	

	//$sql = "INSERT INTO users (name, email, phone, avatar, city, gender) VALUES ('$username','$password')";

	$sql = "INSERT INTO admin (username, password) VALUES ('$username','$password')";
	
	if (mysqli_query($connect, $sql) === TRUE) {
		echo "Register success";
	} else {
		echo "Register error";
	}

?>