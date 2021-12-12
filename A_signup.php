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
   if(strlen($password)<8)
  {die('password must be atleast 8 characters');}
        $cpassword = $_POST['cpassword'];
  if(!empty($Admin_id) && !empty($Admin_name) && !empty($password) && !is_numeric($Admin_name))
  {

   //save to database

   $query = "insert into admin (Admin_id,Admin_name,password) values ('$Admin_id','$Admin_name','$password')";

   mysqli_query($con, $query);

   header("Location: A_login.php");
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

   <input id="text" type="text" name="Admin_name" placeholder="Admin name"><br><br>
   <input id="text" type="text" name="Admin_id" placeholder="Admin Id"><br><br>
   <input id="text" type="password" name="password" placeholder="Password"><br><br>
   <input id="text" type="password" name="cpassword" placeholder="Confirm Password"><br><br>
   
            <center>
   <input id="button" type="submit" value="Signup"><br><br>
             <i>Already Have An Account?</i>
   <a href="A_login.php">Click to Login</a><br><br></center>
  </form>
 </div>
</body>
</html>