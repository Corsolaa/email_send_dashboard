<?php
session_start();
if (!isset($_SESSION["loggedin"])) {
    header('Location: index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="description of the website.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="author" content="John Spice">
    <title>Email Viewer</title>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icon.ico">
</head>
<body>
<div class="header">
    <div class="inside">
        <h1>Email Viewer</h1>
        <a class="button" href="logout.php">logout</a>
    </div>
</div>
<div class="content">
    <div class="email_table">
        <div class="email">
            <div class="topper">
                <p>bedrijfsnaam</p>
                <p>sender_mail</p>
                <p>time</p>
                <p class="indicator">❯</p>
            </div>
            <div class="folder">
                <div class="contact">
                    <h2>Informatie:</h2>
                    <div class="flex">
                        <div>
                            <h3>Naam:</h3>
                            <p>John Spice</p>
                            <h3>Telefoonnummer:</h3>
                            <p>06 68654933</p>
                        </div>
                        <div>
                            <h3>Type contact:</h3>
                            <p>email_of_telefonisch</p>
                        </div>
                    </div>
                </div>
                <div class="message">
                    <h2>Bericht:</h2>
                    <p>
                    </p>
                </div>
            </div>
        </div>
        <div class="email">
            <div class="topper">
                <p>bedrijfsnaam</p>
                <p>sender_mail</p>
                <p>time</p>
                <p class="indicator">❯</p>
            </div>
            <div class="folder">
                <div class="contact">
                    <h2>Informatie:</h2>
                    <div class="flex">
                        <div>
                            <h3>Naam:</h3>
                            <p>John Spice</p>
                            <h3>Telefoonnummer:</h3>
                            <p>06 68654933</p>
                        </div>
                        <div>
                            <h3>Type contact:</h3>
                            <p>email_of_telefonisch</p>
                        </div>
                    </div>
                </div>
                <div class="message">
                    <h2>Bericht:</h2>
                    <p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="unfold.js"></script>
</body>
</html>
