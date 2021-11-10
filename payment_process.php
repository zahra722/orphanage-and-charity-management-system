<?php
include("connect.php");
?>
<?php
if( isset($_POST['amount']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact']))
{
  
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$amount=$_POST['amount'];




$query="INSERT INTO payment (name,email,contact,amount) VALUES ('$name','$email','$contact','$amount')";

$data=mysqli_query($connection,$query);
if($data)
  {
   
  echo "Data inserted into Database";
  }
  else
  {
  echo "Failed to insert Data inserted into Database ".mysqli_error($connection);
  }


}

?>