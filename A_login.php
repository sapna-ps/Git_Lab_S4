<?php 

session_start();

 include("A_connection.php");
 include("A_function.php");


 if($_SERVER['REQUEST_METHOD'] == "POST")
 {
  //something was posted
  $Admin_id = $_POST['Admin_id'];
  $Admin_name = $_POST['Admin_name'];
 $password = $_POST['password'];

  if(!empty($Admin_id) && !empty($Admin_name) && !empty($password) && !is_numeric($Admin_name))
  {

   //read from database
   $query = "select * from admin where Admin_name = '$Admin_name' limit 1";
   $result = mysqli_query($con, $query);

   if($result)
   {
    if($result && mysqli_num_rows($result) > 0)
    {

     $user_data = mysqli_fetch_assoc($result);
     
     if($user_data['password'] === $password)
     {

      $_SESSION['Admin_id'] = $user_data['Admin_id'];
      header("Location: A_index.php");
      die;
     }
    }
   }
   
   echo "wrong Admin name or password!";
  }else
  {
   echo "wrong Admin name or password!";
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
   <div style="font-size: 20px;margin: 10px;color: white;"><center>Log In</center></div>
            <center>
   <input id="text" type="text" name="Admin_id" placeholder="Admin Id"><br><br>
   <input id="text" type="text" name="Admin_name" placeholder="Admin name"><br><br>
   
   <input id="text" type="password" name="password" placeholder="Password"><br><br>
             
   <input id="button" type="submit" value="LogIn"><br><br>
             
    <i>Don't Have An Account?</i>
   <a href="A_signup.php">Click to Signup</a><br><br></center>
  </form>
 </div>
</body>
</html>