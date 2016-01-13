<?php 
	
	include('inc/db_connect.php');

	print "<h1>Home Page</h1>"; 


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
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div id="form-image"><img src="/public/images/christmas-hippo-card.jpg" alt="">
		<div class="container">
			<div class="row centered-form">
				<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Save the Christmas Hippopotomussesss... <small>We need you!!</small></h3>
						</div>
						<div class="panel-body">
							<form role="form">
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
	</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>