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
