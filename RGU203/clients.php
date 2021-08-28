<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
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
$result = mysqli_query($mysqli, "SELECT * FROM  login ");

?>

<!--Navbar(sit on top)-->
        
<div class="menu">
            
    <?php include 'nav.php';?>
         <br><br>
</div>
<body>
       

<center>
     
        
    
</div>

        
        
        
        
           <center> <h1>Registered Clients List</h1></center>
           
           <br>
         
           
            <form action="/action.php" method="POST">
            
                        <center>     
               
                        
                                 <table>

                                   <thead>
                                    <tr>  <p>  <a href="/mpages/purchase_list.php">Download Purchase List PDF File </a> </p></tr>
                                    <tr>

                                  
                                   
                                   <th>Name</th>
                                   <th>Username</th>
                                   <th>Password</td>
                                   <th>Changes</th>
                                   
                                  
                                 
                                 </tr>
                            
                              </thead>
                        
                        <tbody>
                            
                           <?php
		                  while($res = mysqli_fetch_array($result)) {
		                          
		                  echo "<tr>";
                               
		                  echo "<th>".$res['name']."</th>";
		                   echo "<td>".$res['username']."</td>";
                                  echo "<td>".$res['password']."</td>";
                               
		                  echo "<td><a href=\"/mpages/crud/edit_product.php?id=$res[id]\">Edit</a> | <a href=\"/mpages/crud/delete_product.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		                
		                  }
                          ?>
                        </tbody>
                       
                    </table>   
                   
                    
                 </center>
                
                
               
 
            </form>
            </center>
   <div class="menu">
            
    <?php include 'footer.php';?>
         
</div>