
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>

a:link,a:visited
  {
  background-color:white;
     color:#000080;
   padding:17px; 
   
   text-decoration:none;
  
  
  }
  a:hover,a:active{
    background-color:;
    color:green;
  }
    .button{

border: none;
        color: white;
        padding: 20px 34px;
        text-align: center;
  background-color: red;
  
 }
    .styled-table
  { 
  
  border-collapse:collapse; 
  margin:50px 0;
    font-size:19px;
  font-family:sans-serif; 
  min-width:100px;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.20); 
  }
  .styled-table thead tr 
  { 
  height:60px;
  background-color:#4c4ce6;
  color:#ffffff; ;
  text-align: left;
  }
  .styled-table th,
  .styled-table td 
  { 
  padding: 12px 35px;
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
  border-bottom:3px solid#4c4ce6;

  }
  .btn
  {
    background-color:;
    color:darked;
    font-size:17px;
    padding:10px; 10px;
      border-radius:6px;
    
  }
  .btn:hover
  {   
    background:blue;
    color:#fff;
        
  }
  </style><body>
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
  <thead><center><h1 style="color:#000080;">User Record</center></h1><br>
      </tr>
												<thead>

        <th> User ID      </th> 
        <th> Name         </th> 
        <th> Joining Date </th>
    <th> Action       </th>
      </tr>
</thead>
  <tbody>
    </center>
        <?php  


  include("condel.php");
    
    // error_reporting(0);

$query = "select * from user"; 
 
$data=mysqli_query($con,$query); 
$total=mysqli_num_rows($data);


if($total!=0)
{


    
        while($result=mysqli_fetch_assoc($data))
        { 
      echo "
  <tr>
    <td>".$result['user_id']."</td>
    <td>".$result['user_name']."</td>
    <td>".$result['date']."</td>
  <td><a  href='ur_dele.php?ur=$result[user_id]'>Remove</a></td>
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