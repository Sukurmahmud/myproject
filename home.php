
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
		<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
</head>
<body>
<div class="header_area_image">
	<div class="">
		<div class="img">
			<img class="opacity-25 position-relative img-thumbnail" width="100%" height="600px" src="images/open-book-hand-drawn-landscape-38305098.jpg">
		</div>
		<div class="text_upto_image text-center position-absolute text-center">
			<h3 style="margin-top: -375px; color: #fff;margin-left: 124px;font-family: s;font-size: 71px;">Welcome To LMS</h3>			

			<h2 style="margin-top: 0px; color: #f00f0f;margin-left: 124px;font-family: sans-sarif;font-size: 51px;font-style: italic;font-weight: revert;">Are You Looking For Books?</h2>		
		</div>
	</div>
</div>
<style>
	#scroll_icon{
		
		right: 10px;
		
		width: 50px;
		height: 50px;
		border-radius: 50px;
		border: none;
		outline: none;
		cursor: pointer;
		color: #fff;
		box-shadow: 0 0 10px rgb(0, 0, 0, 0.25);
		background-color: green;
		position: fixed;
		bottom: 11px;


	}
	#scroll_icon:active{
		background-color: #f00f0f;
	}
</style>
<div class="" id="scroll_icon">
	
	<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg>
</div>
			
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
						        	$books_id = $row['id'];

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
															<a href="show_order.php?id=<?php echo $books_id?>"><img width="200px" height="300px" class="image" src="upload/<?php echo $images_name; ?>"></a>
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

<!-- for fotter area php file here -->
<?php 
include("footer.php");
?>





<script type="text/javascript" src="js/fontawesome.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<script type="text/javascript" src="js/mixitup.min.js"></script>

<script type="text/javascript">
const scroll = document.querySelector("#scroll_icon");
scroll.addEventListener("click",function(){
	window.scroll({
		top:50,
		left:50,
		//behavior:"smooth"
	})
});


</script>

</body>
</html>