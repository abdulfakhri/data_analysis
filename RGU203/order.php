<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM  orders  WHERE login_id=".$_SESSION['id']." ORDER BY id DESC LIMIT 7");

?>

   
   



<body>
       
<!--Navbar(sit on top)-->
        
<div class="menu">
            
    <?php include 'nav.php';?>
         
</div>

    <center>
    <h3>Recieved Orders</h3>
        <div class="table-responsive text-nowrap">
		  
		 <table class="table table-striped">
                             <thead>
                           
                                      <tr>
                                    
                                  
                                   <th>Order No:</th>
                                   <th>Products</th>
                                   <th>Quantity</th>
                                   <th>Customer</th>
                                   
                                   <th>Delivery</th>
                                
                                   <th>Changes</th>
                                      </tr>
                              </thead>
                        
                           <tbody>
                         <?php
		                  while($res = mysqli_fetch_array($result)) {
		                  echo "<tr>";
		                  echo "<td>".$res['id']."</td>";
		                  echo "<td>".$res['product_name']."</td>";
		                  echo "<td>".$res['quantity']."</td>";
		                  echo "<td>".$res['customer_name']."</td>";
		                  
		                  echo "<td>".$res['order_deadline']."</td>";
		                  
		                  echo "<td><a href=\"/mpages/crud/edit_order.php?id=$res[id]\">Edit</a> | <a href=\"/mpages/crud/delete_order.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		                  }
                         ?>
                         
                        </tbody>
                        
	
            </table>   
        
          </div>
               
               

               
       
        
    <div class="menu">
            
    <?php include 'footer.php';?>
         
</div>