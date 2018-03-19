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
				<form method="post" action="insert.php">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
					</div>
					<div class="form-group">
						<label for="email">Email address</label>
						<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="pass" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter Password">
					</div>
					<div class="form-group">
						<label for="mobile">Mobile</label>
						<input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile">
					</div>
					<button type="submit" name="btn" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div><!-- Row End -->
	  </div><!-- Container End -->
      <br>
      <br>
      <hr>
      <?php

      $myVar = 10;

      for ($i = 0; $i<$myVar; $i++) {
          for ($j = 0; $j < $i; $j++) {
              echo ' * ';
          }
          echo '<br>';
      }

      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>