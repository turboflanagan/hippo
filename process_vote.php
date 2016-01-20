<?php
	include 'inc/db_connect.php';

	//Just in case the user gets smart and changes the JS... check on the server
	if(isset($_SESSION['uid'])){
		DB::$error_handler = 'my_error_handler';
			//Double check that they havent already voted on this
			$results = DB::query("SELECT * FROM post_votes WHERE voter_user_id=%i AND post_id=%i", $_SESSION['uid'],$_POST['vid']);
			$counter = DB::count();  // Returns the count of matching selections in DB.
			if($counter > 0){  // If the counter is greater than 0, the user logged in has already voted on the selection.  Tell user they already voted on it.
				print "You already voted on that one.";
			}else{
				// If counter is 0, post has not been voted on, so insert it into the DB.
				DB::insert('post_votes', array(
				  'voter_user_id' => $_SESSION['uid'],
				  'vote' => $_POST['voteType'], // voteType is either Up vote or Down vote
				  'post_id' => $_POST['vid'],
				));
			//if the user is following, then clicked to unfollow. Delete the relationship
			DB::$error_handler = 'my_error_handler';


			function my_error_handler($params) {
			  echo "Error: " . $params['error'] . "<br>\n";
			  echo "Query: " . $params['query'] . "<br>\n";
			  die; // don't want to keep going if a query broke
			}

			//Get the total vote count
			$total_votes = DB::query("SELECT sum(vote) as total FROM post_votes WHERE post_id=".$_POST['vid']);
			print_r($total_votes[0]['total']);
		}
	}else{
		print "login";
	}

?>