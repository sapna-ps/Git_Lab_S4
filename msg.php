<?php
$conn = mysqli_connect("localhost", "root","", "db_shopping_cart");
 

$content = $_POST['content'];


$query ="insert into message(content)values('$content')";
$result = mysqli_query($conn, $query);
	
if($result)
	//
		// You have textarea data do something with it...
		//$

		{
		
		
		?>

		
		<?php echo "<script>alert('Send Successfully')</script>"; 
		
		}
else{

die("Something terrible happened. Please try again. ");
}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head><title>Message</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>

a:link,a:visited
  {
  background-color:white;
     color:#000080;
   padding:17px; 
   text align:center;
   text-decoration:none;
   display:inline-block;
   border-radius:7px;
  }
  a:hover,a:active{
    background-color:;
    color:green;
.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}
</style>
<body>
 <a href="A_index.php"><class='btn btn-primary  float-right' ><b>Go back</a></b>

</body>
</html>