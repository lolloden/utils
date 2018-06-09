<?php
	define('_UTILS', true);
	require_once('Table.class.php');
   require_once("classGump.php");
   
   // initialize
	$gu = new GUMP('en');
   $main = new Main($gu);
   $sdt = $main->dataControl();
   
	$table = '';
	if(isset($sdt['mydata']) && isset($sdt['columns']) && !empty($sdt['mydata']) && !empty($sdt['columns'])) {
	  $comp = false;
	  if(isset($sdt['comp']) && !empty($sdt['comp'])) {
	    $comp = $sdt['comp'];
	  }
	  $tabClass = DEF_TABLE_CLASS;
	  if(isset($sdt['tabClass']) && !empty($sdt['tabClass'])) {
	    $tabClass = $sdt['tabClass'];
	  }
	  $padding = DEF_CELL_PADDING;
	  if(isset($sdt['padding']) && !empty($sdt['padding'])) {
	    $padding = $sdt['padding'];
	  }
	  $replacer = REPLACER;
	  if(isset($sdt['replacer']) && !empty($sdt['replacer'])) {
	    $replacer = $sdt['replacer'];
	  }
	  $t = new Table($sdt['mydata'], $sdt['columns'], $comp, $tabClass, $padding, $replacer);
	  $table = $t->buildTable();
	}
	
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
      <h1 class="my-4">Result
      </h1>
     <div class="row">
	    <?php 
	       if($table != '') {
	         echo '<div class="jumbotron jumbotron-fluid">
				      <div class="container">
				      <h5>Copy this text:</h5>
				      <p>' . htmlentities($table) . '</p>
				      </div>
				      </div>';
	       }
	    ?>
     </div>
     <h1 class="my-4">Preview
      </h1>
      <div class="row">
        <?php 
	       echo $table . '<br />
				      <button type="button" class="btn btn-primary" onclick="javascript:history.back();">Back</button>';
	     ?>
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
