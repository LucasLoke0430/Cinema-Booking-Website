<?php
session_start();
$server = "localhost";
$username = "root";
$pass = "";
$db = "movieoom";

$conn = mysqli_connect($server,$username,$pass,$db);

if(mysqli_connect_error()){
	echo "Failed to connect mySQL.";
}else{
	echo "Connected!";
}

$username = $_POST['uname'];
$email = $_POST['email'];
$phone = $_POST['contact'];
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];
$gender = $_POST['sex'];
$genre = $_POST['genre'];

$checkuname = "SELECT * FROM users WHERE username = '". mysqli_real_escape_string($conn,$username) . "'";
$resultt = mysqli_query($conn,$checkuname);
if($resultt){
	$rowCount = mysqli_num_rows($resultt);

	if($rowCount > 0){
		$_SESSION['taken']= "Name is taken !!";
		header('Location:register.php');
		die($conn);
	}
}

if(!preg_match("/^\(?(\d{3})\)?[-]?(\d{3,4})[-]?(\d{4})$/",$phone)){
	$_SESSION['phonewrong'] = "Phone format not correct..";
	header('Location:register.php');
	die($conn);
}
	

$checkemail = "SELECT * FROM users WHERE email = '" . mysqli_real_escape_string($conn,$email) . "'";
$resulttt = mysqli_query($conn,$checkemail);
if($resulttt){
	$rowCount = mysqli_num_rows($resulttt);

	if($rowCount > 0){
		$_SESSION['emailtaken']= "Email is taken !!";
		header('Location:register.php');
		die($conn);
	}
}

if($password !== $rpassword){
	$_SESSION['status'] = "Password is not same !!";
	header('Location:register.php');
	die($conn);
}

$sql = "INSERT into users VALUES(null,'$username','$email','$phone','$password','$gender','$genre')";
$result = mysqli_query($conn,$sql);
if($result){
	$_SESSION['success'] = "Register successfully...";
	header('Location:login.php');
}else{
	$_SESSION['success'] = "Something went wrong..please try again";
	header('Location:login.php');
	die($conn);
}

mysqli_close($conn);
header('Location:login.php');

?>