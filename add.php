

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
  <div class="mmmm">
    <div class="row">
      <div class="col-md-2">
        <?php 
        include("sidebaradmin.php");

if (isset($_POST['Book_upload'])) {
    $book_name = $_POST['book_name'];
    $Authors = $_POST['Authors'];
    $catagory = $_POST['catagory'];
    $book_cover_pic =$_FILES['book_cover_pic']['name'];
    $tmp_name = $_FILES['book_cover_pic']['tmp_name'];
    //$file_type = $_FILES['book_cover_pic']['type'];
    $uploade = 'upload/'.$book_cover_pic;
    move_uploaded_file($tmp_name, $uploade);
    if ($book_name && $Authors && $catagory && $book_cover_pic) {
        // code...
        $add_query = "INSERT INTO add_book(book_name ,Authors ,Catagory ,book_image)VALUES('$book_name','$Authors','$catagory','$book_cover_pic')";
        if (mysqli_query($conn, $add_query)) {
            //header("location:add.php");
            //header("location:add.php");
            //echo "inserted okkk";
            // code...
        }
    }
}


        ?>
      </div>
      <div class="col-md-10">
        <div class="add_books m-3 p-5 bg-black">
          <h2 class="text-center">Add Your Books</h2>
          <form method="post" class="" enctype="multipart/form-data">
            <input required type="text" name="book_name" placeholder="Book Title" class="form-control p-2 m-3">
            <input required type="text" name="Authors" placeholder="Authors Name" class="form-control p-2 m-3">
            <p class="text-white" id="show_value"></p>
            <select id="myselect" name="catagory" class="p-2 m-3" onchange="change_value()">
              <option >Catagory</option>
              <option value="Health">Health</option>
              <option value="Mathmetics">Mathmetics</option>
              <option value="English">English</option>
              <option value="Engineering">Engineering</option>
              <option value="Others">Others</option>
            </select>
            
            <div class="image_upload p-2 m-2">
              <label>Upload Books Cover</label>
              <input type="file" name="book_cover_pic">
            </div>
            <div class="text-center p-2">
              <input required class=" " type="submit" name="Book_upload" value="Submit Book" style="padding: 7px 23px;font-size: 18px;border-radius: 8px;">
              <a  href="allbooks.php">Show All Books</a>
             </div>
          </form>
        </div>
        


    </div>
  </div>
</div>



<script>
  function change_value(){
    var x = document.getElementById("myselect").value;
    document.getElementById("show_value").innerHTML="You Selected  "+ x;
  }
</script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
