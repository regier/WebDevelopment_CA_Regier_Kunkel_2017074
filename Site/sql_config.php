<?php

// MySQL Host and Credential Details
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'TheChosenOne');
define('DB_PASSWORD', 'SecurePassword');

// Database Details
define('DB_NAME', 'users'); // Database to be used.
define('TABLE_NAME', 'users'); // Table where sites use'r credentials are stored.

// Openning a connection to the database server.
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Checks if connection worked.
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
