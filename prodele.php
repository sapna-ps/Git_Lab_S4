<?php
include('u_connection.php');
$PID=$_GET['pn'];
$query="DELETE FROM PRODUCTS WHERE PID='$PID'";
$data=mysqli_query($con,$query);
if($data)
{
  echo "record deleted from data";
}
else
{
  echo "failed to delete record";
}
?>