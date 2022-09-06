<?php 
	
include("connection.php");
include("header_admin.php");



$sql_admin_details = "SELECT * FROM main_admin";
$result = mysqli_query($conn , $sql_admin_details);
$row = mysqli_fetch_assoc($result);
$admin_name = $row['admin_name'];
$admin_email = $row['admin_email'];
$admin_password = $row['admin_password'];
//$admin_name = $row['admin_name'];










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
	<div class="container">
		<div class="row">
			<div class="table_admin_details">
				<table class="table">
					<thead>
						<th>Name</th>
						<th>Email</th>
						<th>Password</th>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $admin_name;?></td>
							<td><?php echo $admin_email;?></td>
							<td><?php echo $admin_password;?></td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
		<a class="bg-primary text-light p-2" href="dashboard.php">Back</a>
	</div>
</body>
</html>