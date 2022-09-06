
<?php
	include("connection.php");
	include("header.php");

	//session_start();
	//echo $_SESSION['user_email_log'];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LMS</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/image-magnifier.css">
</head>
<body>	
<div class="container">
	<div class="row">
		<div class="our_books_area">
			<div class="heading_books">
				<h3 class="text-center p-2">Our All Books</h3>
				<hr>
				<div class="images_area">
					<div class="container">
						<div class="row">
							<div class="poduct_area">
								<?php 
						        $mysqli_query = "SELECT * FROM add_book";
						        $result = mysqli_query($conn , $mysqli_query);
						        while ($row= mysqli_fetch_assoc($result)) {

						        $catagory_name = $row['Catagory'];
						        $images_name = $row['book_image'];
						        $book_name = $row['book_name'];
						       ?>
						       <style type="text/css">
						       	
																       </style>
						       <div class="container">
						       		<div  class=" row mybook position-relative">
						       			<div class=" col-md-3">
						       				<div class="mix  <?php //$catagory_name;?>">
														<div class="images_item col-md-3 p-4">																	
															<img width="200px" height="300px" class="image" src="upload/<?php echo $images_name; ?>">
															<div class="book_title position-absolute ">
																<span class=""><?php echo $book_name;?></span>																				
															</div>

														</div>			
													</div>
						       			</div>
											</div>
						       </div>								
									<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





<script src="js/image-magnifier.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/mixitup.min.js"></script>

<script type="text/javascript">
	var mixer = mixitup('.mybook');
</script>

</body>
</html>