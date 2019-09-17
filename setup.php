<?php
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		$uname = $_POST['inputUsername'];
		$password = $_POST['inputPassword'];
		
	}
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.5">
	<title>Floating labels example · Bootstrap</title>
	<!-- Bootstrap core CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<!-- Custom styles for this template -->
	<link href="app/assets/css/floating.css" rel="stylesheet">
</head>

<body>
	<form class="form-signin" method="POST" action="setup.php">
		<div class="text-center mb-4">
			<h1 class="h3 mb-3 font-weight-normal">Laravel Database Helper</h1>
			<p>
				This plugin enables you to automatically generate <code>Laravel Models</code> for a project with already existing database schema 
				<a href="https://caniuse.com/#feat=css-placeholder-shown">Star this repo on Github.</a>
			</p>
			<p>
				This graphical utility takes you through the steps to select a database from your existing database schemas.
			</p>
		</div>

		<div class="form-label-group">
			<input type="text" id="inputUsername" name="inputUsername" class="form-control" placeholder="Email address" required autofocus autocomplete="off">
			<label for="inputUsername">Database Username</label>
		</div>

		<div class="form-label-group">
			<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
			<label for="inputPassword">Password</label>
		</div>

		<button class="btn btn-lg btn-primary btn-block" type="submit">Connect</button>
	</form>
</body>

</html>