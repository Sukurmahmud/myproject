

<?php
	include("connection.php");
	include("header_admin.php");
	

	//session_start();
	//echo $_SESSION['user_email_log'];


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
</head>
<body>
<div class="">
	<div class="">
		<div class="row">
			<div class="col-md-2">
				<?php 
				include("sidebaradmin.php");
				?>
			</div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-3 bg-warning m-3 p-3 text-white-50 text-opacity-75">
						<h3>5</h3>
						<h2>Total Books</h2>
					</div>
					<div class="col-md-3 bg-info m-3 p-3 text-light text-opacity-75">
						<h3>5</h3>
						<h2>Total Users</h2>
					</div>
					<div class="col-md-3 bg-secondary m-3 p-3 text-light text-opacity-75">
						<h3>5</h3>
						<h2>Return today</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
