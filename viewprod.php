
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>

a:link,a:visited
  {
  background-color:white;
     color:#000080;
   padding:17px; 
   text align:center;
   text-decoration:none;
 
   border-radius:7px;
  }
  a:hover,a:active{
    background-color:;
    color:green;
  }
</style>
<body>
     <a href="A_index.php"><class='btn btn-primary  float-right' ><b>Go back</a></b>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

  <center>
			    <div class="table-responsive">
                            <table class="table table.bordered">
                                
                                










											
												
												 <div class="card-body">
												<form action="" method="POST"  enctype="multipart/form-data">
												<table class="table" align="center" border="1px" style="width:730px; height:80px; line-height:50px;"> 
  <thead><center><h1 style="color:#000080;">Products Record </center></h1><br>
       
	                                          	</tr>
												<thead>
												<tr>
												<th scope="col">ID</th> 
												 <th scope="col">Name</th> 
												 <th scope="col">Company</th> 
												 <th scope="col">Price</th> 
												
												 
												 
												 <th scope="col">Action</th> 
												 
												 </tr>
												 </thead>
												  <tbody>
    </center>
        <?php  


  include("condel.php");
    
    // error_reporting(0);

$query = "select * from PRODUCTS"; 
 
$data=mysqli_query($con,$query); 
$total=mysqli_num_rows($data);

	
if($total!=0)
{


    
        while($row=mysqli_fetch_assoc($data))
        { 
      echo "
  <tr>
    <td>".$row['PID']."</td>
    <td>".$row['PRODUCT']."</td>
    <td>".$row['MFC']."</td>
	<td>".$row['PRICE']."</td>
	
	
	<td><a  href='prodele.php?pn=$row[PID]'>Remove</a></td>
    </tr>
     ";
    }
}  
   else {
echo "no";
   }
?>   
  </tbody>
										  </table>
												
						         	</div>
												
                                     
                           
                        </div>

                    </div>
                </div>

            </div>
        </div> 
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
  </html>