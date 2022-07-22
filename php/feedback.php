<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="description"
			content="Herzlich Willkommen auf unserer Website! Hier gibt es alles rund um die Smirnoff Kids aus Haßmersheim, beispielsweise Daten zu verschiedenen Konzerten oder Bilder."
		/>
		<meta
			name="keywords"
			content="Smirnoff Kids, Band, Haßmersheim, Mosbach, Metal, Rock, Musik"
		/>
		<meta name="author" content="Nico Zimmermann, Johannes Brandau, Marius Görg, Mirco Heck" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="../assets/fonts/stylesheet.css" />
		<link rel="stylesheet" type="text/css" href="../css/common.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="../css/mobile.css"
			media="(max-width: 1280px)"
		/>
		<link rel="icon" type="image/x-icon" href="../favicon.ico" />
		<title>Smirnoff Kids - Feedback</title>
	</head>

	<body>
		<main>
			<header>
				<a href="../index.php">
					<img
						src="../assets/images/sm_logo_red.svg"
						id="logo"
						alt="Smirnoff Kids Logo"
					/>
				</a>
			</header>
			<nav>
				<a href="../index.php" class="MenuLink">Home</a
				><span class="seperator">-</span>
				<a href="konzerte.php" class="MenuLink">Konzerte</a
				><span class="seperator">-</span>
				<a href="bilder.php" class="MenuLink">Bilder</a
				><span class="seperator">-</span>
				<a href="kontakt.php" class="MenuLink">Kontakt</a
				><span class="seperator">-</span>
				<a href="impressum.php" class="MenuLink">Impressum</a>
			</nav>

			<hr />

			<section>
				<article>
					<h2>Hinterlasse gerne Feedback für die Seite!</h2>

					<br /><br />

					<form method="post" action="thanks.php" target="_self">
						<label for="name">Bewertung:</label><br />
						<input type="range" name="name" id="name" min="0" max="10" />
						<input
							type="hidden"
							id="mailconfirm"
							name="mailconfirm"
							value="false"
						/>
						<br />
						<label for="nachricht">Nachricht:</label><br />
						<textarea
							style="resize: none"
							name="nachricht"
							id="nachricht"
							cols="45"
							rows="5"
							class="maxwidth"
						></textarea
						><br />
						<button type="submit">Senden</button>
					</form>
				</article>
			</section>

			<footer>
				<pre>
Instagram: <a href="https://www.instagram.com/smirnoffkids_official/">www.instagram.com/smirnoffkids_official</a>
Facebook: <a href="https://de-de.facebook.com/pages/category/Musician-Band/Smirnoff-Kids-211068725738369/">www.facebook.de/pages/category/Musician-Band/Smirnoff-Kids-211068725738369/</a>
Email: <a href="mailto:kontakt@smirnoff-kids.de">kontakt@smirnoff-kids.de</a>


<b>Website made by Nico, Johannes, Marius & Mirco</b>
				</pre>
			</footer>
		</main>
	</body>
</html>