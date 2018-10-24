<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

		<title>BookMyMovie | Hollywood Movies</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<div class="row">
	      <div class="col-lg-12">
	        <h1 class="page-header">Hollywood Movies
	          <small>Now Showing</small>
	        </h1>
	        <ol class="breadcrumb">
	          <li><a href="index.php">Home</a></li>
	          <li class="active">Hollywood Movies</li>
	        </ol>
	      </div>
	    </div>

	    <!-- Movie One -->
	    <div class="row">
	      <div class="col-md-7">
	        <a href="moviedetail.php?MovieName=Inferno">
	          <img class="img-responsive img-hover poster" src="php/displayPoster.php?MovieName=Inferno" alt="Inferno">
	        </a>
	      </div>
	      <div class="col-md-5">
	        <h3>Inferno</h3>
	        <h4><i class="fa fa-star"></i> 5/5</h4>
	        <p>
					 <?php
	          $MovieName = 'Inferno';
	          include 'php\displayInfo.php'
	          ?>
					</p>
	        <a class="btn btn-danger" href="moviedetail.php?MovieName=Inferno">View Timings</a>
	      </div>
	    </div>
	    <hr>

	    <!-- Movie Two -->
	    <div class="row">
	      <div class="col-md-7">
	        <a href="moviedetail.php?MovieName=Doctor Strange">
	          <img class="img-responsive img-hover poster" src="php/displayPoster.php?MovieName=Doctor Strange" alt="Doctor Strange">
	        </a>
	      </div>
	      <div class="col-md-5">
	        <h3>Doctor Strange</h3>
	        <h4><i class="fa fa-star"></i> 5/5</h4>
	        <p>
	        <?php
	          $MovieName = "Doctor Strange";
	          include 'php\displayInfo.php'
	          ?>
	        </p>
	        <a class="btn btn-danger" href="moviedetail.php?MovieName=Doctor Strange">View Timings</a>
	      </div>
	    </div>
	    <hr>

  	</div>

	  <div>
	    <p class="spacer"></p>
	  </div>

		<?php include 'components/footer.php';?>
	</body>
</html>
