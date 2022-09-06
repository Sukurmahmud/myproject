

<?php
  include("connection.php");
  include("header_admin.php");
  
  
  

  //$admin_name = $row['admin_name'];



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
<body style="margin:0; padding:0;">
<div class="">
  <div class="">
    <div class="row">
      <div class="col-md-2">
        <?php 
        include("sidebaradmin.php");
        ?>
      </div>
      <div class="col-md-10">
        <div class="heder text-center p-5">
          <h2>Registered User</h2>

          <div class="tabal_user">
            <table class="table">
              <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Password</th>

              </thead>
              <?php
              $sql_user_details = "SELECT * FROM  signup";
              $result = mysqli_query($conn , $sql_user_details);

               while ($row = mysqli_fetch_assoc($result)) {
                $user_id = $row['id'];

                $full_name = $row['full_name'];
                $user_email = $row['user_email'];
                $user_f_pass = $row['user_f_pass'];
                $user_l_pass = $row['user_l_pass'];
                              // code... 
              ?>
              <tbody style="font-size:14px;">
                <tr>
                  <td><?php echo $full_name;?></td>
                  <td><?php echo $user_email;?></td>
                  <td><?php echo $user_f_pass;?></td>
                  <td><?php echo $user_l_pass;?></td>
                  <td><a href='user.php?id= <?php echo $user_id?>' class="btn btn-success" onclick = 'return checkdelete()'>Delete</a></td>

                </tr>
              </tbody>
            <?php }?>


             <?php 

                if (isset($_GET['id'])) {
                  $delete_id = $_GET['id'];
                  $delete_query = "DELETE FROM signup WHERE id =$delete_id";
                  if (mysqli_query($conn, $delete_query)) {
                    echo "Deleted succesfully done!!";
                    ?>
                    
                    <meta http-equiv = "refresh" content = "0; url =http://localhost/myproject/user.php" />
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
    </div>
  </div>
</div>



<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
    function checkdelete() {
      return confirm("are you sure you wnant to Delete?");
      // body...
    }
  </script>

</body>
</html>
