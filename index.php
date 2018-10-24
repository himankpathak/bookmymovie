<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

		<title>Welcome to BookMyMovie</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<header id="myCarousel" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<div class="fill" style="background-image:url('img/post-strange.jpg');"></div>
					<div class="carousel-caption">
						<h2>Book tickets in a few clicks</h2>
					</div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('img/post-parmanu.jpg');"></div>
					<div class="carousel-caption">
						<h2>Get movie ratings</h2>
					</div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('img/post-dunkirk.png');"></div>
					<div class="carousel-caption">
						<h2>Read the latest reviews</h2>
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="icon-next"></span>
			</a>
		</header>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="page-header">Movies</h2>
				</div>
				<div class="col-xs-12">
					<h5 class="center-align text-uppercase lead">Coming Soon</h5>
				</div>
				<div class="col-md-3 col-sm-6">
						<img class="img-responsive img-portfolio img-hover" src="img/cs-adhm.jpg" alt="">
				</div>
				<div class="col-md-3 col-sm-6">
						<img class="img-responsive img-portfolio img-hover" src="img/cs-rockon2.jpg" alt="">
				</div>
				<div class="col-md-3 col-sm-6">
						<img class="img-responsive img-portfolio img-hover" src="img/cs-strange.png" alt="">
				</div>
				<div class="col-md-3 col-sm-6">
						<img class="img-responsive img-portfolio img-hover" src="img/cs-fbawtft.jpg" alt="">
				</div>
			</div>
			<br><br><br>
		</div>

		<div class="bottom">
			<!-- Call to Action Section -->
			<div class="pre-footer small">
				<div class="row">
					<div class="col-xs-12">
						<h5 class="center-align bold" style="color:#555;">Book an experience with BookMyMovie!</h5>
					</div>
					<div class="row row-content">
						<div class="col-xs-12">
						Life has never been so convenient for a movie buff! Remember the time, when you had to stand in a long queue outside the theatre to book movie tickets? That time is gone now!With the emergence of BookMyMovie, India's biggest online ticketing portal, booking movie tickets have become a cake walk. Now, enjoy your favourite movies in theatre with just a click! BookMyMovie is Movies on the go - Jahan mood kiya wahan book kiya! Just take out your mobile, launch the app, choose your movie, theatre &amp; show time and book tickets online, right away! So simple. Isn't it! We give you some more amazingly cool reasons why you should book your movie tickets here!
						</div>
					</div>
					<div class="row row-content">
						<div class="col-sm-4 col-xs-12">
							<h5 class="bold">Bollywood, Hollywood or Regional cinema</h5>
						<p>Whatever be your choice in movies, BookMyMovie is the Go-to destination! With the list of all the upcoming movies in any language - Hindi, English, Marathi, Tamil, Telugu, Kannada, Malayalam or Genre – Action, Comedy, Thriller, Drama, Romance, Animation or Crime, we keep you informed about the movie world! We give you the release dates also, to let you plan your movie outing accordingly!</p>
						</div>
						<div class="col-sm-4 col-xs-12">
							<h5 class="bold">Check out latest movie trailers</h5>
						<p>They say “If the constitution was a film, the preamble would be the trailer”. Now, go nowhere, come straight to us and check out the all the latest Bollywood, Hollywood, Kollywood or Tollywood movie trailers before booking your tickets. We bring you the theatrical previews of all the showing movies! </p>
						</div>
						<div class="col-sm-4 col-xs-12">
							<h5 class="bold">Read Movie Reviews</h5>
						<p>If you are the kind of person, who checks reviews before booking movie tickets, we have made it convenient for you as well! You can catch the movie reviews by our own reviewers and the experts on our website.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include 'components/footer.php';?>
		<script>
			$('.carousel').carousel({
				interval: 5000 //changes the speed
			})
		</script>
	</body>
</html>
