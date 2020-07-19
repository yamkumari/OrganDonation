<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['submit']))
    {
       if(empty($_POST['user']) || empty($_POST['pass']))
       {
            header("location:adminlogin.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from admintable where username='".$_POST['user']."' and pass='".$_POST['pass']."'";
            $result=mysqli_query($con,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['user'];
                header("location:display.php");
            }
            else
            {
                header("location:adminlogin.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }
 
?>