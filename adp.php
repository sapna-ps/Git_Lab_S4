<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>E-Pharmacy</title>
</head>
<body>
<style type="text/css">
body{
    
    background-color:#e6f3ff;
    
    background-position:center;
    background-repeat:no-repeat;
    background-size:cover;
    }
  
#text{

  height: 20px;
  border-radius: 25px;
 padding: 4px;
  border: solid thin #aaa;
  width: 50%;
 }
 #button{
         border-radius: 30px;
		padding: 10px;
		width: 100px;
		color: white;
		background-color: green;
		border: none;
	}

  #box{
         
     height: 420px;
    
     color:#fff;
     
       
    background-color: rgba(0,0,0,0.5);
    border-radius:04px;
  margin: auto;
  margin-top:70px;
  border-radius:04px;
    width: 560px;
    padding: 20px;
	
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
  }
      

</style>
  <a href="A_index.php"><class='btn btn-primary  float-right' ><b>Go back</a></b>
  
<center><h2>Add Product</h2></center>
<div id="box">
<form action="adp2.php" method="POST" name="register">
<br>
Item Name :
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input id="text" type="text" name="name">
<br/><br><br/>
Price :
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="text" id="text" name="price">
<br><br><br/>
Manufacturing Company :
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="text" id= "text" name="mfc">
<br/><br/>
<br/>
Description :
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input id="text" type="text" name="description">
<br/><br><br/>

Upload picture :
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="file"  name="image"><br><br>
<br/><br/><br/><center>
<input type="submit" id="button" name="submit" value="Submit">
<input type="reset" id="button" name="reset" value="Reset">
</center>
</form>
</div>

</body>
</html>