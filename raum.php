<!DOCTYPE HTML>
<html>
<?php include_once 'getContent.php'; ?>
<head>
    <title>kraut.space - Raum</title>
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
    <div class="w3-col l8 m7" id="content">
        <div class="w3-container w3-padding-xlarge">
            <h2>Krautspace</h2>
            <a href="http://www.openstreetmap.org/node/1875593753" target="_blank"><img src="/img/lageplan.svg" id="map"></a>
        </div>
    </div>
    <aside class="w3-col l4 m5">
        <div class="w3-container w3-padding-large">
            <div class="w3-border-bottom w3-padding-medium" id="address">
                <div class="sidebar-heading">
                    <div class="icondiv w3-circle"><img src="/img/icons/home.svg" class="icon"></div>
                    <h4>Adresse</h4>
                </div>
                <span>Hackspace Jena e.&thinsp;V.</br>
                    Krautgasse 26</br>
                    07743 Jena<br/>
									</span>
            </div>
            <div class="w3-padding-medium" id="bus">
                <div class="sidebar-heading">
                    <div class="icondiv w3-circle" id="mapicon">H</div>
                    <h4>Haltestellen</h4>
                </div>
                <p>Linie 5 - Ernst-Abbe-Platz</p>
                <p>Linie 16 - Johannisplatz</p>
            </div>
        </div>
    </aside>
</div>
<footer class="w3-container w3-center w3-padding-small">
    <p>kraut.space ©2016 Hackspace Jena e.&thinsp;V. · <a href="/kolophon">Kolophon</a></p>
</footer>
</body>
</html>
