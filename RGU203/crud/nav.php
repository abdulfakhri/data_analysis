<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RGU Technology</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
           ,h1,button {font-family: "Montserrat", sans-serif}
           .fa-anchor,.fa-coffee {font-size:200px}
            
            body {
                background-color: #ffffff; 
                font-family: Arial;
                font-size: 17px;
                padding: 0px;
            }

            * {
                box-sizing: border-box;
            }
            .row {
                display: -ms-flexbox; /* IE10 */
                display: flex;
                -ms-flex-wrap: wrap; /* IE10 */
                flex-wrap: wrap;
                margin: 0 -16px;
            }
            .col-25 {
                -ms-flex: 25%; /* IE10 */
                flex: 25%;
            }
             .col-10 {
                -ms-flex: 15%; /* IE10 */
                flex: 15%;
            }
            .col-50 {
                -ms-flex: 50%; /* IE10 */
                flex: 50%;
            }
            .col-75 {
                -ms-flex: 75%; /* IE10 */
                flex: 75%;
            }
            .col-25,
            .col-50,
            .col-75 {
                padding: 0 16px;
            }
           
            .container {
                background-color: #ffffff;
                padding: 20px 20px 20px 20px;
                
                border-radius: 3px;
            }
            input[type=text] {
                width: 30%;
                margin-bottom: 20px;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 1px;
            }
            label {
                margin-bottom: 10px;
                display: block;
            }
            .icon-container {
                margin-bottom: 20px;
                padding: 7px 0;
                font-size: 24px;
            }
            .btn {
                background-color: gray;
                color: white;
                padding: 10px;
                margin: 8px 0;
                border: none;
                width: 100%;
                border-radius: 2px;
                cursor: pointer;
                font-size: 17px;
            }
            
            .btn:hover {
                background-color: red;
                
            }
            a {
                color: #2196F3;
            }

            hr {
                border: 1px solid lightgrey;
            }

            span.price {
                float: right;
                color: grey;
            }
            /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
            @media (max-width: 800px) {
                .row {
                    flex-direction: column-reverse;
                }
                .col-25 {
                    margin-bottom: 20px;
                }
            }

            <!--Navbar Styling-->
            body {
      margin: 0;
     font-family: Arial, Helvetica, sans-serif;
    }

   w3-top {
    width:100%;
  }


       </style>
       <!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="/mpages/home.php" class="w3-bar-item w3-button w3-padding-large w3-white">RGU</a>
    <a href="/mpages/products.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large">Manual Purchase Entry</a>
      
 
    <a href="/mpages/AutoDataEntry.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large">Auto Purchase Entry</a>
     
      
   <a href="/mpages/filter_inv.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large"> Purchase History</a>
     
  
    <a href="/mpages/inventory.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Inventory</a>

    <a href="/mpages/sale.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Auto Sales Entry</a>
    
    <a href="/mpages/expiry.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Expiry</a>
     
   
     <a href="/spages/logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sign Out</a>
    
  </div>
 
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
  
    <a href="/mpages/home.php" class="w3-bar-item w3-button w3-padding-large w3-white">RGU</a>
    <a href="/mpages/products.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large">Manual Purchase Entry</a>
      
 
    <a href="/mpages/AutoDataEntry.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large">Auto Purchase Entry</a>
     
      
   <a href="/mpages/filter_inv.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large"> Purchase History</a>
     
  
    <a href="/mpages/inventory.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Inventory</a>

    <a href="/mpages/sale.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Auto Sales Entry</a>
    
    <a href="/mpages/expiry.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Expiry</a>
     
   
     <a href="/spages/logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sign Out</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large"></a>
     <a href="/spages/logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">SignOut</a>
  </div>
</div>
<body>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>