




<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
	<link rel="stylesheet" type="text/css" href="userregister.css">
	
</head>
<body>
<nav class="menu">
		<ul>
		   
			<li><a href="" class="logo">Life Subscriber<i class="fa class="fa fa-arrow-down"></i></a></li>


            <li><a href="home.php">Home</a></li>
			<li><a href="" >Services</a></li>
			<li><a href="Aboutus.php" >About us</a></li>
			<li><a href="userregister.php" >Be a donor</a></li>
			<li><a href="" >Contact</a></li>
		</ul>

	</nav>
	<h1>Registration Form:</h1>

	<div class="register">
		<h2>Register here to become an organ,eye and tissue Donor</h2>
		<form method="post" id="register" action="userregister.php" autocomplete="off">


			


			<label>First Name:</label><br>
			<input type="text" name="Fname" id="fname" placeholder="Enter your first name"style="text-transform: capitalize;" required><br><br>
			
			<label>Last Name</label><br>
			<input type="text" name="Lname" id="lname" placeholder="Enter your last name"required><br><br>
			<label>Age</label><br>
			<input type="age" name="age" placeholder="Age must be above 18"required>
			    
			    	                </select><br><br>
			<label>Blood Group</label><br>
			<select id="blood_group" name="blood_group"required>
			    	<option>Choose</option>
			    	<option>A+</option>
			    	<option>A-</option>
			    	<option>B+</option>
			    	<option>B-</option>
			    	<option>O+</option>
			    	<option>O-</option>
			    	<option>AB+</option>
					<option>AB-</option>
					</select>
					<br>
					<br>
					<label>Organs i wish to donate:</label><br>
					<br>
                    <input type="checkbox" name="organ[]" id="" placeholder="" value="all">Any Part of my body<br>
                    <br>
                    <label>Or</label>
                    <br>
                    <br>
                   
                    <input type="checkbox" name="organ[]" id="" placeholder="" value="Corneas"> Corneas
                    
                    <input type="checkbox" name="organ[]" id="" placeholder="" value="Kidney"> Kidney
                    <input type="checkbox" name="organ[]" id="" placeholder="" value="heart"> Heart
                    <br>
                    <br>
                    <input type="checkbox" name="organ[]" id="" placeholder=""value="liver"> Liver
                    <input type="checkbox" name="organ[]" id="" placeholder=""value="lungs">Lungs
                    <input type="checkbox" name="organ[]" id="" placeholder=""value="pancreas">Pancreas

					<br>
					<br>
			<label>Gender</label><br>
			<input type="radio" name="gender" id="male" value="m"required> Male
				<input type="radio" name="gender" id="male" value="f"required> Female
				<input type="radio" name="gender" id="male"value="o"required> Other<br><br>
			<label>Moblie Number</label><br>
			<select id="ph" name="Mnumber" maxlength="10">
				<option>+977</option>
				</select>
				<input type="number" name="Mnumber" id="num" placeholder="Enter your moblie number"required><br><br>
				<label>Email</label><br>
				<input type="email" name="email" id="name" placeholder="Enter your email"required><br><br>
				<label>City</label><br>
				<input type="text" name="city" id="city" placeholder="city" required><br><br>
			    <label>State</label><br>
				<input type="text" name="state" id="state" placeholder="state" required><br><br>
				<label>Country</label><br>
			<select id="country" name="your_country">
				<option>Nepal</option>
				<option>India</option>
				<option>China</option>
			</select><br>
			<br>


				<input type="submit" name="submit" id="sub" value="Submit">
				
		</form>
	</div>

</body>
</html>




<?php
include 'conn.php';


$connect=mysqli_connect('localhost','root','','adminlogin');
if($connect->connect_error)
{
	die("connection Error".$connect->connect_error);
}
if(isset($_POST['submit']))
{
 $fname=$_POST['Fname'];
	
	$lname=$_POST['Lname'];
	$Age=$_POST['age'];
	$blood_group=$_POST['blood_group'];
	$organ=$_POST['organ'];
	$b=implode(",",$organ);
	$gender=$_POST['gender'];
	$number=$_POST['Mnumber'];
	$email=$_POST['email'];
	$yourcity=$_POST['city'];
	$yourstate=$_POST['state'];
	$yourcountry=$_POST['your_country'];

	
$sql = " INSERT INTO `donors`( `Firstname`, `Lastname`, `Age`, `Blood Group`, `Organ`, `Gender`, `Mobile No.`, `Email`, `City`, `State`, `Country`) VALUES ('$fname','$lname','$Age','$blood_group','$b','$gender','$number','$email','$yourcity','$yourstate','$yourcountry')";


if ($connect->query($sql) == TRUE) 
{
    echo "New record created successfully";
    echo '<a href="Aboutus.php?logout">Welcom</a>';
} 
else 
{
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();
}
?>
 
	









