<?php include 'inc/db_connect.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<? include('inc/head.php') ?>
</head>
<body>
	<? include('inc/header.php') ?>

	<div class ="container">
		<form action="submit_post.php" method="post">
			<div class="form-group">
				<label for="new-post">POST</label>
				<textarea class="form-control" rows="5" name="newPost" id="new-post"></textarea>
			</div>
			<div class="from-group">
				<input type="submit" value="Post it!" class="btn btn-primary">
			</div>

		</form>	
	</div>

	<? include('inc/footer.php') ?>


</body>
</html>