<?php 


  include("condel.php");
	  
      //error_reporting(0);

$query = "select * from feedback"; 
 
$result=mysqli_query($con,$query); 



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
   .styled-table
  { 
  border-collapse:collapse; 
  margin:25px 0;
    font-size:17px;
  font-family:sans-serif; 
  min-width:700px;
  box-shadow: 0 0 50px rgba(0, 0, 0, 0.20); 
  }
  .styled-table thead tr 
  { 
  height:60px;
  background-color:#4c4ce6;
  color:#ffffff; ;
  text-align:left;
  
  }
  .styled-table th,
  
  .styled-table td 
  { 
  padding: 7px 20px;
  }
  .styled-table tbody tr 
  { 
  border-bottom: 3px solid #dddddd;
  } 
  .styled-table tbody tr:nth-of-type(even)
  { 
  background-color: #f3f3f3; 
  }
  .styled-table tbody tr:last-of-type
  { 
  border-bottom: 3px solid#4c4ce6;
  }
  

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
<a href="A_index.php"><class='btn btn-primary  float-right' ><b>Go back</a></b><center>
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
												<thead>

			 
			  <th> No.</th> 
			  <th> Date</th> 
			  <th> Feedback</th> 
			  
			  </thead>
  <tbody>
    </center>
			  <?php 
			  
			  while($rows=mysqli_fetch_assoc($result))
			  { 
		  ?>
		<tr>
		<td><?php echo $rows['id']; ?></td>
		<td><?php echo $rows['date']; ?></td>
		<td><?php echo $rows['content']; ?></td>
		
		</tr></center>
		<?php 
		}
		?>
		
		
		 
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