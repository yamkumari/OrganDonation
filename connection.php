<?php
 
    $con=mysqli_connect('localhost','root','','adminlogin');
 
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>