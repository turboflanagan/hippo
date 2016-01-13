<?php

	include('inc/db_connect.php');

print "<pre>";
print_r($_POST);
print_r($_GET);
print_r($_SESSION);
print_r($_REQUEST);
exit;



	$username = $_POST['username'];
	$password = $_POST['password'];

	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		try{
			DB::insert('users', array(
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