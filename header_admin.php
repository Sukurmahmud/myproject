

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
</head>
<body  style="margin:0; padding:0;">
<div class="dasboard_admin">
	<div class="">
		<div class="row head bg-black">
			<div class="header_area_adimn">
				
			</div>
			<div class="col-md-4">
				<h2  style="padding: 5px 5px; color: #fff; margin-left: 30px;">LMS</h2>
			</div>
			<div class="col-md-8">
				<div class="icon p-2">
					<div class="dropdown text-end ">
					  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
					    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
						  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
						</svg>
					  </button>
					  <ul class="dropdown-menu">	    
					    <li><a class="dropdown-item" href="admin_details.php"><?php session_start();
							echo $_SESSION['admin_name'];
						?></a></li>
					    <li><a class="dropdown-item" href="admin_login.php">Logout</a></li>
					  </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
