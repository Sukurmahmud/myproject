

<?php
	include("connection.php");


	//session_start();
	//echo $_SESSION['user_email_log'];


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Pannel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<style type="text/css">
		.side_bar_admin{
			height: 580px;
			font-size: 18px;
			font-family: sans-serif;
		}
		.sidebar a li:hover{
			background: black;
			opacity: 0.5;
			color: #fff;
		}
	</style>
</head>
<body  style="margin:0; padding:0;">
<div class="side_bar_admin  bg-black p-2 ">
	<div dir="row">
		<div class="sidebar ">
			<ul class="p-3">

				<a style="text-decoration: none;" href="dashboard.php"><li style="list-style: none; " class="p-2 text-light text-opacity-75">Dashboard</li></a>
				<li style="list-style:none; cursor: pointer;">
					<div class="dropdown  ">
					  <p class="p-2 text-light text-opacity-75" data-bs-toggle="dropdown" aria-expanded="false">Books</p>
					  <ul class="dropdown-menu">	    
					    <li><a class="dropdown-item" href="add.php">Add</a></li>
					    <li><a class="dropdown-item" href="allbooks.php">All Books</a></li>
					  </ul>
					</div>
				</li>

					

				<a style="text-decoration: none;"href="orderr_books.php"><li style="list-style: none;" class=" p-2 text-light text-opacity-75">Order Books</li></a>
				<a style="text-decoration: none;"href="user.php"><li style="list-style: none;" class=" p-2 text-light text-opacity-75">Registered User</li></a>
				<a style="text-decoration: none;"href="umessage.php"><li style="list-style: none;" class=" p-2 text-light text-opacity-75">User Message</li></a>

			</ul>
		</div>
	</div>
</div>


<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
-->
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
