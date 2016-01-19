<?php 

	include 'inc/db_connect.php'; 

	try {
		DB::insert('posts', array(
			'user_id' => $_SESSION['user_id'],
			'content' => $_POST['newPost'],
		));
	}catch(MeekroDBException $e) {
		header('Location: /signup.php?error=yes');
		exit;
	}
	header('Location: /?callback=post');
	exit;

?>