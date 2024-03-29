<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Herzlich Willkommen auf unserer Website! Hier gibt es alles rund um die Smirnoff Kids aus Haßmersheim, beispielsweise Daten zu verschiedenen Konzerten oder Bilder.">
    <meta name="keywords" content="Smirnoff Kids, Band, Haßmersheim, Mosbach, Metal, Rock, Musik">
    <meta name="author" content="Mirco Heck, Levin Beier">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/main.css" media="(min-width: 1280px)" />
    <link rel="stylesheet" type="text/css" href="/css/mobile.css" media="(max-width: 1280px)" />
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Smirnoff Kids - Home</title>
</head>

<body>

    <div id="main_container">
        <header>
            <a href="index.php">
                <img src="/assets/images/sm_logo_red.svg" id="logo">
            </a>
        </header>
        <nav>
            <a href="index.php" class="MenuLink">Home</a>-
            <a href="konzerte.php" class="MenuLink">Konzerte</a>-
            <a href="bilder.php" class="MenuLink">Bilder</a>-
            <a href="kontakt.php" class="MenuLink" style="text-decoration: underline;">Kontakt</a>-
            <a href="impressum.php" class="MenuLink">Impressum</a>
        </nav>

        <div id="seperator"></div>

        <main>
            <h2>
                Ihr wollt uns buchen, Feedback zu unseren Konzerten dalassen oder einfach Grüße ausrichten?
            </h2>
            <p>
                Dann benutzt einfach unser neumodisches, futuristisches Kontaktformular, welches eure Nachricht mit einem Klick direkt zu uns überträgt!
            </p>

            <br><br>

            <form method="post" action="/thanks.php" target="_self">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" size="45" class="maxwidth"><br>
                <label for="mail">E-Mail Addresse:</label><br>
                <input type="text" id="mail" name="mail" size="45" class="maxwidth"><br><br>
                <textarea name="nachricht" cols="45" rows="5" class="maxwidth"></textarea><br>
                <input type="submit" value="Senden">
            </form>
        </main>
        <footer>
            Instagram: <a href="https://www.instagram.com/smirnoffkids_official/">www.instagram.com/smirnoffkids_official</a><br>
            Facebook: <a href="https://de-de.facebook.com/pages/category/Musician-Band/Smirnoff-Kids-211068725738369/">www.facebook.de/pages/category/Musician-Band/Smirnoff-Kids-211068725738369/</a><br>
            Email: <a href="mailto:kontakt@smirnoff-kids.de">kontakt@smirnoff-kids.de</a>
            <br><br>
            Website made by Mirco & Levin
        </footer>
    </div>

</body>

</html>