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
                <a class="unfold">unfold</a>
            </div>
            <div class="hidden folder"></div>
        </div>
    </div>
</div>
<script src="unfold.js"></script>
</body>
</html>
