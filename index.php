<!DOCTYPE HTML>
<html lang="de-DE">
<?php include_once 'getContent.php'; ?>
<head>
    <title>kraut.space</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="styles.css">
    <meta name="description" content="Open space for open minds">
    <meta name="keywords" content="tech, hackerspace, hack">
    <meta property="og:title" content="kraut.space"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://vincent-liu.me/kraut/"/>
    <meta property="og:description" content="Open space for open minds"/>
    <meta property="og:image" content="https://status.krautspace.de/images/krautspace_pixelicon_open.png"/>
    <meta property="og:locale" content="de_DE"/>
</head>
<body>
<header>
    <div id="navbar">
        <div id="branding">
            <a href="/kraut/" class="topbartext"><span id="textlogo"><strong>kraut.space</strong></span>
                <span id="tagline">Die digitale Residenz des Hackspace Jena e.&thinsp;V.</span></a>
        </div>
        <nav>
            <ul>
                <li><a href="/kraut/termine">Termine</a></li>
                <li><a href="/kraut/verein">Verein</a></li>
                <li><a href="/kraut/raum">Raum</a></li>
                <li><a href="https://kraut.space" class="external">Wiki</a></li>
                <li><a href="https://kraut.space/blog:start" class="external">Blog</a></li>
            </ul>
        </nav>
    </div>
    <div id="headcontent">
        <div id="title">
            <img src="/kraut/img/krautspace-invers.svg"alt="kraut.space logo" id="logo">
            <div id="line"></div>
            <p id="slogan">Ein Raum in Jena für die analogen Kreaturen des Cyberspace</p>
            <a href="#moreinfo" class="button" id="enter">Enter &#8628;</a>
        </div>
    </div>
</header>
<?php getKrautButton($status); ?>
<div id="moreinfo">
    <h2>Was ist der Krautspace?</h2>
    <p>Der Hackspace Jena e.&thinsp;V. ist ein gemeinnützer Verein zur kulturellen und technischen Austausch.</p>
    <p>Mehr Informationen über unsere Aktivitäten findet ihr in unserem Wiki oder unserem Blog.</p>
    <a href="https://wiki.kraut.space/start" class="button text-wide">Wiki</a>
    <a href="https://blog.kraut.space/start" class="button text-wide">Blog</a>
</div>
<div id="body">
    <div id="content">
        <h2>Nächste Termine</h2>
        <div id="events">
            <?php
            require_once 'getCalendar.php';
            printEvents();
            ?>
        </div>
    </div>
    <div id="sidebar">
        <div class="sidebar-item" id="krautstatus">
            <?php getKrautSidebar($status); ?>
        </div>
        <div class="sidebar-item" id="xmpp">
            <div class="sidebar-heading">
                <div class="icondiv"><img src="/kraut/img/icons/lightbulb-o.svg" class="icon"></div>
                <h4>XMPP</h4>
            </div>
            MUC <a href="xmpp:krautchan@chat.krautspace.de">krautchan@chat.krautspace.de</a><br>
            Webchat <a href="https://kraut.space/chat">kraut.space/chat</a>
        </div>
        <div class="sidebar-item" id="github">
            <div class="sidebar-heading">
                <div class="icondiv"><img src="/kraut/img/icons/github-invers.svg" class="icon"></div>
                <h4>Github</h4>
            </div>
            <a href="https://github.com/HackspaceJena">github.com/HackspaceJena</a>
        </div>
        <div class="sidebar-item" id="twitter">
            <div class="sidebar-heading">
                <div class="icondiv"><img src="/kraut/img/icons/twitter.svg" class="icon"></div>
                <h4>Twitter</h4>
            </div>
            <a href="https://twitter.com/krautspace">twitter.com/krautspace</a>
        </div>
        <div class="sidebar-item" id="email">
            <div class="sidebar-heading">
                <div class="icondiv"><img src="/kraut/img/icons/envelope.svg" class="icon"></div>
                <h4>Email</h4>
            </div>
            <a href="email:office@krautspace.de">office@krautspace.de</a>
        </div>
        <div class="sidebar-item last-item" id="address">
            <div class="sidebar-heading">
                <div class="icondiv"><img src="/kraut/img/icons/home.svg" class="icon"></div>
                <h4>Physical</h4>
            </div>
            <span>Hackspace Jena e.&thinsp;V.</br>
                Krautgasse 26</br>
                07743 Jena<br/>
									</span>
        </div>
    </div>
</div>
<footer>
    <p>kraut.space ©2016 Hackspace Jena e.&thinsp;V. · <a href="/kraut/kolophon">Kolophon</a></p>
</footer>
</body>
</html>