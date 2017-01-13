<!DOCTYPE HTML>
<html>
<?php include_once 'getContent.php'; ?>
<head>
    <title>kraut.space</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css">
    <meta name="description" content="Open space for open minds">
    <meta name="keywords" content="tech, hackerspace, hack">
    <meta property="og:title" content="kraut.space"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://vincent-liu.me/kraut/"/>
    <meta property="og:description" content="Open space for open minds"/>
    <meta property="og:image" content="https://status.krautspace.de/images/krautspace_pixelicon_open.png"/>
    <meta property="og:locale" content="en_US"/>
</head>
<body>
<div class="w3-container w3-padding-large">
    <a href="/kraut"><img src="/kraut/img/krautspace.svg" id="subpagelogo"></a>
    <div id="subnavlinks" class="navlinks w3-hide-small">
        <ul>
            <li><a href="/kraut/verein">Verein</a></li>
            <li><a href="/kraut/raum">Raum</a></li>
            <li><a href="/kraut/termine">Termine</a></li>
            <li><a href="https://kraut.space" class="external">Wiki</a></li>
            <li><a href="https://kraut.space/blog:start" class="external">Blog</a></li>
        </ul>
    </div>
    <nav class="w3-dropdown-hover w3-right w3-hide-large w3-hide-medium">
        <button class="w3-btn">Menu</button>
        <div class="w3-dropdown-content w3-card-4">
            <a href="/kraut/verein">Verein</a>
            <a href="/kraut/raum">Raum</a>
            <a href="/kraut/termine">Termine</a>
            <a href="https://kraut.space" class="external">Wiki</a>
            <a href="https://kraut.space/blog:start" class="external">Blog</a>
        </div>
    </nav>
</div>
<div id="roombutton" class='w3-white'><?php getKrautButtonColor($status); ?><p><?php getKrautStatus($status); ?></p>
</div>
<div class="w3-row w3-border-bottom w3-padding-large" id="body">
    <div class="w3-container w3-padding-xlarge" id="content">
        <div class="w3-responsive">
        <?php
        require_once 'getCalendar.php';
        printEvents('class="w3-table w3-bordered"');
        ?>
        </div>
    </div>
</div>
<footer class="w3-container w3-center w3-padding-small">
    <p>kraut.space ©2016 Hackspace Jena e. V. · <a href="/kraut/kolophon">Kolophon</a></p>
</footer>
</body>
</html>
