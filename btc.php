<?php
	define('_UTILS', true);
	require_once('Btc.class.php');
   require_once("classGump.php");
   
   // initialize
	$gu = new GUMP('en');
   $btc = new Btc($gu);
   
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
              <a class="nav-link" href="table.php">BTC to Euro and satoshi</a>
              <span class="sr-only">(current)</span>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">BTC to Euro and satoshi
      </h1>
     <div class="row">
	    <div class="col-md-2"></div>
	       <div class="col-md-8">
		     <div class="container-fluid" style="padding: 60px 0 150px 0;">
               <div class="alert alert-success" role="alert" style="margin: 40px 0;">
					  <?php echo '1 bitcoin = € <b>' . $_SESSION['rate'] . '</b> EUR (source: Bitpay on ' . $btc->mytime . ')'; ?>
					</div>
               <form>
					  <div class="form-row">
					    <div class="col">
					      <label for="btc">Convert BTC to euro/satoshi</label>
                     <input maxlength="10" type="number" name="btc" id="btc" min="0" placeholder="eg. 0.01234">
                     <input type="hidden" id="valore" value="<?php echo $_SESSION['rate']; ?>">
					    </div>
					  </div>
					</form>
					<table class="alfa">
					  <tr>
					  <td><b>euro: </b></td>
					  <td id="res2" style="color: red;">&nbsp;</td>
					  </tr>
					  <tr>
					  <td><b>satoshi: </b></td>
					  <td id="res" style="color: red;"></td>
					  </tr>
					</table>
            </div>
		    </div>
	   <div class="col-md-2"></div>
    </div>
    
    <hr>
    <div class="row" style="margin: 0 0 50px 20px;">
    <div class="fb-like" data-href="http://functions.tradepost.it/index.php" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
    </div> 
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
     <script src="https://rawgit.com/dawsonbotsford/satoshi-bitcoin/master/index.bundle.js"></script>
    <script src="my.js"></script>
  </body>

</html>
