<!DOCTYPE html>

<html>

<!-- Starting the website code here.
head include some nice information on the website, this info is gonna be
used by the web browser and search engines. -->
<head>

<meta charset="UTF-8">
<!-- Makes the website scale nicely according to display size -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content=<?php echo $author?>>
<title><?php echo $page_title?></title>

</head>

<!-- Starting web page navigation menu and main content -->
<body>

<!-- Title and menu will live there -->
<header>

<?php
// PHP code to dynamically display the page title as a nice big header at
// the very top of the site.

echo "<h1>" . $page_title . "</h1>"

?>

<!-- Site's navigation menu -->
<nav>

<a id="menu_item_1" class="navigation_menu" href="index.php">Home</a>
<a id="menu_item_2" class="navigation_menu" href="exclusive.php">Exclusive</a>
<a id="menu_item_3" class="navigation_menu" href="login.php">Login</a>
<a id="menu_item_4" class="navigation_menu" href="logout.php">Logout</a>

</nav>

</header>
<!-- Site's meta information and navigation menu ends here -->
