
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>footer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<style type="text/css">
		body{
			background: #d4d5d7db;
		}
		.footer_area h2 {
		  font-size: 37px;
		  padding: 10px;
		  margin-top: 20px;
		  font-family: sans-sarif;
		}
		.footer_area p {
		  width: 100%;
		  text-align: center;
		}
		.left_footer{
			padding: 10px;
			margin-top: 103px;
		}
		.right_footer h1 {
		  font-size: 31px;
		  padding: 24px;
		  font-family: sans-sarif;
		}
		.right_footer input {
		  	border: none;
		    border-bottom-color: currentcolor;
		    border-bottom-style: none;
		    border-bottom-width: medium;
		  	border-bottom: 0px;
		  	padding: 8px;
		  	font-size: 17px;
		  	font-family: shans-sarif;
		}
		.contact_message_button {
		  margin-top: 10px;
		  margin-left: 219px;
		  color: #554b4b;
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="row">


<?php 
include("connection.php");
if (isset($_POST['contact_submit'])) {
	$full_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$text_area_contact = $_POST['text_area_contact'];


	//echo $full_name;
	//echo $contact_email;
	//echo $text_area_contact;
	$message_user = "INSERT INTO  user_message(full_name,contact_email,user_text ) VALUES('$full_name','$contact_email','$text_area_contact')";
	if (mysqli_query($conn, $message_user)) {
		//header('location:footer.php');
		//header("location:footer.php");
		//header("location:footer.php<script>alert('message send ok')</script>");
		// code...
	}


}


?>


			<div class="footer_area">
				<h2 class="text-center">Contact Us</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit.</p>
			</div>
				<div class="left_footer col-md-6">
					<span><b>Address</b></span>
					<address>
						Tangail, Tangail sadar, mahmudnagar.
					</address>
					<hr>			
					<span><b>Phone</b></span>
					<p>908987867678</p>
					<hr>
					<span><b>Email</b></span>
					<p>mahmudsukur676@gmail.com</p>	
				</div>
				<div class="right_footer col-md-6">
					<h1 class="text-center">Send Message</h1>
					<form class="footer_form " method="post" action="home.php">
						<input class="form-control" type="text" name="contact_name" placeholder="Full Name" required><br>
						<input class="form-control" type="email" name="contact_email" placeholder="Your Email" required><br>
						<textarea name="text_area_contact" class="form-control" rows="5" cols="20"></textarea>
						<input class="contact_message_button" type="submit" name="contact_submit" value="Send Message" style="padding: 8px 10px;font-size: 20px;border-radius: 8px;background: #b5b1b1;">
					</form>			
				</div>	
		</div>
	</div>

</body>
</html>