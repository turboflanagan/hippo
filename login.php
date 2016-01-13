<?php

	include('inc/db_connect.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$results = DB::query("SELECT * FROM users WHERE username=%s", $username);
	foreach($results as $result){
		$hash = result['pass'];
		$uid = $result['uid'];
	}

	$pass_verify = password_verify($password, $hash);
	if($pass_verify){
		//password is their proper password.
		$_SESSION['username'] = $username;  // Sets the session username to $username
		$_SESSION['uid'] = $uid;  // Sets the session uid to $uid
	}

	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		try{
			DB::select('users', array(
				// 'uid' => '',
				'name' => $username,
				'pass' => $hashed_password,
				'status' => 1
			));
		}catch(MeekroDBException $e){
			header('Location: /signup.php?error=yes');
			exit;
		}

		$_SESSION['username'] = $username;
		$_SESSION['uid'] = DB::insertId();  // This meekroDB method will get the last uid added to the DB.
		header('Location: /?callback=registration');


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Daily UI - Day 1 Sign In</title>

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<label for="username">Username</label>
			<br/>
			<input type="text" id="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password">
			<br/>
			<button type="submit">Sign In</button>
			<br/>
			<a href="#"><p class="small">Forgot your password?</p></a>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>