<?php 
session_start();

	include("u_connection.php");
	include("u_functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang=en>
<head>
        <title>Products</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head> <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <!-- Box icons -->
 
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./css/styles.css" />
  <title>E-PHARMACY</title>
</head>
<head>
	<title>E-Pharmacy</title>
</head>
<body>
<style type=text/css>
form.search input[type=text]
{
	padding:10px;
	font-size:13px;
	border:1px solid grey;
	float:left;
	width:20%;
	background:#f1f1f1;
	border-radius:15px;
	 position: absolute;
  
  top: 0px;
  left: 900px;
  text-align: center;
}
form.search button
{
	padding:12px;
	font-size:10px;
	border:1px solid grey;
	float:left;
	width:5%;
	background:#094087;
	color:white;
	border-left:none;
	curser:pointer;
	border-radius:15px;
	position: absolute;
	top: 0px;
  left: 1220px;
  text-align: center;
}
form.search button:hover{
	background:#b7dda
}
form.search::after
{
	content:"";
	clear:both;
	display:table;
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
            <li class="nav-item">
              <a href="index.php" class="nav-link">Products</a>
            </li>
            
            <li class="nav-item">
              <a href="feedback2.html" class="nav-link scroll-link">Feedback</a>
            </li>
            <li class="nav-item">
              <a href="viewmsg.php" class="nav-link scroll-link">Inbox</a>
            </li>
            <li class="nav-item">
             <a href="u_logout.php">Logout</a>
	</li> 
	
	</ul>
	
</nav><br>

	
	
	<form class="search" action="u_index.php">
	
	</form>
	<h1>Hello, <b><?php echo $user_data['user_name']; ?></b></h1>
	
	<br><br>
	
	<br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br>
    <br><br><br><br><br><br>

   
	<footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
         
        
        
        <div class="footer-center">
          <h3><b>GET IN TOUCH WITH US</b></h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            Vidya Academy Of Science And Technology
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            Thrissur, Kerala
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            9495774418
          </div>
          <div>
            <span>
              <i><a href="mailto:epharmacy2021.com">epharmacy2021@gmail.com</a>  </i>
            </span>
            
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
</body>
</html>











