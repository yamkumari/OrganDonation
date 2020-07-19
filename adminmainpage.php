<?php 
session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<link rel="stylesheet" type="text/css" href="adminstyle.css">
  <?php include 'links.php'?>



	<div class="container center-div shadow">
		<div class="heading text-center mb-5 text-uppercase text-white">A Subscribe
		 <?php echo $_SESSION['user']?>tehcnnical </div>
		<a href="logout.php" class="btn btn-danger">logout</a>
		
	</div>






</body>
</html>