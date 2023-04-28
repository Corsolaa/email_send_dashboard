<?php
session_start();
if ($_POST['password'] == "passs") {
    // Logged in, creates Session, so you know user is logged in.
    session_regenerate_id();
    $_SESSION['dashboard'] = TRUE;
    header('Location: home.php');
} else {
    header('Location: index.html');
}