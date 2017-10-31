<!DOCTYPE HTML>
<html>
<?php include_once 'getContent.php'; ?>
<head>
    <title>kraut.space - Kolophon</title>
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
    <div id="content">
        <div class="w3-container w3-padding-xlarge">
            <ul>
                <li>Das Schriftlogo basiert auf der kostenlosen Schrift</li>
                <li>
                    <a href="http://www.dafont.com/de/vikas-kumar.d3807">squared display</a> von
                    <a href="https://www.behance.net/vikaskumar">Vikas Kumar</a>
                    - Die verwendendeten Icons wurden aus dem <a href="https://github.com/encharm/Font-Awesome-SVG-PNG">FontAwesome-Github-Repo</a>
                    (MIT-Lizenz) genommen und farblich angepasst.
                </li>
            </ul>
        </div>
    </div>
</div>
<footer class="w3-container w3-center w3-padding-small">
    <p>kraut.space ©2016 Hackspace Jena e.&thinsp;V.
</footer>
</body>
</html>
