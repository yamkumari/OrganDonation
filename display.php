<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th>S.no</th>
				<th>fname</th>
				<th>Sname</th>
				<th>Age</th>
				<th>BloodGroup</th>
				<th>Organ</th>
				<th>Gender</th>
				<th>Mnumber</th>
				<th>Email</th>
				<th>City</th>
				<th>State</th>
				<th>Country</th>
				<th>Delete</th>

 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from donors";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 
                  <td><?php echo $res['id'];?></td>

				<td><?php echo $res['Firstname'];?></td>
				<td><?php echo $res['Lastname'];?></td>
				<td><?php echo $res['Age'];?></td>
				<td><?php echo $res['Blood Group'];?></td>
				<td><?php echo $res['Organ'];?></td>
				<td><?php echo $res['Gender'];?></td>
				<td><?php echo $res['Mobile No.'];?></td>
				<td><?php echo $res['Email'];?></td>
				<td><?php echo $res['City'];?></td>
				<td><?php echo $res['State'];?></td>
				<td><?php echo $res['Country'];?></td>

				<td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id'];?>"class="text-white">Delete</a></button></td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#adminlogin').DataTable();
 }) 
 
 </script>

</body>
</html>
