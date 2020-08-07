<?php

// Defining some elements of the page using variables, for flexibility sake.
$page_title = "The Cube"; // Shown big'n'bold at the very top. Used by header.php
$author = '"Regier Kunkel"';
$rights = "Copyleft - No Rights Reserved."; // Copyright notice, bottom. footer.php

include 'sql_config.php'; // Database connection settings.
require 'header.php'; // Web site header and navigation menu.

echo "Start. At least it's something.";

require 'footer.php'; // Web site footer.
