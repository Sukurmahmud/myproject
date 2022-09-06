<?php 
  include("connection.php");
 session_start();

 if (isset($_POST["admin_login"])) {
 	$admin_name = $_POST['admin_name'];
 	$admin_password = $_POST['admin_password'];
 	$admin_sql = "SELECT * FROM main_admin WHERE admin_name = '$admin_name' AND admin_password = '$admin_password'";
 	$admin_result = mysqli_query($conn, $admin_sql);
 	if (mysqli_num_rows($admin_result)==1) {
 		header("location:dashboard.php");
 		// code...
 	}else{
 		echo "email or Password is incorrect!";
 	}
 	// now seesion start name show code start from here
 	$sql = "SELECT * FROM main_admin";

 	if (mysqli_query($conn , $sql)) {
 		$_SESSION['admin_name']= $admin_name;
 		// code...
 	}

 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <!-- style tag start from here-->
  
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

<style type="text/css">

</style>
</head>
<body  class="bg-black ">
  <header>
    <div class="header_area">
      <div class="container">
        <div class="row">

          <div class="form_area ">
        <h2 class="text-white p-3 text-opacity-75">Admin Account </h2>
            <form method="post" action="" >
              <input required type="text" name="admin_name" placeholder="User Name" required><br><br>
              <input required type="password" name="admin_password" placeholder="Your Password" required><br><br>
              <div class="l_submit_button">
                <input type="submit" name="admin_login" value="LogIn" style="cursor: pointer;width: 27%;font-size: 25px;padding: 0px 0px;background: transparent;color: #fff;">
                <a href="login.php" class="btn btn-info">Log in as a user</a>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </header>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>