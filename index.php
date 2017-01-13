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
<header class="w3-container w3-padding-xlarge">
    <div>
        <div id="textlogo">
            <a href="/kraut/" class="topbartext"><span id="logo"
                                                       class="w3-padding-small"><strong>kraut.space</strong></span>
                <span class="w3-hide-small">Die digitale Residenz des Hackspace Jena e.&thinsp;V.</span></a>
        </div>
        <div class="navlinks">
            <ul class="w3-hide-small">
                <li><a href="/kraut/termine">Termine</a></li>
                <li><a href="/kraut/verein">Verein</a></li>
                <li><a href="/kraut/raum">Raum</a></li>
                <li><a href="https://kraut.space" class="external">Wiki</a></li>
                <li><a href="https://kraut.space/blog:start" class="external">Blog</a></li>
            </ul>
        </div>
        <nav class="w3-dropdown-hover w3-right w3-hide-large w3-hide-medium">
            <button class="w3-btn">Menu</button>
            <div class="w3-dropdown-content w3-card-4">
                <a href="/kraut/termine">Termine</a>
                <a href="/kraut/verein">Verein</a>
                <a href="/kraut/raum">Raum</a>
                <a href="https://kraut.space" class="external">Wiki</a>
                <a href="https://kraut.space/blog:start" class="external">Blog</a>
            </div>
        </nav>
    </div>
    <div id="header">
        <div class="w3-container">
            <img src="/kraut/img/krautspace-invers.svg" class="w3-image">
            <div class="w3-margin-top w3-margin-bottom divline"></div>
            <p id="slogan">Ein Raum in Jena für die analogen Kreaturen des Cyberspace</p>
            <a href="#moreinfo" class="w3-btn w3-indigo w3-side" id="enter">Enter &#8628;</a>
        </div>
    </div>
</header>
<?php getKrautButton($status); ?>
<div class="w3-row w3-padding-large" id="moreinfo">
    <div class="w3-container w3-padding-large">
        <h2>Was ist der Krautspace?</h2>
        <p>Der Hackspace Jena e.&thinsp;V. ist ein gemeinnützer Verein zur kulturellen und technischen Austausch.</p>
        <p>Mehr Informationen über unsere Aktivitäten findet ihr in unserem Wiki oder unserem Blog.</p>
        <a href="https://wiki.kraut.space/start" class="w3-btn w3-indigo w3-wide">Wiki</a>
        <a href="https://blog.kraut.space/start" class="w3-btn w3-indigo w3-wide">Blog</a>
    </div>
</div>
<div class="w3-row w3-border-bottom w3-padding-large" id="body">
    <div class="w3-col l8 m7" id="content">
        <div class="w3-container w3-padding-xlarge">
            <h2>Nächste Termine</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <div class="w3-col l4 m5" id="sidebar">
        <div class="w3-container w3-padding-large">
            <div class="w3-border-bottom w3-padding-medium" id="krautstatus">
                <?php getKrautSidebar($status); ?>
            </div>
            <div class="w3-border-bottom w3-padding-medium" id="xmpp">
                <div class="sidebar-heading">
                    <div class="icondiv w3-circle"><img src="/kraut/img/icons/lightbulb-o.svg" class="icon"></div>
                    <h4>XMPP</h4>
                </div>
                MUC <a href="xmpp:krautchan@chat.krautspace.de">krautchan@chat.krautspace.de</a><br>
                Webchat <a href="https://kraut.space/chat">kraut.space/chat</a>
            </div>
            <div class="w3-border-bottom w3-padding-medium" id="github">
                <div class="sidebar-heading">
                    <div class="icondiv w3-circle"><img src="/kraut/img/icons/github-invers.svg" class="icon"></div>
                    <h4>Github</h4>
                </div>
                <a href="https://github.com/HackspaceJena">github.com/HackspaceJena</a>
            </div>
            <div class="w3-border-bottom w3-padding-medium" id="twitter">
                <div class="sidebar-heading">
                    <div class="icondiv w3-circle"><img src="/kraut/img/icons/twitter.svg" class="icon"></div>
                    <h4>Twitter</h4>
                </div>
                <a href="https://twitter.com/krautspace">twitter.com/krautspace</a>
            </div>
            <div class="w3-border-bottom w3-padding-medium" id="email">
                <div class="sidebar-heading">
                    <div class="icondiv w3-circle"><img src="/kraut/img/icons/envelope.svg" class="icon"></div>
                    <h4>Email</h4>
                </div>
                <a href="email:office@krautspace.de">office@krautspace.de</a>
            </div>
            <div class="w3-padding-medium" id="address">
                <div class="sidebar-heading">
                    <div class="icondiv w3-circle"><img src="/kraut/img/icons/home.svg" class="icon"></div>
                    <h4>Physical</h4>
                </div>
                <span>Hackspace Jena e.&thinsp;V.</br>
                    Krautgasse 26</br>
                    07743 Jena<br/>
									</span>
            </div>
        </div>
    </div>
</div>
<footer class="w3-container w3-center w3-padding-small">
    <p>kraut.space ©2016 Hackspace Jena e.&thinsp;V. · <a href="/kraut/kolophon">Kolophon</a></p>
</footer>
</body>
</html>