<?php
include 'adp.php';
include 's_connection.php';
if (isset($_POST['submit']))
{

  $name =$_POST['name'];
  $price =$_POST['price'];
  $mfc =$_POST['mfc'];
 
  $image=$_POST['image'];
  $description=$_POST['description'];
   $sql = "INSERT INTO products(PRODUCT,PRICE,MFC,IMAGE,DESCRIPTION) VALUES('$name','$price','$mfc','$image','$description')";
    if (mysqli_query($con,$sql)){
	echo "<script>alert('Inserted')</script>";
	}
	else{
	echo "error:".mysqli_error($con);
	}
	mysqli_close($con);
}
 