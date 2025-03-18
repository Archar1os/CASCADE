<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- H1 FONT for presentation -->
		<link
			href="https://fonts.googleapis.com/css2?family=Changa:wght@200..800&family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
			rel="stylesheet"
		/>

		<!-- H4 FONT -->
		<link
			href="https://fonts.googleapis.com/css2?family=Changa:wght@363&family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
			rel="stylesheet"
		/>

		<!-- IMAGE FONT -->
		<link
			href="https://fonts.googleapis.com/css2?family=Changa:wght@363&family=Holtwood+One+SC&family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
			rel="stylesheet"
		/>

		<!-- IMAGE FONT 2ND -->
		<link
			href="https://fonts.googleapis.com/css2?family=Changa:wght@363&family=Holtwood+One+SC&family=IM+Fell+DW+Pica:ital@0;1&family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
			rel="stylesheet"
		/>

		<link rel="stylesheet" href="assets/css/styles.css" />
		<link rel="icon" href="ULOGO.png" type="image/x-icon" />
		<title>Cascade - Home</title>
	</head>

	<body>
		<!-- Banner and Navbar -->
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

			<!-- MIDDLE/MAIN CONTENT -->
			<div class="content">
				<h1>WELCOME TO CASCADE CAFÉ</h1>
				<h4>
					Welcome to CASCADE, your ultimate spot for exceptional
					coffee, tasty meals, and delightful snacks. Whether you need
					a strong coffee <br />
					to start your day, hearty snacks to power through the
					afternoon, or a sweet treat to relax with, we've got you
					covered. <br />
					Enjoy your favorites with just a few clicks. At CASCADE,
					every sip and bite is crafted to bring joy and comfort to
					your day!
				</h4>

				<!-- THREE BUTTONS FOR NAVIGATION WITH STYLE -->
				<div class="button-container">
					<a href="about.php"
						><button class="button-index" type="button">
							<span></span>ABOUT
						</button></a
					>
					<a href="menu.php"
						><button class="button-index" type="button">
							<span></span>MENU
						</button></a
					>
					<a href="contact.php"
						><button class="button-index" type="button">
							<span></span>CONTACT US
						</button></a
					>
				</div>

				<!-- "SCROLL DOWN FOR MORE" WITH JS -->
				<div class="scroll-prompt">
					<p>Scroll down for more</p>
					<div class="arrow">&#8595;</div>
					<!-- Down arrow -->
				</div>
			</div>

			<!-- BACKGROUND IMAGE -->
			<div class="background"></div>
		</div>

		<!-- MAIN TEXT -->
		<section class="second-section">
			<div class="second-content">
				<h2>Discover More</h2>
				<p>
					Experience the cozy ambiance of Cascade Café with a touch of
					elegance and comfort.
				</p>
				<div class="image-container">
					<!-- BOTTOM PART 3 IAMAGES -->

					<!-- FIRST IMAGE -->
					<div class="image-wrapper">
						<a href="menu.php">
							<img
								src="assets/img/home 1st.gif"
								alt="Order now"
							/>
							<div class="image-caption">ORDER NOW</div>
							<div class="image-hover">
								<div class="hover-text-top">Discover Menu</div>
								<div class="hover-text-bottom">
									Treat yourself to a delightful array of
									snacks designed to perfectly complement your
									favorite drink. Join us for a relaxing
									moment and savor the warmth and flavor in
									every bite!
								</div>
							</div>
						</a>
					</div>

					<!-- SECOND IMAGE -->
					<div class="image-wrapper">
						<a href="about.php">
							<img
								src="assets/img/home 2nds.gif"
								alt="ABOUT CASCADE"
							/>
							<div class="image-caption">ABOUT CASCADE</div>
							<div class="image-hover">
								<div class="hover-text-top">OUR HISTORY</div>
								<div class="hover-text-bottom">
									Our café's journey began in September 2024
									in Angeles City, near Holy Angel University.
									We invite you to discover our evolution from
									humble beginnings to a beloved gathering
									place for students and locals. Join us as we
									craft unforgettable moments over coffee and
									delightful snacks!
								</div>
							</div>
						</a>
					</div>

					<!-- THIRD IMAGE -->
					<div class="image-wrapper">
						<a href="contact.php">
							<img
								src="assets/img/home 3rd.gif"
								alt="Contact us"
							/>
							<div class="image-caption">CUSTOM DESIGNS</div>
							<div class="image-hover">
								<div class="hover-text-top">CONTACT US</div>
								<div class="hover-text-bottom">
									For more custom designs tailored to your
									vision, don't hesitate to reach out! We're
									here to help you create the perfect look for
									your café experience. Contact us today, and
									let's bring your ideas to life!
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>

		<!-- MOBILE VIEWPORTTTTT -->

		<!-- MOBILE VIEWPORT -->
		<div class="hamburger" id="hamburger">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>

		<div class="overlay" id="overlay">
			<div class="overlay-content">
				<div class="overlay-header">
					<a href="index.php" class="logo-title">
						<img src="ULOGO.png" alt="Logo" class="logo" />
						<h1 class="title">Cascade</h1>
					</a>
				</div>
				<div class="nav-buttons">
					<a href="index.php" class="nav-button">Home</a>
					<a href="menu.php" class="nav-button">Menu</a>
					<a href="about.php" class="nav-button">About</a>
					<a href="contact.php" class="nav-button">Contact</a>
				</div>
			</div>
		</div>

		<!-- FOOTER-->
		<footer class="footer">
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

		<script src="assets/javascript/homejava.js"></script>
	</body>
</html>
