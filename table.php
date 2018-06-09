<?php
	define('_UTILS', true);
	require_once('Table.class.php');
   require_once("classGump.php");
   
   // initialize
	$gu = new GUMP('en');
   $main = new Main($gu);
   $sdt = $main->dataControl();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="devops" >

    <title>Utilities</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Utilities</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="table.php">Table generator</a>
              <span class="sr-only">(current)</span>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Table generator
      </h1>
     <div class="row">
	    <div class="col-md-2"></div>
	       <div class="col-md-8">
		    <form action="buildTable.php" method="post">
		    
		       <div class="form-group">
				  <label for="columns" class="col-2 col-form-label">Columns? *</label>
				  <input class="form-control" type="number" name="columns" id="columns" min="1" required>
				 </div>
				 
			    <div class="form-group">
			    <label for="exampleTextarea">Table data *</label>
			    <p>( read the<a href="#" style="" id="guide1"> instructions</a> or load an <a href="#" style="" id="example1"> example </a>)</p>
			    <textarea rows="10" cols="50" name="mydata" class="form-control" id="mydata" rows="3" required></textarea>
			    </div>
			    
			    <div class="form-group">
				  <label for="tabClass" class="col-2 col-form-label">Table class</label>
				  <input class="form-control" type="text" name="tabClass" id="tabClass" placeholder="table">
				 </div>
				 
				 <div class="form-group">
				  <label for="padding" class="col-2 col-form-label">Cell padding</label>
				  <input class="form-control" type="number" name="padding" id="padding" min="1">
				 </div>
				 
				 <div class="form-group">
				  <label for="replace" class="col-2 col-form-label">Replacer</label>
				  <a href="#" style="" id="replacer"><img src="qm.png" alt="?"></a>
				  <input class="form-control" type="text" name="replace" id="replace" placeholder="*">
				 </div>
				 
			    <div class="form-check">
				    <label class="form-check-label">
				      <input type="checkbox" name="comp" id="comp" value="1" class="form-check-input">
				      First cell empty&nbsp;<a href="#" style="" id="comparative"><img src="qm.png" alt="?"></a>
				    </label>
				  </div>
				  <br />
		    	 <button type="submit" name="submit1" id="submit1" value="go" class="btn btn-primary">GO</button>
		    </form>
		    </div>
	   <div class="col-md-2"></div>
    </div>
    
    <hr>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; lolloden <?php echo date('Y'); ?></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="my.js"></script>
  </body>

</html>
