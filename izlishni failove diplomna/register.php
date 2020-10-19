<?php
session_start();
require('./php/db_connection.php');
require_once('C:/xampp/htdocs/BarcaTrain/smarty/config.php');

if(isset($_POST['buttonregg'])){

	$email = $_POST['email'];
	mysql_real_escape_string($email);
	$username = $_POST['username'];
	mysql_real_escape_string($username);
	$password = $_POST['password'];
	mysql_real_escape_string($password);
	$password = md5($password);
	$repassword = $_POST['cpassword'];
	mysql_real_escape_string($repassword);
	$repassword = md5($repassword);
	
 
mysqli_query($conn,"SET NAMES 'utf8'");


$sql = "insert into users (username, email, password) values ('$username', '$email', '$password')";

//$result = mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Successful registration")</script>';
	echo '<script>window.location="home.html"</script>';

	//$smarty->display('home.html');
	
} else {
	
	
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}