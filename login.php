<?php 
  include("connection.php");
  session_start();
  if (isset($_POST['l_login'])) {
    $l_email = $_POST['u_email'];
    $l_password = $_POST['u_password'];
    $l_full_password = md5($l_password);

    //$name_query = "SELECT * FROM signup WHERE full_name";

    //echo $l_email;
    //echo $l_full_password;
    $login_query = "SELECT * FROM signup WHERE user_email = '$l_email' AND user_f_pass = '$l_full_password'";
    $result_login_query = mysqli_query($conn, $login_query);
    if (mysqli_num_rows($result_login_query)>0) {
      //$_SESSION['user_email_log'] = $l_email;
      $row= mysqli_fetch_assoc($result_login_query);
     $name = $row['user_email'];
     $_SESSION['user_email_log'] = $name; 
      

      header("location:home.php");
      //echo "login ok";
      // code...
    }else{
      echo " Incorrect Email or Password ";
    }

    // session query for showing name value form user database


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
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">

<style type="text/css">

</style>
</head>
<body  class="bg-light login_people">
  <div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">LMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
              <a class="d-flex" href="register.php <?php //header("location:register.php")?>">Sign Up</a>
              
            </div>
          </div>
        </nav>
    </div>
  </div>
  
  <header>
    <div class="header_area">
      <div class="container">
        <div class="row">
          
          <div class="form_area ">
<?php 
  //session_start();
  // echo "Welcome ". $_SESSION['user_name'];

?>
            <h2 class="text-white p-3 text-opacity-75">LogIn Your Account </h2>
            <form method="post" action="" >
              <input required type="email" name="u_email" placeholder="Your Email" required><br><br>
              <input required type="password" name="u_password" placeholder="Your Password" required><br><br>
              
              <div class="l_submit_button">
                
                <input type="submit" name="l_login" value="LogIn" >
               
              </div>
            </form>
              <div class="admin_login m-4">
                  <a href="admin_login.php" >Log in as a admin</a>
              </div>
            
          </div>
        </div>

      </div>
    </div>
  </header>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>