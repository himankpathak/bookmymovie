<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

		<title>BookMyMovie | Sign Up</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Sign Up</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8">
					<p>Sign Up with BookMyMovie using your email details to book your tickets within minutes everytime you have a spontaneous movie plan! It'll take you not more than a few minutes, and we won't spam you with promotional mails! What your you waiting for? Turn every movie into a magical experience right now!</p>
				</div>
			</div>

			<br>

			<!-- Signup Form -->
			<div class="row">
				<div class="col-md-8">
					<form name="signupForm" id="signupForm" action="php\signup.php" method="post" novalidate>
						<div class="control-group form-group">
							<div class="controls">
								<label>Full Name:</label>
								<input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label class="radio-inline"><input type="radio" id="radio" name="gender" required data-validation-required-message="Please enter your gender." value="female">Female</label>
								<label class="radio-inline"><input type="radio" name="gender" value="male">Male</label>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label>Phone Number:</label>
								<input type="tel" class="form-control" id="phone"  name="phone"required data-validation-required-message="Please enter your phone number.">
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label>Email Address:</label>
								<input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label>Password:</label>
								<input type="password" class="form-control" id="password" name="password" required data-validation-required-message="Please enter a password.">
							</div>
						</div>
						<div id="success"></div>
						<!-- For success/fail messages -->
						<br>
						<button type="submit" class="btn btn-danger" name="submit" id="submit" value="submit">Sign up!</button>
					</form>
				 </div>
			</div>
		</div>

	  <div>
	    <p class="spacer"></p>
	  </div>

		<?php include 'components/footer.php';?>
		<script src="js/jqBootstrapValidation.js"></script>
		<script src="js/signup.js"></script>
	</body>
</html>
