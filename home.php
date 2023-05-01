<?php

session_start();
if (!isset($_SESSION["dashboard"])) {
    header('Location: index.html');
    exit();
}

try {
    $mysqli = new mysqli(
        "localhost",
        "root",
        "",
        "verhuizers_stories");
} catch (Exception $exception) {
    error_given("8008");
}

function error_given($errorCode): void
{
    echo "Please contact administration...";
    echo "<br>Error-code: ".$errorCode;
    die();
}

$database_data = get_sql_data();

function get_sql_data(): array
{
    global $mysqli;
    // Check if the email_send table exists.
    if ($mysqli->query("SHOW TABLES LIKE 'email_send'")->num_rows == 0) {
        error_given("1+");
    }
    // Get all data from database and return the dictionary;
    $result = $mysqli->query("SELECT * FROM `email_send`");
    $data = [];
    // Fetch all data from MYSQL request and append to returning data.
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="description of the website.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow"/>
    <meta name="author" content="Bruno B">

    <title>Zakelijkverhuizen aanvragen</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <div class="inside">
        <h1>Zakelijkverhuizen Aanvragen</h1>
        <a class="button" href="logout.php">logout</a>
    </div>
</div>
<div class="content">
    <div class="email_table">
        <?php
        // Loop through all MYSQL data.
        foreach ($database_data as $row) {
            // Assign all data of rows to easy to use variables.
            $company_name = $row["contact_company"];
            $sender_email = $row["email"];
            $time = $row["send_time"];
            $name = $row["person_name"];
            $phone_number = $row["phone_number"];
            $user_company = $row["company_name"];
            $contact_way = $row["contact_way"];
            $message = $row["message"];
            echo
            '<div class="email">
                <div class="topper">
                    <p class="company_name">'.$company_name.'</p>
                    <p class="sender_email">'.$sender_email.'</p>
                    <p class="time">'.$time.'</p>
                    <p class="indicator">❯</p>
                </div>
                <div class="folder">
                    <div class="contact">
                        <h2>Informatie:</h2>
                        <div class="flex info">
                            <div class="personal">
                                <h3>Naam:</h3>
                                <p>'.$name.'</p>
                                <h3>Telefoonnummer:</h3>
                                <p>'.$phone_number.'</p>
                            </div>
                            <div>
                                <h3>Bedrijfsnaam:</h3>
                                <p>'.$user_company.'</p>
                                <h3>Type contact:</h3>
                                <p>'.$contact_way.'</p>
                            </div>
                        </div>
                    </div>
                    <div class="message">
                        <h2>Bericht:</h2>
                        <p>'.$message.'</p>
                    </div>
                </div>
            </div>';
            }
        ?>
    </div>
</div>
<script src="unfold.js"></script>
</body>
</html>