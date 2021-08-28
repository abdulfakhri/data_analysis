<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
// including the database connection file
include_once("connection.php");
$connect = mysqli_connect("localhost","bnsznyem_abfa","!@#123qweasdzxc","bnsznyem_rgu" );
if(isset($_POST['sold'])){

       
	 
	
	
	$pid = $_POST['id'];
	
	 $name = $_POST['product_name'];
	$qty =$_POST['quantity'];
	$Qty = $_POST['qty'];
	$price =$_POST['price'];
	$SubTotal= $price * $Qty;
	$Dc = $_POST['discount'];
	$Discount = ($SubTotal* $Dc)/100;
	$Total = $SubTotal-$Discount; 
	
	$loginId=$_SESSION['id'];
	
	$NewQty= ($qty)- ($Qty);
	
	if($qty == 0) {
	
	  $QtyMsg="You Have Finished This Product In Your Stock";
	  header('URL=/mpages/home.php');
	  
	}else if($Qty > $qty ){
	
	$QtyMsg="You Do Not Have The Requested Quantity In Your Stock";
	
	
	}else{
	
	
	
        $r ="INSERT INTO sales(product_name,quantity,price,amount,pid,login_id) VALUES('$name','$Qty','$price','$Total',$pid,'$loginId');";

$r .="UPDATE Minventory SET quantity='$NewQty' WHERE id='$pid' AND login_id=".$_SESSION['id']."";

         mysqli_multi_query($connect, $r); 
		
		//redirectig to the display page. In our case, it is view.php
		header("Location:/mpages/home.php");
	
}
}
?>


<?php

//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM Minventory WHERE id=$id AND login_id=".$_SESSION['id']." ");

while($res = mysqli_fetch_array($result))
{
	$name = $res['product_name'];
	
	$qty = $res['quantity'];
	
	$price = $res['price'];
	
	
	$Expiry_date=$res['expiry_date'];
	
	$Expiry=$res['expiry'];
}
?>

     
       
    
<body>
    
    
     
       <!--Navbar(sit on top)-->
        
       <div class="menu">
           
         <?php include 'nav.php';?>
         
    </div>
       
	

	
	<!-- Main Content -->
    <center><h2>Sale Products</h2></center>
    
    
  <center><h1><?PHP echo $QtyMsg;?></h1>
   <br></br>
    
         <form action=""  id="form1" name="form1" method="POST">
            
             <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
             
              
             <div class="row">
    
                <div class="col-25">
        
                           <label for="state">Product Name:</label> 
                           <input type="text" name="product_name" value="<?php echo $name;?>">
                          
                           <label for="zip">MRP:</label>
                           <input type="text" name="price" value="<?php echo $price;?>" />  <lable>INR</lable>
                            <label for="zip">Quantity In Stock:</label>
                          <input type="text" name="quantity" value="<?php echo $qty;?>" />
                           
                            <label for="zip"> Requested Quantity:</label> 
                           <input type="text" name="qty" placeholder="Enter Qty" required />
                           
                            <label for="zip"> Discount:</label> 
                           <input type="text" name="discount" placeholder="Give Discount %">
                          
                           
                          
                </div>
                
               </div>

            
            
    
             <div class="row">
               <div class="col-50">
                 <button type="submit" form="form1" name="sold" class="btn btn-default">Sold Product</button>
               
               
              </div>
            </div>


         </form>
    
 </center>

 <div class="menu">
           
         <?php include 'footer.php';?>
         
    </div>