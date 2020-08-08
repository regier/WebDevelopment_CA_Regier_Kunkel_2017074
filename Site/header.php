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
    *{background-color:black;color:white;}
    h1{font-size:5em;padding:0px;margin:0px;margin-top:0.1em;}
    .navigation_menu{margin-left:14px;color:red;background-color:darkred;text-align:center;min-width:128px;min-height:48px;line-height:48px;margin-bottom:2%;border-radius:20px;border:solid;display:inline-grid;text-decoration:none;}
    header,footer{color: white;border-style:solid;border-color:red;border-radius:20px;text-align:center;padding-bottom:10px;}header{padding-top:0px;margin-top:1em;}
    body{color: white;font-family: comfortaa;font-size:1.5em;max-width:60%;min-width:256px;margin:auto;vertical-align:middle;}
    img{background-color:white}
    article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block;}
    input,textarea {margin:0;font:inherit;color: inherit;}


</style>
</head>

<!-- Starting web page navigation menu and main content -->
<body>

<!-- Title and menu will live there -->
<header>

<h1>The Cube</h1>

<!-- Site's navigation menu -->
<nav>

<a id="menu_item_1" class="navigation_menu" href="index.php">Home</a>
<a id="menu_item_2" class="navigation_menu" href="please_login.php">Exclusive</a>
<a id="menu_item_3" class="navigation_menu" href="login.php">Login</a>
<a id="menu_item_4" class="navigation_menu" href="logout.php">Logout</a>

</nav>

</header>
<!-- Site's meta information and navigation menu ends here -->
