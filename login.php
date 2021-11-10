<?php
session_start();  
include("connect.php");


if(isset($_POST['submit']))
{
  $uname=$_POST['username'];
  $psw=$_POST['password'];

  $query="SELECT * FROM vol WHERE firstname='$uname' && password='$psw'";
  $data=mysqli_query($connection,$query);

  $total=mysqli_num_rows($data);
   echo $total;

  if($total == 1)
  {
    
    header('Location:first.php');
  }
  else
  {
   // echo "<font color ='red'>login Failed <br> <h3>plz enter correct email and password</h3></font>";
   header('Location:error.php');
  }
}

?>