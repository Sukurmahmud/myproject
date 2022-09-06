

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
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="table_books">
        <div class="text-end p-2 m-3">
          <a class="btn btn-secondary" style="text-decoration: none; text-align:right;" href="add.php"> Add Books</a>
        </div>       
        <table class="table">
        <thead>
          <th>Book Title</th>
          <th>Authors Name</th>
          <th>Catagory</th>
          <th>Book Images</th>
          <th>Action</th>
        </thead>
        <?php 
        $mysqli_query = "SELECT * FROM add_book";
        $result = mysqli_query($conn , $mysqli_query);
        while ($row= mysqli_fetch_assoc($result)) {
        $books_id = $row['id'];
        $books_name = $row['book_name'];
        $Authors_name = $row['Authors'];
        $catagory_name = $row['Catagory'];
        $images_name = $row['book_image'];
        ?>
        <tbody>
        <style type="text/css">
        .image{
        width: 50%;
        height: 70px;
        }
        </style>
            <tr>
              <td><?php echo $books_name;?></td>
              <td><?php echo $Authors_name; ?></td>
              <td> <?php echo $catagory_name;?></td>
              <td><img class="image" src="upload/<?php echo $images_name; ?>"></td>
              <td>
                <a href='books_edit.php?id= <?php echo $books_id?> ' class="btn btn-info">Edit</a>
                <a href='allbooks.php?id= <?php echo $books_id?>' class="btn btn-success" onclick = 'return checkdelete()'>Delete</a>
              </td>
            </tr>
          </tbody>
        <?php }?>


<!-- deete books code  php start from here -->
        <?php 

          if (isset($_GET['id'])) {
            $delete_id = $_GET['id'];
            $delete_query = "DELETE FROM add_book WHERE id =$delete_id";
            if (mysqli_query($conn, $delete_query)) {
              echo "Deleted succesfully done!!";
              ?>
              
              <meta http-equiv = "refresh" content = "0; url =http://localhost/myproject/allbooks.php" />
              <?php 
              // for delete confirm and refresh 
            }
            // code...
          }
        ?>
          </table>
        </div>
    </div>
  </div>
  <script type="text/javascript">
    function checkdelete() {
      return confirm("are you sure you wnant to Delete?");
      // body...
    }
  </script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
