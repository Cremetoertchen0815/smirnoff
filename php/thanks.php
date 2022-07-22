<?php
if (isset($_Post['mailconfirm'])) {
    $subject = 'Smirnoffkids dankt für ihre Nachricht!';
    $message = 'Vielen Dank das Sie Smirnoff Kids kontaktiert haben. Ihre Nachricht ist bei uns eingegangen und wird in Kürze bearbeitet. Mit rockigen Grüßen, die Smirnoff Kids';
    mail($_POST['mail'], $subject, $message);
}
$subject = 'Nachricht von ' . $_POST['name'] . ' zum Thema ' . $_POST['topic'] . ' auf der Homepage(' . $_POST['mail'] . ')';
$message = $_POST['nachricht'];

mail('kontakt@smirnoff-kids.de', $subject, $message);
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Herzlich Willkommen auf unserer Website! Hier gibt es alles rund um die Smirnoff Kids aus Haßmersheim, beispielsweise Daten zu verschiedenen Konzerten oder Bilder.">
    <meta name="keywords" content="Smirnoff Kids, Band, Haßmersheim, Mosbach, Metal, Rock, Musik">
    <meta name="author" content="Nico Zimmermann, Johannes Brandau, Marius Görg, Mirco Heck">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../assets/fonts/stylesheet.css" />
		<link rel="stylesheet" type="text/css" href="../css/common.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="../css/mobile.css"
			media="(max-width: 1280px)"
		/>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <title>Smirnoff Kids - Home</title>
</head>

<body>


        <main>

        <header>
            <a href="../index.php">
                <img src="../assets/images/sm_logo_red.svg" id="logo">
            </a>
        </header>
        <nav>
            <a href="index.php" class="MenuLink">Home</a>-
            <a href="konzerte.php" class="MenuLink">Konzerte</a>-
            <a href="bilder.php" class="MenuLink">Bilder</a>-
            <a href="kontakt.php" class="MenuLink" active>Kontakt</a>-
            <a href="impressum.php" class="MenuLink">Impressum</a>
        </nav>

        <hr>

            <article>
                <h2>Danke für deine Nachricht!</h2>
                <a href="../index.php" class="MenuLink">Zurück zur Startseite</a>
            </article>

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