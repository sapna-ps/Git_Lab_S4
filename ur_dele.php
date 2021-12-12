<?php
include("u_connection.php");
$user_id=$_GET['ur'];
$query="DELETE FROM USER WHERE user_id='$user_id'";
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