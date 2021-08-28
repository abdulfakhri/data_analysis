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
$result = mysqli_query($mysqli, "SELECT * FROM  Minventory  WHERE login_id=".$_SESSION['id']." ORDER BY product_name ASC LIMIT 10");
if(isset($_POST['filter'])){


  $Filt =$_POST['num'];
  $Date_reg =$_POST['date_reg'];

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT DISTINCT * FROM  Minventory  WHERE login_id=".$_SESSION['id']." AND date_reg LIKE '%".$Date_reg."%' ORDER BY product_name ASC LIMIT $Filt");


}

?>
<?php
if(isset($_POST['submit'])){

//including the database connection file
include_once("connection.php");

$Key=$_POST['search_key'];
//fetching data in descending order (lastest entry first)
$resul = mysqli_query($mysqli, "SELECT * FROM Minventory WHERE login_id=".$_SESSION['id']." AND product_name LIKE '%".$Key."%' OR company_name LIKE '%".$Key."%' OR expiry_date LIKE '%".$Key."%' OR bill_date LIKE '%".$Key."%' OR quantity LIKE '%".$Key."%' OR batch_no LIKE '%".$Key."%' OR supplier LIKE '%".$Key."%' OR expiry LIKE '%".$Key."%' ORDER BY product_name ASC");
}
?>
   
<!--Navbar(sit on top)-->
        
<div class="menu">
            
    <?php include 'nav.php';?>
        
</div>
<body>
       

<center>
     
        
         <form action="" method="post" id="searchform">
     
       <h1> Inventory Search Engine </h1>
       
          <input  type="text"  name="search_key"  placeholder="Search By Any Details Of A Product..." />
      <input type="submit" name="submit"  class="btn btn-default" value="Search"/>
       
      
     <div class="table-responsive text-nowrap">
               
          <table class="table table-striped">
			
                           <thead>
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
                                    <th>Bill Name</th>  
                                   <th>Dealer</th>
                                   <th>Changes</th>
                                 </tr>
                            </thead>
							  
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
		                           //To Fix bill name for all
		                           $BillName =$re['bill_name'];
		                           $BillNo = $re['bill_no'];
		                           $BillDate= $re['bill_date'];
		                           $DateReg= $re['date_reg'];
		                           $Dealer = $re['supplier'];
		                           $Name= $_SESSION['name'];
		                           $BillSdate =date_create($DateReg);
                                           $BillPur = date_format($BillSdate,"Y-m-d");
                                           
                                           
                                           if($BillDate == null){
		                           
		                              $BDate = $BillPur;
		                           
		                           }
		                            
		                            else if($BillDate =='0000-00-00'){
		                           
		                              $BDate = $BillPur;
		                           
		                           }else if($BillDate != '0000-00-00'){
		                            
		                              $BDate =  $re['bill_date'];
		                            
		                           } 
		                           if($BillName != null){
		                           
		                              $BillName = $re['bill_name']; 
		                           }
		                          else if($BillName == null){
		                        
		                              $BillName = $BillNo."_".$Dealer."_".$Name.".xls"; 
		                             
		                          }else if($BillName == null AND $Dealer == null) {
		                           
		                              $BillName = $re['bill_no'];
		                          
		                          }else{
		                              $BillName = $re['bill_name'];
		                          
		                          }
		                           
		                           
		                           
		                           //Expiry Indicator
		                           
		                            $Expiry =$re['expiry_date'];
		                      
		                        $BExpiry=$re['expiry'];
		                      
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
                                   
		                            echo "<tr>";
                                            echo "<th>".$re['product_name']."</th>";
                                            echo "<th style='color:$color'>".$notes."</th>";
                                          
                                            echo "<td style='color:$QColor'>".$re['quantity']."</td>";
                                            echo "<td>".$re['expiry_date']."</td>";
                                            echo "<td>".$re['company_name']."</td>";
                                            echo "<td>".$re['price']."</td>";
                                            echo "<td>".$re['packing']."</td>";
                                            echo "<td>".$re['batch_no']."</td>";
                                            echo "<td>".$BDate."</td>";
                                            echo "<td>".$BillName."</td>";
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
          
           
           
           
         
           
           
           
           
            <form action="" method="POST">
            
           
        
            <input  type="text"  name="num"  placeholder="Enter Number of Products" required/> <br>
             <input  type="text"  name="date_reg"  placeholder="Enter Bill Date"  required/>
             
             <input type="submit" name="filter"  class="btn btn-default" value="Filter"/>
            
           </form>
           <div class="table-responsive text-nowrap">
            <form action="/action.php" method="POST">
                        <center>     
               
                        <table class="table table-striped">
                                

                                   <thead>
                            
                                    <tr>

                                  
                                   
                                   <th>Product</th>
                                   <th>Status</th>
                                   <th>Quantity</th>
                                   <th>Expiry</th>
                                   
                                   <th>Bill Date</th>
                                   <th>Bill Name</th>
                                  
                                   <th>Company</th>
                                   <th>MRP</th>
                                   <th>Packing</th>
                                  
                                   <th>Batch No</th>
                                  
                                   <th>Changes</th>
                                   
                                  
                                 
                                 </tr>
                            
                              </thead>
                        
                        <tbody>
                            
                           <?php
		                  while($res = mysqli_fetch_array($result)) {
		                      
		                     
		                      //to mention quantity
		                      $QtyStock=$res['quantity'];
		                      
		                      if($QtyStock == 0 ){
		                      
		                      $QColor ="#ff0000";
		                      
		                      }else if($QtyStock < 0){
		                      
		                      $QColor ="#ff0000";
		                      
		                      }else{
		                      
		                      $QColor ="#0044cc";
		                      
		                      }
		                        //To Fix bill name for all
		                           $BillName =$res['bill_name'];
		                           $BillNo = $res['bill_no'];
		                           $BillDate= $res['bill_date'];
		                           $DateReg= $res['date_reg'];
		                           $Dealer = $res['supplier'];
		                           $Name= $_SESSION['name'];
		                           $BillSdate =date_create($DateReg);
                                           $BillPur = date_format($BillSdate,"Y-m-d");
		                           
		                           if($BillDate =='0000-00-00'){
		                           
		                              $BDate = $BillPur;
		                              
		                           }else if($BillDate == null){   
		                           
		                               $BDate = $BillPur;
		                           
		                           }else if($BillDate != '0000-00-00'){
		                            
		                              $BDate =  $res['bill_date'];
		                            
		                           } 
		                           if($BillName != null){
		                           
		                              $BillName = $res['bill_name']; 
		                           }
		                          else if($BillName == null){
		                        
		                              $BillName = $BillNo."_".$Dealer."_".$Name.".xls"; 
		                             
		                          }else if($BillName == null AND $Dealer == null) {
		                           
		                              $BillName = $res['bill_no'];
		                          
		                          }else{
		                              $BillName = $res['bill_name'];
		                          
		                          }
		                           
		                      
		                      
                                      
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
		                  echo "<tr>";
                               
		                  echo "<th>".$res['product_name']."</th>";
		                  echo "<th style='color:$color'>" .$notes. "</th>";
		                  echo "<td style='color:$QColor'>".$res['quantity']."</td>";
		                  echo "<th>".$res['expiry_date']."</th>";
		                  echo "<td>".$BDate."</td>";
                                  echo "<td>".$BillName."</td>";
		                  echo "<td>".$res['company_name']."</td>";
		                  echo "<td>".$res['price']." Rs</td>";
		                  echo "<td>".$res['packing']."</td>";
		                  echo "<td>".$res['batch_no']."</td>";
		                 
		                 
		                  echo "<td><a href=\"/mpages/crud/edit_product.php?id=$res[id]\">Edit</a> | <a href=\"/mpages/crud/delete_product.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		                 
		                  }
                          ?>
                        </tbody>
                       
                    </table>   
                   
                    
                 </center>
                
                
               
 
            </form>
            </center>
		   </div>
		   </center>
   <div class="menu">
            
    <?php include 'footer.php';?>
         
</div>