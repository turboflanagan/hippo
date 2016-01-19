<?php
	include('inc/db_connect.php');
	$_SESSION['page'] = 'register';
	$error = $_GET['error'];
	if($error=='emailexists'){
		$emailExists = true;
	}else if($error=='usernameexists'){
		$userExists = true;
	}else if($error=='nomatch'){
		$noMatch = true;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<?php include('inc/head.php') ?>
</head>
<body>
	<div id="total-wrapper">	
		<?php include('inc/header.php') ?>
		<div id="register-wrapper">
			<h1 id="heading">Save the Hippo!</h1>
			<div class="register">
				<h2 id="register-heading">Register</h2>
				<form method="post" action="processregister.php">
					<div class="form-group">
						<label>Name</label>
						<?php
							if(isset($_SESSION['name'])){
								print "<input type='text' class='form-control' value='" . $_SESSION['name'] . "' name='name' required>";
							}else{
								print "<input type='text' class='form-control' placeholder='John Doe' name='name' required>";
							}
						?>
					</div>
					<div class="form-group">
						<label>Email Address</label>
						<?php
							if(isset($_SESSION['email'])){
								print "<input type='text' class='form-control' value='" . $_SESSION['email'] . "' name='email' required>";
							}else{
								print '<input type="email" class="form-control" placeholder="johndoe@gmail.com" name="email" required>';
							}
							if(isset($emailExists)){
								print "<span class='error'>A user with this email is already registered</span>";
							}
						?>
					</div>
					<div class="form-group">
						<label>User Name</label>
						<?php
							if(isset($_SESSION['username'])){
								print "<input type='text' class='form-control' value='" . $_SESSION['username'] . "' name='username' maxlength='11' required>";
							}else{
								print '<input type="text" class="form-control" placeholder="johndoe123" name="username" maxlength="11" required>';
							}
							if(isset($userExists)){
								print "<span class='error'>User name already exists</span>";
							}
						?>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="At least 6 digits" name="password" minlength="6" required>
						<?php 
							if(isset($noMatch)){
								print "<span class='error'>Passwords must match</span>";
							}
						?>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Confirm Password" name="password2" required>
					</div>
					<div class="button-holder">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
		<?php include('inc/footer.html') ?>
	</div>
</body>
</html>