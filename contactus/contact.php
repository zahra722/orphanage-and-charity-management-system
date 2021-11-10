<?php


$connection = mysqli_connect('localhost', 'root', '', 'orphan'); 
if($connection)
{
  //echo "Connection OK";
}
else
{
    echo "Connection Failed".mysqli_connect_error();
}
?>
<?php
if(isset($_POST['submit']))
{
  
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];




$query="INSERT INTO contact (name,email,phone,message) VALUES ('$name','$email','$phone','$message')";

$data=mysqli_query($connection,$query);
if($data)
  {
    echo '
    <script> 
    alert("We will contact soon !");
    window.location = "../index.php";
    </script>
    ';
//   echo "Data inserted into Database";
  }
  else
  {
  echo "Failed to insert Data inserted into Database ".mysqli_error($connection);
  }


}

?>