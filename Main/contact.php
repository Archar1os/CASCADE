<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" href="assets/css/styles.css" />
		<link rel="icon" href="ULOGO.png" type="image/x-icon" />
		<title>Cascade - Contact</title>

		<!-- FONT FOR THE MIDDLE TEXT -->
		<link
			href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap"
			rel="stylesheet"
		/>

		<!-- Font for the bottom middle text -->
		<link
			href="https://fonts.googleapis.com/css2?family=Caladea:ital,wght@0,400;0,700;1,400;1,700&family=Teko:wght@300..700&display=swap"
			rel="stylesheet"
		/>

		<!-- Font for the sign in texts -->
		<link
			href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@200..800&family=Manrope:wght@200..800&family=Sono:wght@200..800&display=swap"
			rel="stylesheet"
		/>
	</head>

	<body>
		<div class="banner">
			<div class="navbar">
				<div class="logo-title">
					<a href="index.php">
						<img
							src="assets/img/ULOGO.png"
							alt="Cascade Café logo"
							class="logo"
						/>
					</a>
					<a href="index.php"><h1 class="cascade">CASCADE</h1></a>
				</div>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="menu.php">Menu</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<div class="content-wrapper">
				<div class="contact-section">
					<div class="contact-text">
						<h2>CONTACT US NOW!</h2>
					</div>
					<div class="contact-form">
						<form action="#" method="post">
							<div class="form-group">
								<label for="first-name">First name*</label>
								<input
									type="text"
									id="first-name"
									name="first-name"
								/>
							</div>

							<div class="form-group">
								<label for="last-name">Last name</label>
								<input
									type="text"
									id="last-name"
									name="last-name"
								/>
							</div>

							<div class="form-group full-width">
								<label for="email">Email*</label>
								<input type="email" id="email" name="email" />
							</div>

							<div class="form-group full-width">
								<label for="message"
									>Leave a Message for us!</label
								>
								<textarea
									id="message"
									name="message"
								></textarea>
							</div>
							<div class="button-container">
								<button class="button-contact" type="submit">
									Submit
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="contact-section">
				<img
					src="assets/img/here.png"
					alt="Description of the image"
					class="contact-image"
				/>
			</div>

			<div class="background contact">
				<img src="assets/img/contact back.gif" alt="background image" />
			</div>
		</div>

		<!-- Footer Section -->
		<footer>
			<div class="footer-content">
				<div class="social-links">
					<a
						href="https://x.com/chanelkake/status/1800540130845036984/photo/4"
						><img
							src="assets/img/X_logo.jpg"
							alt="X (Twitter)"
							class="social-icon"
					/></a>
					<a
						href="https://www.facebook.com/photo/?fbid=450590428042120&set=pcb.450590611375435"
						><img
							src="assets/img/facebook.png"
							alt="Facebook"
							class="social-icon"
					/></a>
					<a href="https://youtu.be/Atr97iC4HFc?si=6Rl3J8Ntsx3NnKUb"
						><img
							src="assets/img/youtube logo.png"
							alt="YouTube"
							class="social-icon"
					/></a>
				</div>
				<p class="credit">
					&copy; 2024 Cascade Café. All rights reserved.
				</p>
			</div>
		</footer>
	</body>
</html>
