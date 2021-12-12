<?php 

session_start();

	include("u_connection.php");
	include("u_functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
	$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from user where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: u_index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	body{
		background:url("pic4.jpeg");
		background-color:#cccccc;
		background-position:center;
		
		background-repeat:no-repeat;
		background-size:cover;
		}
	#text{

		height: 30px;
		border-radius: 25px;
	padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		border-radius: 25px;
		width: 100px;
		color: white;
		background-color: green;
		border: none;
	}

	#box{
         text-align:center
		 height: 700px;
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
			<div style="font-size: 20px;margin: 10px;color: white;"><center>LogIn</center></div>
            <center>
			<input id="text" type="text" name="user_name" placeholder="User Name"><br><br>
			
			<input id="text" type="password" name="password" placeholder="Password"><br><br>
             
			<input id="button" type="submit" value="LogIn"><br><br>
             
			 <i>Don't Have An Account?</i>
			<a href="u_signup.php">Click to Signup</a><br><br></center>
		</form>
	</div>
</body>
</html>