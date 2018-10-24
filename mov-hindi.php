<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

		<title>BookMyMovie | Bollywood Movies</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Bollywood Movies
						<small>Now Showing</small>
					</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Bollywood Movies</li>
					</ol>
				</div>
			</div>

			<!-- Movie One -->
			<div class="row">
				<div class="col-md-7">
					<a href="moviedetail.php?MovieName=Parmanu">
						<img class="img-responsive img-hover poster" src="php/displayPoster.php?MovieName=Parmanu" alt="Parmanu">
					</a>
				</div>
				<div class="col-md-5">
					<h3>Parmanu</h3>
					<h4><i class="fa fa-star"></i> 5/5</h4>
					 <p>
					 <?php
						$MovieName = 'Parmanu';
						include 'php\displayInfo.php'
						?>
					</p>
					<a class="btn btn-danger" href="moviedetail.php?MovieName=Parmanu">View Timings</a>
				</div>
			</div>
			<hr>

			<!-- Movie Two -->
			<div class="row">
				<div class="col-md-7">
					<a href="moviedetail.php?MovieName=Masaan">
					<img class="img-responsive img-hover poster" src="php/displayPoster.php?MovieName=Masaan" alt="Masaan">
					</a>
				</div>
				<div class="col-md-5">
					<h3>Masaan</h3>
					<h4><i class="fa fa-star"></i> 5/5</h4>
					<p>
					 <?php
						$MovieName = 'Masaan';
						include 'php\displayInfo.php'
						?>
					</p>
					<a class="btn btn-danger" href="moviedetail.php?MovieName=Masaan">View Timings</a>
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
