<?php

// MySQL Host and Credential Details
$sql_host = "127.0.0.1";
$sql_user = "TheChosenOne";
$sql_pswd = "SecurePassword";

// Database Details
$db_name = "webdev"; // Database to be used.
$table_name = "users"; // Table where site's user credentials are stored.

// Openning a connection to the database server.
$db_connection = mysqli_connect($sql_host, $sql_user, $sql_pdwd, $db_name);

// Checks if connection worked.
if (!$db_connection) { die("DB Connection Failed ") . mysqli_connect_error());}
$connection_status = "Connected"; // Writes "Connected" to variable status. TODO

?>
