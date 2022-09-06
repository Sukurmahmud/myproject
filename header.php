
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LMS</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">

<style type="text/css">
.header_area_lms{
	background: #ff7800;
}
a{
	text-decoration: none;

}
.menu_bar a li{
	list-style: none;
	float: left;
	font-size: 15px;
	padding: 10px 10px;
	color: #fff;
	margin: 2px 9px 19px 10px;
	background: #ff000045;
	border-radius: 8px;

}
.menu_bar a li:hover{
	background: green !important;
	margin: 2px 9px 19px 10px;
}
.logo a h1{
	color: #fff;
	margin: 10px 10px 10px 10px;
}
.LogOut_class{
	margin-top: 29px;
}
</style>
</head>
<body>
	<div class="header_area_lms sticky-top opacity-100 bg-opacity-75">
		<div class="container">
			<div class="row">
				<div class="header_area_left col-md-3">
					<div class="logo">
						<a href="home.php"><h1>LMS</h1></a>
					</div>
				</div>
				<div class="header_area_right col-md-7">
					<div class="menu_bar">
						<nav>
							<ul class="m-4"> 
								<a href="home.php"><li>Home</li></a>
								<a href="blog.php"><li>Blog</li></a>
								<a href="our_books.php"><li>Our Books</li></a>
								<!--<a href="footer.php"><li>Author</li></a>-->
								<a href="event.php"><li>Events</li></a>
								<a href="about.php"><li>About Us</li></a>
								
							</ul>
						</nav>	
					</div>
									
				</div>
				<div class="col-md-2">
						<div class="dropdown LogOut_class">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
						    <?php session_start();  echo $_SESSION['user_email_log']; ?>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
						    <li><a class="dropdown-item" href="logout.php">LogOut</a></li>
						  </ul>
						</div>
					</div>
				</div>
				
			</div>

		</div>
	</div>

	<script type="text/javascript" src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>