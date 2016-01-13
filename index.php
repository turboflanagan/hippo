<?php 
	
	include('inc/db_connect.php');

	$results = DB::query("SELECT * FROM users");
	foreach($results as $result){
		print "<pre>";
		print_r($result);
		print "</pre>";

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>

	<div id="form-image">
		<img src="/public/images/christmas-hippo-card.jpg" alt="Christmas Hippo Card">
	</div>

		<div class="container">
			<div class="row centered-form">
				<div class="col-xs-10 col-sm-8 col-md-6 col-xs-offset-1 col-sm-offset-2 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Save the Christmas Hippopotomussesss... <small>We need you!!</small></h3>
						</div>
						<div class="panel-body">
							<form role="form" method="post" action="register.php">
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
										</div>
									</div>
								</div>
	
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
								</div>
	
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
										</div>
									</div>
								</div>
	
								<input type="submit" value="Register" class="btn btn-info btn-block">
	
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>


	<div class="container">
		<div class="row centered-form">
			<div class="col-xs-10 col-sm-8 col-md-6 col-xs-offset-1 col-sm-offset-2 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>Log In</h2>
					</div>
					<div class="panel-body">
						<form role="form" method="post" action="register.php">
							<div class="form-group col-xs-8 col-sm-8 col-md-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2">
								<input type="text" name="username" id="username" class="form-control input-sm" placeholder="Username">
							</div>

							<div class="form-group col-xs-8 col-sm-8 col-md-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2">
								<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
							</div>
							<input type="submit" value="Login" id="login-button" class="col-xs-2 btn btn-info btn-block">

						</form>
					</div>








<!-- 			<label for="username">Username</label>
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
 -->
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</body>
</html>



