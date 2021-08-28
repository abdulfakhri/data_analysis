<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
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
         
</div>


  <center>  
          <a href="/mpages/sale_report.php">Download Today's Sale Report</a> 
            <h3>Search Products To Sale</h3>
	   <form action="" method="post" id="searchform">
            <input  type="text"  name="search_key"  placeholder="Search By Any Details Of A Product,To Sale..." />
            
             <input type="submit" name="submit"  class="btn" value="Search"/>
             
             
		  <div class="table-responsive text-nowrap">
          
		   <table class="table table-striped">
		  
		   
          
           
            
            <thead>
                                 
                       
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
                                    <th>Sale</th>
                                  
                                  
                                  

                            
                              </thead>           
            <tbody>    
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
		                            echo "<td><a href=\"/mpages/cart.php?id=$re[id]\">Sale</a></td>";
		                            echo "</tr>";	
	                            	}
	                            	?> 
            </tbody>         
           </table>   
         
          </div>
      </form>
		  <div class="table-responsive text-nowrap">
		  
		 <table class="table table-striped">
                             <thead>
                           
                            <p> Total Sales of Today: <?PHP echo Date("Y-m-d");?>
                            <br>
                            
                             <?php
                           //including the database connection file
                               include_once("connection.php");
                                if (mysqli_connect_errno())
                                    {
                                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                        }
                                        $Date=date("Y-m-d");
                                      
                                      //fetching data in descending order (lastest entry first)
                                         $ret = mysqli_query($mysqli, " SELECT SUM(amount) FROM sales WHERE login_id=".$_SESSION['id']." AND date_reg LIKE '$Date%' ORDER BY date_reg ASC");
		                  while($rs = mysqli_fetch_array($ret)) {
		                    
		                  
		                  echo $rs['SUM(amount)']." Rs";
		                 
		                 
		                  }
                          ?>
                           </p>
                                      <tr>
                                    
                                   <th>Product</th>
                               
                                   <th>MRP</th>
                               
                                   <th>Quantity</th>
                                  
                                   <th>Total</th>
                                      </tr>
                              </thead>
                        
                           <tbody>
                               
                           <?php
                           //including the database connection file
                               include_once("connection.php");
                                if (mysqli_connect_errno())
                                    {
                                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                        }
                                        $Date=date("Y-m-d");
                                      
                                      //fetching data in descending order (lastest entry first)
                                         $ret = mysqli_query($mysqli, "SELECT * FROM  sales  WHERE login_id=".$_SESSION['id']." AND date_reg LIKE '$Date%' ORDER BY date_reg ASC");
		                  while($rs = mysqli_fetch_array($ret)) {
		                    
		                  echo "<tr>";
		                  echo "<td>".$rs['product_name']."</td>";
		                  echo "<td>".$rs['price']."</td>";
		                  echo "<td>".$rs['quantity']."</td>";
		                  echo "<td>".$rs['amount']."</td>";
					echo "</tr>";
		                 
		                  }
                          ?>
                        </tbody>
                        
	
            </table>   
        
          </div>
           

</center>
            
   <div>
            
    <?php include 'footer.php';?>
    
   </div>	
</div>