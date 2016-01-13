<?php

$username = $_POST['username'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	try{
		DB::select('users', array(
			'uid' => '',
			'name' => $username,
			'password' => $hashed_password,
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