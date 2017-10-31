<!DOCTYPE HTML>
<html>
<?php include_once 'getContent.php'; ?>
<head>
    <title>kraut.space - Termine</title>
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="subpage.css">
    <?php include_once 'meta.php'; ?>
</head>
<body>
<div class="w3-container w3-padding-large">
    <a href="/kraut"><img src="/img/krautspace.svg" id="subpagelogo"></a>
    <div id="subnavlinks" class="navlinks w3-hide-small">
        <ul>
            <li><a href="/verein">Verein</a></li>
            <li><a href="/raum">Raum</a></li>
            <li><a href="/termine">Termine</a></li>
            <li><a href="https://kraut.space" class="external">Wiki</a></li>
            <li><a href="https://kraut.space/blog:start" class="external">Blog</a></li>
        </ul>
    </div>
    <nav class="w3-dropdown-hover w3-right w3-hide-large w3-hide-medium">
        <button class="w3-btn">Menu</button>
        <div class="w3-dropdown-content w3-card-4">
            <a href="/verein">Verein</a>
            <a href="/raum">Raum</a>
            <a href="/termine">Termine</a>
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
        printEventTable('class="w3-table w3-bordered"');
        ?>
        </div>
    </div>
</div>
<footer class="w3-container w3-center w3-padding-small">
    <p>kraut.space ©2016 Hackspace Jena e. V. · <a href="/kolophon">Kolophon</a></p>
</footer>
</body>
</html>
