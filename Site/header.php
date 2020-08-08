<!DOCTYPE html>

<html>

<!-- Starting the website code here.
head include some nice information on the website, this info is gonna be
used by the web browser and search engines. -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="en-GB" />
<meta name="description" content="The Cube - A Cube movie fan page. By Regier Kunkel - 2017074" />
<meta title="The Cube">
<meta name="keywords" content="the cube, cube, cube fan page, fan page, Regier Kunkel," />

<!-- Makes the website scale nicely according to display size -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content=<?php echo $author?>>
<title><?php echo $page_title?></title>
<!-- Start Icons/Favicons -->
<link rel="apple-touch-icon" href="Assets/favicon_192.png">
<link rel="icon" type="image/png" href="Assets/favicon_512.png">
<!-- Finish Icons/Favicons -->

<style type="text/css">
    *{background-color:black;}
    h1{color:white;font-size:5em;}#title{margin-top:0.2em;margin-bottom:0.05em;}
    .navigation_menu{margin-left:14px;color:red;background-color:darkred;text-align:center;min-width:128px;min-height:48px;line-height:48px;margin-bottom:2%;border-radius:20px;border:solid;display:inline-grid;text-decoration:none;}
    header,footer{color: white;border-style:solid;border-color:red;border-radius:20px;text-align:center;padding-bottom:10px;}header{padding-top:0px;margin-top:2em;}
    body{color: white;font-family: comfortaa;max-width:60%;min-width:256px;margin:auto;vertical-align:middle;}
</style>
</head>

<!-- Starting web page navigation menu and main content -->
<body>

<!-- Title and menu will live there -->
<header>

<?php
// PHP code to dynamically display the page title as a nice big header at
// the very top of the site.
// Page title
echo '<h1 id="title">' . $page_title . '</h1>'
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
