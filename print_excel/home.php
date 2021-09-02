<html>
<head>
<title>Techjunkgigs</title>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&language=en"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
 <div class="Container">
<h1>Ware Dump</h1>
    <div>
    <form method="POST" action= "exapp.php">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">   
          <h4 class="modal-title"><b>Select Date Between</b></h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
             <input type="date" class="form-control" id="date1" name="date1" required/>
             </div>
               <div class="form-group">
               <label for="attribute2" class="control-label"> To</label>
               <input type="date" class="form-control" id="date2" name="date2" required/>
                </div>              
                </div>
                 <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 <button type="submit" class="btn btn-Primary" name="submit">Submit</a></button>
      </div>
      </div>
      </form>
    </div>
  </div>
</body>
</html>
