

<?php
  include("connection.php");
  include("header_admin.php");


  //session_start();
  //echo $_SESSION['user_email_log'];


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Message</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
</head>
<body>
<div class="">
  <div class="">
    <div class="row">
      <div class="col-md-2">
        <?php 
        include("sidebaradmin.php");
        ?>
      </div>
      <div class="col-md-10">

        <div class="container">
          <div class="row">
            <div class="table_books">
              <div class="text-end p-2 m-3">
                <a class="btn btn-secondary" style="text-decoration: none; text-align:right;" href="add.php"> Add Books</a>
              </div>       
              <table class="table">
              <thead>
                <th style="
                  width: 17%;
              "> User Name</th>
                <th style="width: 28%;">User Email</th>
                <th>User Nessage</th>
              </thead>
              <?php 
              $mysqli_query = "SELECT * FROM user_message";
              $result = mysqli_query($conn , $mysqli_query);
              while ($row= mysqli_fetch_assoc($result)) {

              //$books_id = $row['id'];
              $full_name = $row['full_name'];
              $contact_email = $row['contact_email'];
              $user_text = $row['user_text'];
              //$images_name = $row['book_image'];
              ?>
              <tbody>
              <style type="text/css">
              .image{
              width: 50%;
              height: 70px;
              }
              </style>
                  <tr>
                    <td><?php echo $full_name;?></td>
                    <td><?php echo $contact_email; ?></td>
                    <td> <?php echo $user_text;?></td>
                  </tr>
                </tbody>
              <?php }?>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
