<?php
session_start();  
include("connect.php");


if(isset($_POST['submit141']))
{
  $donators_name=$_POST['donators_name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $city=$_POST['city'];
  $address=$_POST['address'];
  $list=$_POST['list'];
  $locatio=$_POST['locatio'];
  $query="INSERT INTO  cook VALUES ('$donators_name','$email','$contact','$city','$address','$list', '$locatio')";
  $data=mysqli_query($connection,$query);

  if($data)
  {
    echo '
    <script> 
    alert("succesfully done!");
    window.location = "index.php";
    </script>
    ';
  }
  else
  {
  echo "Failed to insert Data inserted into Database ".mysqli_error($conn);
  }
}
?>