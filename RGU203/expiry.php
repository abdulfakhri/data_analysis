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
$result = mysqli_query($mysqli, "SELECT * FROM  Minventory  WHERE login_id=".$_SESSION['id']." ORDER BY product_name ASC");

?>
<?php
if(isset($_POST['submit'])){

//including the database connection file
include_once("connection.php");

$Key=$_POST['search_key'];
//fetching data in descending order (lastest entry first)
$resul = mysqli_query($mysqli, "SELECT * FROM Minventory WHERE login_id=".$_SESSION['id']." AND product_name LIKE '%".$Key."%' OR company_name LIKE '%".$Key."%' OR expiry_date LIKE '%".$Key."%' OR bill_date LIKE '%".$Key."%' OR quantity LIKE '%".$Key."%' OR batch_no LIKE '%".$Key."%' OR supplier LIKE '%".$Key."%' OR expiry LIKE '%".$Key."%' ORDER BY product_name ASC LIMIT 15");
}
?>
<!--Navbar(sit on top)-->
        
<div class="menu">
            
    <?php include 'nav.php';?>
         <br><br>
</div>
<body>
       

<center>
     
        
       <form action="" method="post" id="searchform">
     
       <h1> Expiry Search Engine </h1>
       
          <input  type="text"  name="search_key"  placeholder="Search By Any Details Of A Product..." />
      <input type="submit" name="submit"  class="btn btn-default" value="Search"/>
    
          <div class="table-responsive text-nowrap"> 
             <table class="table table-striped">
			
                           
                                <tr>
                                    
                                   <th>Product</th>
                                    <th>Status</th>
                                   
                                  
                                   <th>Quantity</th>
                                  
                                   <th>Expiry</th>
                                   <th>Company</th>
                                   <th>MRP</th>
                                   <th>Packing</th>
                                   <th>Batch No</th>
                                   <th>Bill Date</th> 
                                   <th>Dealer</th>
                                  
                                  
                                   
                                   <th>Changes</th>
                                 </tr>
                        
                               <tr>
                               <?php
		                       while($re = mysqli_fetch_array($resul)) {
		                             //to mention quantity
		                          $QtyStock=$re['quantity'];
		                      
		                          if($QtyStock == 0){
		                      
		                          $QColor ="#ff0000";
		                      
		                           }else{
		                      
		                           $QColor ="#0044cc";
		                      
		                           }
		                            $Expiry =$re['expiry_date'];
		                            $BExpiry=$re['expiry'];
		                            $CDate=date("Y-m-d");
		                            if($Expiry<=$CDate){
		                            $notes="Expired";
		                            }else if($Expiry==$CDate){
		                            $notes="Expiring Today";
		                            }else if($BExpiry<=$CDate){
		                            $notes="Expiring Soon";
		                            }else if($CDate>=$BExpiry){
		                            $notes="Expiring Soon";
		                            }else if($CDate==$BExpiry){
		                            $notes="Expiring Soon";
		                            }else if($Expiry>$CDate){
		                            $notes="Not Expired";
		                            } else{
		                            $notes ="";
		                            }
                                   
		                            echo "<tr>";
                                            echo "<th>".$re['product_name']."</th>";
                                            echo "<td>" .$notes. "</td>";
                                          
                                            echo "<td style='color:$QColor'>".$re['quantity']."</td>";
                                            echo "<td>".$re['expiry_date']."</td>";
                                            echo "<td>".$re['company_name']."</td>";
                                            echo "<td>".$re['price']."</td>";
                                            echo "<td>".$re['packing']."</td>";
                                            echo "<td>".$re['batch_no']."</td>";
                                            echo "<td>".$re['bill_date']."</td>";
                                            echo "<td>".$re['supplier']."</td>";
		                            echo "<td><a href=\"/mpages/crud/edit_product.php?id=$re[id]\">Edit</a> | 
		                            <a href=\"/mpages/crud/delete_product.php?id=$re[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		                            echo "</tr>";	
	                            	}
	                            	?> 
                           </tr>
             
	
            </table>   
          </div>
    </form>
</div>

        
        
        
        
           <center> <h1>Inventory Controlling</h1></center>
           <center>
           <br>
         
           <div class="table-responsive text-nowrap">
            <form action="/action.php" method="POST">
                        <center>     
               
                        
                                   <table class="table table-striped">

                                   <thead>
                            
                                    <tr>

                                  
                                   
                                   <th>Product</th>
                                  
                                   <th>Bill Date</th>
                                   
                                   <th>MRP</th>
                                   <th>Company</th>
                                   <th>Packing</th>
                                   <th>Quantity</th>
                                   <th>Batch No</th>
                                   <th>Expiry</th>
                                   <th>Status</th>
                                   <th>Changes</th>
                                   
                                  
                                 
                                 </tr>
                            
                              </thead>
                        
                        <tbody>
                            
                           <?php
		                  while($res = mysqli_fetch_array($result)) {
		                           $Expiry =$res['expiry_date'];
		                      
		                      $BExpiry=$res['expiry'];
		                      
		                      $CDate=date("Y-m-d");
		                     if($Expiry == null){

                                         $notes="Surgical Drug";
                                         $color="#ffb3b3";

                                    }else if($Expiry=='0000-00-00'){
		                         
		                         $notes="Surgical Drug";
                                          $color="#ffb3b3";
		                         
		                     }else if($Expiry<=$CDate){
		                         
		                         $notes="!!!Expired";
                                           $color="#ff0000";
		                         
		                         
		                       }else if($Expiry==$CDate){
		                         
		                         $notes="!!Expiring Today";
		                          $color="#ff9999";
		                         
		                       }else if($BExpiry<=$CDate){
		                         
		                         $notes="!!Expiring Soon";
		                          $color="#ff4d94";
		                         
		                     }else if($CDate>=$BExpiry){
		                        
		                        
		                          $notes="!!Expiring Soon";
		                           $color="#ff4d94";
		                     }else if($CDate==$BExpiry){
		                        
		                        
		                          $notes="!!Expiring Soon";
		                           $color="#ff4d94";
		                        
		                     }else if($Expiry>$CDate){
		                         
		                         $notes="Not Expired";
		                          $color="#00ff00";
		                       
		                     } else{
		                         $notes ="";
                                         $color="#ffffff";
		                     }
		                  if( ($Expiry<=$CDate) || ($BExpiry<=$CDate) ||  ($Expiry==$CDate) || ($CDate>=$BExpiry) || ($CDate==$BExpiry||$Expiry==null)){
		                  echo "<tr>";
                               
		                  echo "<th>".$res['product_name']."</th>";
                                  echo "<td>".$res['bill_date']."</td>";
		                  echo "<td>".$res['price']." Rs</td>";
		                  echo "<td>".$res['company_name']."</td>";
		                  echo "<td>".$res['packing']."</td>";
		                  echo "<td style='color:$QColor'>".$res['quantity']."</td>";
		                  echo "<td>".$res['batch_no']."</td>";
		                  echo "<th>".$res['expiry_date']."</th>";
		                  echo "<th style='color:$color'>" .$notes. "</th>";
		                  echo "<td><a href=\"/mpages/crud/edit_product.php?id=$res[id]\">Edit</a> | <a href=\"/mpages/crud/delete_product.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		                 }
		                  }
                          ?>
                        </tbody>
                       
                    </table>   
                   
                    
                 </center>
                
                
               
 
            </form>
            </div>
			</center>
   <div class="menu">
            
    <?php include 'footer.php';?>
         
</div>