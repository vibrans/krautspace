<!DOCTYPE HTML>
<html lang="de">
<?php include_once 'getContent.php'; ?>
<head>
    <title>kraut.space</title>
    <link rel="stylesheet" href="styles.css" />
    <?php include_once 'meta.php'; ?>
</head>
<body>
<header>
    <div id="navbar">
        <div id="branding">
            <a href="/" class="topbartext"><span id="textlogo"><strong>kraut.space</strong></span>
                <span id="tagline">Die digitale Residenz des Hackspace Jena e.&thinsp;V.</span></a>
        </div>
        <nav>
            <ul>
                <li><a href="/termine">Termine</a></li>
                <li><a href="/verein">Verein</a></li>
                <li><a href="/raum">Raum</a></li>
                <li><a href="https://kraut.space" class="external">Wiki</a></li>
                <li><a href="https://kraut.space/blog:start" class="external">Blog</a></li>
            </ul>
        </nav>
    </div>
    <div id="headcontent">
        <div id="title">
            <img src="/img/krautspace-invers.svg" alt="kraut.space logo" id="logo" />
            <div id="line"></div>
            <p id="slogan">Ein Raum in Jena für die analogen Kreaturen des Cyberspace</p>
        </div>
    </div>
</header>
<?php getKrautButton($status); ?>
<section id="moreinfo">
    <h2>Was ist der Krautspace?</h2>
    <p>Der Hackspace Jena e.&thinsp;V. ist ein gemeinnützer Verein zur kulturellen und technischen Austausch.</p>
    <p>Mehr Informationen über unsere Aktivitäten findet ihr in unserem Wiki oder unserem Blog.</p>
    <a href="https://wiki.kraut.space/start" class="button text-wide">Wiki</a>
    <a href="https://blog.kraut.space/start" class="button text-wide">Blog</a>
</section>
<section id="body">
    <main id="content">
        <h2>Nächste Termine</h2>
        <div id="events">
            <?php
            require_once 'getCalendar.php';
            try {
                printEvents();
            } catch (Error $e) {
                echo "<p>Es gibt leider jetzt ein Fehler beim parsen der .ics Datei</p>";
            }
            ?>
        </div>
    </main>
    <aside>
        <div class="sidebar-item" id="krautstatus">
            <?php getKrautSidebar($status); ?>
        </div>
        <div class="sidebar-item" id="xmpp">
            <div class="sidebar-heading">
                <div class="icondiv"><img src="/img/icons/lightbulb-o.svg" class="icon" alt="Glühbirne" /></div>
                <h4>XMPP</h4>
            </div>
            MUC <a href="xmpp:krautchan@chat.krautspace.de">krautchan@chat.krautspace.de</a><br />
            Webchat <a href="https://kraut.space/chat">kraut.space/chat</a>
        </div>
        <div class="sidebar-item" id="github">
            <div class="sidebar-heading">
                <div class="icondiv"><img src="/img/icons/github-invers.svg" class="icon" alt="Github logo" /></div>
                <h4>Github</h4>
            </div>
            <a href="https://github.com/HackspaceJena">github.com/HackspaceJena</a>
        </div>
        <div class="sidebar-item" id="twitter">
            <div class="sidebar-heading">
                <div class="icondiv"><img src="/img/icons/twitter.svg" class="icon" alt="Twitter logo" /></div>
                <h4>Twitter</h4>
            </div>
            <a href="https://twitter.com/krautspace">twitter.com/krautspace</a>
        </div>
        <div class="sidebar-item" id="email">
            <div class="sidebar-heading">
                <div class="icondiv"><img src="/img/icons/envelope.svg" class="icon" alt="Briefumschlag" /></div>
                <h4>Email</h4>
            </div>
            <a href="email:office@krautspace.de">office@krautspace.de</a>
        </div>
        <div class="sidebar-item last-item" id="address">
            <div class="sidebar-heading">
                <div class="icondiv"><img src="/img/icons/home.svg" class="icon" alt="Haus" /></div>
                <h4>Physical</h4>
            </div>
            <span>Hackspace Jena e.&thinsp;V.<br />
                Krautgasse 26<br />
                07743 Jena<br />
									</span>
        </div>
    </aside>
</section>
<footer>
    <p>kraut.space ©2016 Hackspace Jena e.&thinsp;V. · <a href="/kolophon">Kolophon</a></p>
</footer>
</body>
</html>
