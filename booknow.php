<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>
		<link href="css/booknow.css" rel="stylesheet">

		<title>BookMyMovie | Ticket Booking</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Book Now</h1>
				</div>
			</div>

			<!-- Content Row -->
			<div class="row">
				<div class="col-md-8">
					<p>Choose your booking preferences here and proceed to receive your unique Booking ID which you can show at the theatre Box Office to collect your tickets!</p>
					<small>You can currently book tickets only for the day after your booking date with BookMyMovie.</small>
				</div>
			</div>
			<br>

			<!-- BookMovie Form -->
			<div class="row">
				<div class="col-md-8">
					<form name="bookingForm" id="bookingForm" action="booksuccess.php" method="POST" novalidate>
						<div class="control-group form-group">
							<div class="controls">
								<label>Choose your Show Timings:</label>
								<select class="form-control" id="timing" name="timing" required>
									<option value="0" name="timing1" selected>10:00 AM</option>
									<option value="1" name="timing2">12:30 PM</option>
									<option value="2" name="timing3">3:00 PM</option>
									<option value="3" name="timing4">6:00 PM</option>
								</select>
								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label>Number of tickets:</label>
								<input type="number" min="1" max="10" class="form-control" id="ticket" value="1" required>
							</div>
						</div>
						<div id="visible">
							<h3 class="text-center" style="min-height:80px;">
							<strong>Total Amount:</strong>
							<p id="amount">&#8377; 120.00</p>
							</h3>
							<small class="help-block">You cannot change these options once you proceed.</small>
							<button type="button" id="btnTicket" class="btn btn-danger">Confirm and proceed &raquo;</button>
						</div>
						<div id="invisible">
							<p><strong>Choose seats by clicking the corresponding seat in the layout below:</strong></p>
							<div id="holder">
								<ul id="place">
								</ul>
							</div>
							<div>
								<ul id="seatDescription" style="list-style-type:none;">
									<li><span><img src="img/seat-empty.png" height="24px"></span> Available Seat</li>
									<li><span><img src="img/seat-booked.png" height="24px"></span> Booked Seat</li>
									<li><span><img src="img/seat-selected.png" height="24px"></span> Selected Seat</li>
								</ul>
							</div>
							<br>
							<div style="clear:both;width:100%;">
								<input type="button" id="btnShowNew" value="Show My Seats" class="btn btn-default btn-sm"/>
								<input type="button" id="btnShow" value="Show All" class="btn btn-default btn-sm"/>
							</div>

							<br>
							<h3 class="text-center" style="min-height:80px;">
							<strong>Total Amount:</strong>
							<p id="amountTotal">&#8377; 120.00</p>
							</h3>

							<div id="success"></div>
							<!-- For success/fail messages -->
							<br><br>
							<button type="submit" id="btnBook" class="btn btn-danger btn-block" >Book Tickets</button>

						</div>
					</form>
				</div>

			</div>

  	</div>

	  <div>
	    <p class="spacer"></p>
	  </div>

		<?php include 'components/footer.php';?>
		<script src="js/booknow.js"></script>
	</body>
</html>
