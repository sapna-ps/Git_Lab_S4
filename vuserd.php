
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User Details</title>
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
    <a href="A_index.php"><class='btn btn-primary  float-right' ><b>Go back</a></b>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
			<center>
			    <div class="table-responsive">
                <table class="table table.bordered">
                <div class="card-body">
                <form action="" method="POST"  enctype="multipart/form-data">
			<table class="table" align="center" border="1px" style="width:930px; height:80px; line-height:50px;"> 
  <thead><center><h1 style="color:#000080;">User Details</center></h1><br>
      </tr>
												<thead>
<th >Order Number</th>
<th >Name</th>
<th>Phone</th>
<th scope="col">Address</th>

<th scope="col">Place</th>
<th scope="col">Pincode</th>
<th scope="col">Email</th>
</tr>
</thead>
  <tbody>
    </center>

<?php
include("u_connection.php");
$query="select * from users";
$data=mysqli_query($con,$query); 


 while($result=mysqli_fetch_assoc($data))
        { 
      echo "
    <tr>
	 <td>".$result['UID']."</td>
   
    <td>".$result['NAME']."</td>
	 <td>".$result['CONTACT']."</td>
    <td>".$result['ADDRESS']."</td>
    <td>".$result['CITY']."</td>
 
	 <td>".$result['PINCODE']."</td>
	<td>".$result['EMAIL']."</td>
	
 </tr>
    ";
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