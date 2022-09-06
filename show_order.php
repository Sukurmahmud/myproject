
<?php
	include("connection.php");
	include("header.php");



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
</head>
<body>
<!-- order form area php file here -->
<style type="text/css">
	.box_book{
		box-shadow: 4px 5px 15px black;
    width: 50% !important;
    margin: auto;
	}
	.item_value_order .icon {
    font-size: 23px;
    background: #4c2727f0;
    color: #fff;
    width: auto;
    margin: auto;
}
.item_value_order .svg_icon {
    font-size: 23px;
    background: #4c2727f0;
    color: #fff;
    width: auto;
    margin: auto;
}

</style>



        <?php 

        if (isset($_GET['id'])) {
          $get_id = $_GET['id'];
          $sql = "SELECT * FROM add_book WHERE id = $get_id ";
          $result = mysqli_query($conn ,$sql);
          $data_result = mysqli_fetch_assoc($result);
          $id = $data_result['id'];
          $book_name = $data_result['book_name'];
         // $Authors  = $data_result['Authors'];
         // $Catagory  = $data_result['Catagory'];
          $book_image = $data_result['book_image'];


          // code...
        }
        ?>

<div class="section_area">
	<div class="container">
		<div class="row">
			<div class="box_book p-5 bg-secondary.bg-gradient col-md-6">
				<form class="post" action="#" enctype="multipart/form-data">
					<img width="400px" height="400px" src="upload/<?php  echo $book_image;?>">
					<div class="item_value_order row p-3">
						<div class=" col-md-4 icon">
							<i class="fa-solid fa-plus "  onclick="increement()" class=""></i>
						</div>
						<div class="col-md-4">
							<input type="button" id="value_order" value="0" name="item_value">
						</div>
						<div class="col-md-4 svg_icon">
							<svg  onclick="decreement()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg  " viewBox="0 0 16 16" id="minus_icon">
							  <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
							</svg>
						</div>
					</div>
					
					<h2><?php echo $book_name;?></h2>
					
					
				</form>
				
				<div class="order_books_now">
						
						<button id="order_submit_button" onclick="order_submit()" name="order_books">Request For Book</button>
					</div>
			</div>
			<div class="col-md-6 p-5 bg-secondary.bg-gradient box_book">
				<div class="books_order">
					<div class="order_aall">
						<h2>Your Books Request</h2>
						<p class="order_p" id="order_ok">
									
						</p>
					</div>
				</div>
		</div>
		</div>
	</div>
</div>






<script type="text/javascript">
	function increement(){
		var count = document.getElementById('value_order');
		if (count.value >=5) {
			//count.value =4;
			alert("maximum order you can 5");
			
		}else{
			count.value ++;
		}
		
	}
	function decreement(){
		var count1 = document.getElementById("value_order");
		if (count1.value <=1) {
			alert("minimum order will 1 item ");
		}else{
			count1.value --;
		}
		
	}
	function order_submit(){
		var order_value = document.getElementById('value_order');
		var x= order_value.value;
		document.getElementById("order_ok").innerHTML=x;
	}

	 

</script>


<script type="text/javascript" src="js/fontawesome.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<script type="text/javascript" src="js/mixitup.min.js"></script>
</body>
</html>