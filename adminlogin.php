
<?php

session_start();

$con = mysqli_connect('localhost','root');

if($con)
{
  echo "connection successful";
}
else
{
  echo "no connection";
}



?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="adminstyle.css">
  <?php include 'links.php'?>

</head>
<body>


<header>
  <div class="container center-div shadow ">
    <div class="heading text-center mb-5 text-uppercase text-black">Admin login Page</div>
      <div class="container row d-flex flex-row justify-content-center mb-5">
        <div class="admin-form shadow p-2">

        <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>
 
 
                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>


          <form action ="logincheck.php" method="POST">
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="user" value="" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="Password" name="pass" value="" class="form-control" autocomplete="off">
            </div>
            <input type="submit"  class="btn btn-success" name="submit">
          </form>
        </div>
      </div>
  </div>

</header>





</body>
</html>