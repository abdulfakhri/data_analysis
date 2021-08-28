<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>


   



<body>
       
<!--Navbar(sit on top)-->
        
<div class="menu">
            
    <?php include 'nav.php';?>
         
</div>
      <center>
        <div class="container">
         <h3> Record Customer Orders</h3>
            
            <form action="/action.php" method="POST">

                <div class="row">
                    
                         <div class="col-25">

                    
                                <label for="">Product Name:</label>
                                <input type="text" id="" name="product_name" placeholder="">
                                <label for="">Company:</label>
                                <input type="text" id="" name="company_name" placeholder="">
                                
                                <label for="">Expiry Date:</label>
                                <input type="text" id="" name="expiry_date" placeholder="YYYY-MM-DD">
                                <label for="">Order Date:</label>
                                <input type="text" id="" name="order_date" placeholder="YYYY-MM-DD">
                          </div>
                          <div class="col-25">       
                                
                                <label for="">Quantity:</label>
                                <input type="text" id="qnt" name="quantity" placeholder="">
                                <label for="">Order Deadline:</label>
                                <input type="text" id="" name="order_deadline" placeholder="YYYY-MM-DD">
                                <label for="">Customer Name:</label>
                                <input type="text" id="" name="customer_name" placeholder="">
                                <label for="">Customer Add:</label>
                                <input type="text" id="" name="home_address" placeholder="">
                                <label for="">Mobile No:</label>
                                <input type="text" id="" name="mobile_no" placeholder="">
                                
                                
                                 
                         </div>
                           

                </div>

                <div class="row">
                    
                        <div class="col-25">

                         <button type="submit"  class="btn btn-default" name='order' >Save Order</button>

                        </div>
                        
                        <div class="col-25">

                        <button type="reset" class="btn btn-default">Clear </button>
                        
                        </div>
                </div>
 
            </form>
            
        </div>
        
        </center>

    </body>
    
</html>