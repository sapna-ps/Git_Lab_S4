
<!DOCTYPE html>
<html>
<head>
  <title>E-Pharmacy</title>
  
</head>
<body>
   
  <style>
   .button{

border: none;
        color: white;
        padding: 20px 34px;
        text-align: center;
  background-color: green;
  
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
    background-color:#cae2e6;
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
  </style><center>
  
   
  <table class="styled-table">
  <thead><center><h1 style="color:#000080;">Shops Record</center></h1>
        <th> Shop Licence Number </th> 
        <th> Shop Name </th> 
        <th> Address </th> 
        <th> Joining Date </th> 
    <th> Action </th>
    </thead>
  </center>
        <?php  


  include("u_connection.php");
    
      error_reporting(0);

$query = "select * from shop"; 
 
$data=mysqli_query($con,$query); 
$total=mysqli_num_rows($data);


if($total!=0)
{


    
        while($result=mysqli_fetch_assoc($data))
        { 
      echo "
    <tr>
    <td>".$result['shop_licence_no']."</td>
    <td>".$result['shop_name']."</td>
    <td>".$result['address']."</td>
    <td>".$result['date']."</td>
  <td><a href='sr_dele.php?sn=$result[shop_licence_no]'><button>Remove</button></a></td>
  </tr>
    ";
    }
}  
   else {
echo "no";
   }
?>   
</table> 
  </body> 
  </html>