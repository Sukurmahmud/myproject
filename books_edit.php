

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
  <title>Updated Your Books</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
</head>
<body>
  <div class="mmmm">
    <div class="row">
      <div class="col-md-2">
        <?php 
        include("sidebaradmin.php");
        if (isset($_GET['id'])) {
          $get_id = $_GET['id'];
          $sql = "SELECT * FROM add_book WHERE id = $get_id ";
          $result = mysqli_query($conn ,$sql);
          $data_result = mysqli_fetch_assoc($result);
          $id = $data_result['id'];
          $book_name = $data_result['book_name'];
          $Authors  = $data_result['Authors'];
          $Catagory  = $data_result['Catagory'];
          $book_image = $data_result['book_image'];


          // code...
        }
       // echo $_GET['id'];
        if (isset($_POST['Book_upload'])) {
          $newid            = $_GET['id'];
          $newbook_name     = $_POST['book_name'];
          $newAuthors       = $_POST['Authors'];
          $newCatagory      = $_POST['Catagory'];
          $newbook_image =$_FILES['book_image2']['name'];

          $tmp_name = $_FILES['book_image2']['tmp_name'];
          //$file_type = $_FILES['book_cover_pic']['type'];
          $uploade = 'upload/'.$newbook_image;
          

          //print_r(book_image2)
          //echo $newbook_image;

          $sql_update = "UPDATE add_book SET book_name='$newbook_name',
          Authors='$newAuthors',Catagory='$newCatagory',
          book_image='$newbook_image' WHERE id= '$newid'";
          if (mysqli_query($conn, $sql_update)) {
            move_uploaded_file($tmp_name, $uploade);

            echo "Updated succesful";
            // code...
          }
          
          



          
          // code...
        }

        

        ?>
      </div>
      <div class="col-md-10">
        <div class="add_books m-3 p-5 bg-black">
          <h2 class="text-center">Update Your Books</h2>
          <form method="post" class="" enctype="multipart/form-data">
            <input required type="text" name="book_name" placeholder="Book Title" class="form-control p-2 m-3" value="<?php echo $book_name;?>">
            <input required type="text" name="Authors" placeholder="Authors Name" class="form-control p-2 m-3" value="<?php echo $Authors;?>">

            <select name="Catagory" class="p-2 m-3" value="<?php echo $Catagory;?>" >
              <option value="">Catagory</option>
              <option value="Health">Health</option>
              <option value="Mathmetics">Mathmetics</option>
              <option value="English">English</option>
              <option value="Engineering">Engineering</option>
              <option value="Others">Others</option>
            </select>
            <div class="image_upload p-2 m-2">
              <label>Upload Books Cover</label>
              <input type="file" name="book_image2" >
              
            </div>
            <div class="text-center p-2">
              <input required class=" " type="submit" name="Book_upload" value="Update Book" style="padding: 7px 23px;font-size: 18px;border-radius: 8px;">
              <a style="" class="" href="allbooks.php">Show All Books</a>
             </div>
             <input type="text" name="id" hidden value="<?php echo $id;?>">
          </form>
        </div>
        


    </div>
  </div>
</div>




<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
