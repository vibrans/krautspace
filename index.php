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
    <meta property="og:title" content="kraut.space" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://vincent-liu.me/kraut/" />
    <meta property="og:description" content="Open space for open minds" />
    <meta property="og:image" content="https://status.krautspace.de/images/krautspace_pixelicon_open.png" />
    <meta property="og:locale" content="en_US" />
</head>
<body>
<header class="w3-container w3-padding-xlarge">
    <div>
    <div id="textlogo">
    <a href="/kraut/" class="topbartext"><span id="logo" class="w3-padding-small"><strong>kraut.space</strong></span>
        <span class="w3-hide-small">Internet presence of the Hackspace Jena e.V.</span></a>
    </div>
    <div class="navlinks">
    <ul class="w3-hide-small">
        <li><a href="/kraut/about">About</a></li>
        <li><a href="https://kraut.space">Wiki</a></li>
        <li><a href="https://kraut.space/blog:start">Blog</a></li>
    </ul>
    </div>
    <nav class="w3-dropdown-hover w3-right w3-hide-large w3-hide-medium">
        <button class="w3-btn">Menu</button>
        <div class="w3-dropdown-content w3-card-4">
            <a href="/kraut/about">About</a>
            <a href="https://kraut.space">Wiki</a>
            <a href="https://kraut.space/blog:start">Blog</a>
        </div>
    </nav>
    </div>
    <div id="header">
        <div class="w3-container">
        <!--<h1>kraut.space</h1>-->
            <img src="/kraut/img/krautspace-invers.svg" class="w3-image">
            <div class="w3-margin-top w3-margin-bottom" style="border-top: 3px solid white;"></div>
        <p id="slogan">THE HOME BASE OF THE HACKSPACE JENA E. V.</p>
            <a href="#moreinfo" class="w3-btn w3-indigo w3-side" id="enter">Enter &#8628;</a>
        </div>
        <!--<a id="roombutton" class='w3-btn-floating w3-white'>+</a>-->
        <div id="roombutton" class='w3-white'><?php getKrautButtonColor($status); ?><p><?php getKrautStatus($status); ?></p></div>
    </div>
</header>
<div class="w3-row w3-padding-large" id="moreinfo">
    <div class="w3-container w3-padding-large">
        <h2>Additional Information</h2>
        <p>For further information , take a look at our wiki or our blog</p>
        <a href="https://wiki.kraut.space/start" class="w3-btn w3-indigo w3-wide">Wiki</a>
        <a href="https://blog.kraut.space/start" class="w3-btn w3-indigo w3-wide">Blog</a>
    </div>
</div>
<div class="w3-row w3-border-bottom w3-padding-large" id="body">
    <div class="w3-col l8 m7" id="content">
        <div class="w3-container w3-padding-xlarge">
            <h2>Veranstaltungen</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
                Webchat <a href="https://kraut.space/chat">kraut.space/chat</a> <br>
                XMPP <a href="xmpp:krautchan@chat.krautspace.de">krautchan@chat.krautspace.de</a>
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
                <span>Hackspace Jena e. V.</br>
                    Krautgasse 26</br>
                    07743 Jena<br />
									</span>
            </div>
        </div>
    </div>
</div>
<footer class="w3-container w3-center w3-padding-small">
    <p>kraut.space &copy; 2016 Hackspace Jena e.V.</p>
</footer>
</body>
</html>