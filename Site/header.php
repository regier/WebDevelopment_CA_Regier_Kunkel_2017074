<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content=<?php echo $author?>>
<title><?php echo $page_title?></title>

</head>

<body>

<header>

<?php

echo "<h1>" . $page_title . "</h1>"

?>

<nav>

<a id="menu_item_1" class="navigation_menu" href="index.php">Home</a>
<a id="menu_item_2" class="navigation_menu" href="exclusive.php">Exclusive</a>
<a id="menu_item_3" class="navigation_menu" href="login.php">Login</a>
<a id="menu_item_4" class="navigation_menu" href="logout.php">Logout</a>

</nav>

</header>

