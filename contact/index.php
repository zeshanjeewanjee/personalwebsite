<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Contact : <?php echo $conf['titleTagPost']?></title>
<?php include '../includes/links.php';?>
</head>
<body>

	<div class="container-full">

		<?php include '../includes/header.php';?>

		<div class="row">
			<div class="col-md-12">
			<div class="blogPageHero">
			<div id="contactMeTitle">Contact Me</div>
				<div class="row">
					<div class="col-md-6">
						<div class="contactMe">
							<br>
							<div id="contactMeText">Feel free to contact me with any questions or concerns, or just to say hello. I would love to chat with you.</div>
								<img id="map" src="http://res.cloudinary.com/dp3spzmf7/image/upload/c_scale,q_100,w_520/v1500581062/SJMap_wi5h62.png">
						</div>
					</div>

					<div class="col-md-6">
						<div class="row">
							<div class="nameInput">
								<div class="col-xs-4 col-xs-offset-2 col-md-5 col-md-offset-0">
									<label id="contactText" for="firstName">First Name:</label>
									<br>
									<div class="input-group">
			  						<input id="firstName" type="text" class="form-control" placeholder="First Name" aria-describedby="basic-addon1">
									</div>
								</div>

								<div class="col-xs-4 col-xs-offset-1 col-md-7 col-md-offset-0">
									<label id="contactText" for="lastName">Last Name:</label>
									<br>
									<div class="input-group">
			  						<input id="lastName" type="text" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1">
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="emailInput">
								<div class="col-xs-6 col-xs-offset-2 col-md-12 col-md-offset-0">
									<label id="contactText" for="emailAddress">Email Address:</label>
									<br>
									<div class="input-group">
			  						<input id="emailAddress" type="text" class="form-control" placeholder="Email Address" aria-describedby="basic-addon1">
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="messageInput">
								<div class="col-xs-10 col-xs-offset-2 col-md-12 col-md-offset-0">
					  				<label id="contactText" for="message">Message:</label>
					  				<br>
					  				<textarea id="message" name="message" rows="5" cols="35"></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>

		<?php include '../includes/footer.php';?>

	</div>

</body>
</html>
