<?php 
session_start();

	include("u_connection.php");
	include("u_functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		 if(strlen($password)<8)
  {die('password must be atleast 8 characters');}
        $cpassword = $_POST['cpassword'];
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(4);
			$query = "insert into user (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: u_login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	body{
		background:url("pic3.jpeg");
		background-color:#cccccc;
		background-repeat:no-repeat;
		background-position:center;
		background-size:cover;
		}
	
	#text{

		height: 25px;
		border-radius: 25px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{
         border-radius: 25px;
		padding: 10px;
		width: 100px;
		color: white;
		background-color: green;
		border: none;
	}

	#box{
         text-align:center
		 height:700px;
		 color:#fff;
		 
	     
		background-color: rgba(0,0,0,0.5);
		border-radius:04px;
	margin: auto;
	margin-top:160px;
	border-radius:04px;
		width: 300px;
		padding: 20px;
	}	
     a:hover{
		 color:yellow;
	 }
	 		
	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;"><center>Sign Up</center></div>

			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>
			<input id="text" type="password" name="cpassword" placeholder="Confirm Password"><br><br>
            <center>
			<input id="button" type="submit" value="SignUp"><br><br>
             <i>Already Have An Account?</i>
			<a href="u_login.php">Click to Login</a><br><br></center>
		</form>
	</div>
</body>
</html>