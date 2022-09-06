<?php 
  include("connection.php");
  session_start();
  if (isset($_POST['l_submit'])) {
    $full_name = $_POST["f_name"];
    $user_email = $_POST["u_email"];
    $u_full_pass = $_POST["u_f_password"];
    $u_f_pass = md5($_POST["u_f_password"]);
    $u_last_pass = md5($_POST["u_l_pass"]); // full password for length
    //for secure password this code 
    $uppercase = preg_match('@[A-Z]@', $u_f_pass);
    $lowercase = preg_match('@[a-z]@', $u_f_pass);
    $number = preg_match('@[0-9]@', $u_f_pass);
    $specialchar = preg_match('@[^\w]@', $u_f_pass);
    // condition start from here

    if (($specialchar || $number || $lowercase || $uppercase)) {
      
    
      if (strlen($u_full_pass) >= 8) {
        if ($u_f_pass == $u_last_pass) {
          $mysqli_query = "SELECT * FROM signup WHERE user_email = '$user_email '";
          $result = mysqli_query($conn, $mysqli_query);
          if (mysqli_num_rows($result)>1) {
           // header("location:register.php");
            $email_match= " <h1 style = 'font-size: 19px;
            text-align: center;
            position: absolute;
            margin-top: 226px;
            color: red;
            margin-left: 288px;'>Email already exist!</h1>";
            echo $email_match;
          }else{
            $insert_query = "INSERT INTO signup(full_name, user_email ,user_f_pass, user_l_pass ) VALUES('$full_name','$user_email','$u_f_pass','$u_last_pass')";
            if (mysqli_query($conn, $insert_query)) {
              //$_SESSION['user_name']=$full_name;
              header("location:login.php");
              //echo "insert successfully done!";
              // 
            }else{
              echo "error".$sql. "<br>" .mysqli_error($conn);
            }
          }   
        }else{
          $pass_match =" <h1 style = 'font-size: 19px;
            text-align: center;
            position: absolute;
            margin-top: 300px;
            color: red;
            margin-left: 238px;'>Password does not match!!</h1>";
          echo $pass_match;
        }
      }
      else{
        echo " password at least 8 charecter!!";
      }
    }
  }
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register account</title>
  <!-- style tag start from here-->
  
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">


</head>
<body>
  <div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">LMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
              <a class="d-flex" href="login.php <?php //header("location:register.php")?>">LogIn</a>
              
            </div>
          </div>
        </nav>
    </div>
  </div>
  <header>
    <div class="header_area">
      <div class="container">
        <div class="row">
          <style type="text/css">
            .form_area{
              position: relative;
            }
          </style>
          <div class="form_area">
            <h2>Creat Your Account </h2>
            <form method="post" action="" >
              <input class="p-2" type="text" name="f_name" placeholder="Full Name" required><br><br>
              <?php if (isset($_POST['l_submit'])) {
                //echo $pass_match;
                //$email_match1= $email_match;
                //echo $email_match1;
                //header("location:register.php");
                // code...
              }?>
              <input type="email" name="u_email" placeholder="Your Email" required><br><br>
              <input type="password" name="u_f_password" placeholder="Your Password" required><br><br>
              <?php if (isset($_POST['l_submit'])) {
                //echo $pass_match;
                //echo $email_match;
                //header("location:register.php");
                // code...
              }?>
              <input type="password" name="u_l_pass" placeholder="Re-Passwod" required><br><br>
              <div class="s_submit_button">
                <input type="submit" name="l_submit" value="Sign Up" style="width: 22%;">
                <a href="login.php" class="btn btn-secondary fs-6 fw-light bg-primary ">Already Have An Account?</a>
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