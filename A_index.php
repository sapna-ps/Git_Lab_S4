
<!DOCTYPE html>
<html lang=en>
<head>
  <title>Admin Page</title>
</head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <!-- Box icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./css/styles.css" />
<body>
<style type=text/css>
nav ul{
	padding:0;
	margin:0;
	float:right;
	margin-right:30px;
}
nav ul li{
	display:block;
	padding:0 15px;
}
*{
  margin: 0;
  padding: 0;
  list-style: none;
  text-decoration: none;
}


nav{
  height: 70px;
  
  
}
nav ul{
  float: right;
  margin-right: 10px;
}
nav ul li{
  display: inline-block;
}
nav ul li a{
  
  display: block;
  padding: 0px;
  line-height: 30px;
  font-size: 17px;
 
  transition: .5s;
}
nav ul li a:hover,
nav ul li a.active{
  color: #FC3A43;
}
nav ul ul{
  position: absolute;
  top: 85px;
  border-top: 3px solid #FC3A43;
  opacity: 0;
  visibility: hidden;
}
nav ul li:hover > ul{
  top: 70px;
  opacity: 1;
  visibility: visible;
  transition: .3s linear;
}
nav ul ul li{
  width: 150px;
  display: list-item;
  position: relative;
  border: 1px solid;
  border-top: none;
}
nav ul ul li a{
  line-height: 20px;
}
nav ul ul ul{
  border-top: none;
}
nav ul ul ul li{
  position: relative;
  top: -70px;
  left: 150px;
}
nav ul ul li a i{
  margin-left: 45px;
}

</style>
<header id="home" class="header">
    <!-- Navigation -->
    <nav class="nav">
      <div class="navigation container">
        <div class="logo">
          <h1><b>E-PHARMACY</b></h1>
        </div>

        <div class="menu">
          <div class="top-nav">
            <div class="logo">
              <h1>E-PHARMACY</h1>
            </div>
            <div class="close">
              <i class="bx bx-x"></i>
            </div>
          </div>

          <ul class="nav-list">
            <li class="nav-item">
              <a href="#home" class="nav-link scroll-link">Home</a>
            </li>
			</li>
			<li class="nav-item">
              <a href="#product.html" class="nav-link">Products</a>
			  <ul> 
			  <li><a href="viewprod.php">View Products</a></li>
			  <li><a href="adp.php">Add Product</a></li>
			   
			   </ul>
            </li>
            <li class="nav-item">
              <a  href="viewusers.php" class="nav-link scroll-link">Customers</a>
			  
            </li>
            <li class="nav-item">
              <a href="viewfeedback.php" class="nav-link scroll-link">Feedback</a>
			  
            </li>
			<li class="nav-item">
              <a href="#order" class="nav-link scroll-link">Orders</a>
			<ul> 
			  <li><a href="vieworder.php">Orders</a></li>
			  <li><a href="vuserd.php">User Details</a></li>
			   
			   </ul>
			 
            </li>
            <li class="nav-item">
              <a href="message.html" class="nav-link scroll-link">Message</a>
            </li>
            
            <li class="nav-item">
             <a href="A_logout.php">Logout</a>
	</li> 
	
	</ul>
	
</nav><br>



</body>
</html>
<?php 
 
session_start();

  include("A_connection.php");
  include("A_function.php");

  $user_data = check_login($con);

?>
