<?php
session_start();
require_once 'admin/config/db.php';
if(isset($_POST) & !empty($_POST)){
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$password = $_POST['password'];
	$sql = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($con, $sql) or die(mysqli_error($con));
	$count = mysqli_num_rows($result);
	$r = mysqli_fetch_assoc($result);

	if($count == 1){
		if(password_verify($password, $r['password'])){
			//echo "User exits, create session";
			$_SESSION['customer'] = $email;
			$_SESSION['customerid'] = $r['id'];
			$_SESSION["up_allow"] = "ok";
			header("location: checkout.php");
		}else{
			//$fmsg = "Invalid Login Credentials";
			header("location: login.php?message=1");
		}
	}else{
		header("location: login.php?message=1");
	}
}
?>