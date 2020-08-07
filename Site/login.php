<?php

include 'sql_config.php'; // Database connection settings.
// Not sure yet if I need this include here as well since I have it on index.php

// TODO Setup an actual web server.

session_start();

if (isset($_POST['login'])) {
    $sql_user = $_POST['sql_user'];
    $sql_pswd = $_POST['sql_pswd'];


?>
