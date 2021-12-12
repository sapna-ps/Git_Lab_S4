<?php
$conn = mysqli_connect("localhost", "root","", "db_shopping_cart");
 

$user_name = $_POST['user_name'];
$content = $_POST['content'];

$query ="insert into feedback(content)values('$content')";
$result = mysqli_query($conn, $query);
	
if($result)
	//
		// You have textarea data do something with it...
		//$text = $_POST['textarea']
		{
		
		
		 echo "<script>alert('Send Successfully')</script>"; 
		
		
		
		
		}
else{
echo "error:".mysqli_error($conn);
}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>

a:link,a:visited
  {
 
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
 <a href="u_index.php"><class='btn btn-primary  float-right' ><b>Go back</a></b>

</body>
</html>