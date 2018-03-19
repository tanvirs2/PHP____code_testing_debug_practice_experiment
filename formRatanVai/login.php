<?php
	session_start();
	if(!empty($_SESSION['user'])){
		//header('location:welcome.php');
		$msg = "Login Success";
	}
	//echo $_SESSION['user'];

	include 'functions.php';
	$link = databaseConnect();
	if(isset($_POST['btn'])) {
        $userName = $_POST['userName'];
        $pass = $_POST['pass'];

        $query = 'SELECT * FROM members WHERE email = "' . $userName . '"';
        $result = mysqli_query($link, $query);


        $row = mysqli_fetch_assoc($result);

        $hash = $row['password'];
        //print_r($row);
        //var_dump($hash);
        //echo $hash;
        //exit;

        if (password_verify($pass, $hash)) {
            echo 'Match';
        } else {
            echo 'not match';
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>PHP Practice</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
	  <div class="container">
		<div class="row">
			<div class="offset-md-3">
			</div>
			<div class="col-md-6">
				<form method="post" action="">
				 <div class="form-group">
					<label for="userName">User Name</label>
					<input type="text" name="userName" class="form-control" id="userName" aria-describedby="emailHelp" placeholder="Enter Name">
				  </div>
				  <div class="form-group">
					<label for="password">Password</label>
					<input type="text" name="pass" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter Password">
				  </div>
				  
				  <button type="submit" name ="btn" class="btn btn-primary">Submit</button>
				</form><br/>
				
					
				
				
				
				
			</div>
		</div><!-- Row End -->
	  </div><!-- Container End -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>