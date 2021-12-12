<?php 


  include("condel.php");
	  
      //error_reporting(0);

$query = "select * from message"; 
 
$result=mysqli_query($con,$query); 



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Order</title>
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
   display:inline-block;
   border-radius:7px;
  }
  a:hover,a:active{
    background-color:;
    color:green;
  }
  </style>
<body>
     <a href="u_index.php"><class='btn btn-primary  float-right' ><b>Go back</a></b>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
			<center>
			    <div class="table-responsive">
                <table class="table table.bordered">
                <div class="card-body">
                <form action="" method="POST"  enctype="multipart/form-data">
			<table class="table" align="center" border="1px" style="width:730px; height:80px; line-height:50px;"> 
  <thead><center><h1 style="color:#000080;">Orders</center></h1><br>
      </tr>
		<center>
		<th>Date</th>
		<th>Content</th>
		</tr> 
			  
			</thead>
  <tbody>
    </center>
  
			  <?php 
			  
			  while($rows=mysqli_fetch_assoc($result))
			  { 
		  ?>
		<tr>
		<td><center><?php echo $rows['date']; ?></center></td>
		<td><center><?php echo $rows['content']; ?></center></td>
		
		</tr></center>
		<?php 
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