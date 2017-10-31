<!DOCTYPE HTML>
<html>
<?php include_once 'getContent.php'; ?>
<head>
    <title>kraut.space - Verein</title>
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
            <h2>Der Hackspace Jena e.&thinsp;V.</h2>
            <p>Der Verein Hackspace Jena e.V. fungiert als Trägerverein für den Hack(er)space in Jena und hat aktuell 49
                Mitglieder (Stand 27. November 2016) und ist als gemeinnützig anerkannt.</p>

            <h3>Vorstand</h3>

            <p>Der Vorstand des Vereines besteht aktuell aus:</p>

            <ul>
                <li>Jens Kubieziel (Vorsitzender)</li>
                <li>Johanna Schell (Schriftführer)</li>
                <li>Bernd Kampe (Schatzmeister)</li>
            </ul>

            <h3>Mitglied werden</h3>

            <p>Um Mitglied zu werden, reicht eine schriftliche Willensbekundung gegenüber den Vorstand des Vereines — Im
                Idealfall über das ausgefüllte Mitgliedsformular, gesendet an die Postadresse. Durch eine Überweisung
                des Mitgliedsbeitrages und einer Bestätigung ist die Mitgliedschaft besiegelt.</p>

            <h3>Kontaktmöglichkeiten</h3>

            <p>Natürlich freuen wir uns auch über Post. Nur Werbung ist unerwünscht. Dabei kann die Post einfach an
                diese Adressen gesendet werden:</p>

            <p>Direkt an den Space: Hackspace Jena e.&thinsp;V.<br>
                Krautgasse 26<br>
                07743 Jena</p>

            <p>
                Elektronische Post wird über office@hackspace-jena.de entgegen genommen - gerne auch mit PGP/GnuPG
                verschlüsselt und signiert.
                Die aktuelle KeyID ist 0x3D60AFE3AB3FAB6D (Download), der komplette Fingerprint D492 6971 0FE3 D006 858A
                3726 3D60 AFE3 AB3F AB6D.
                Für einen Erstkontakt kann auch dieser Service benutzt werden: https://encrypt.to/0x3D60AFE3AB3FAB6D
            </p>
        </div>
    </div>
    <aside class="w3-col l4 m5">
        <div class="w3-container w3-padding-large">
            <div class="w3-border-bottom w3-padding-medium" id="email">
                <div class="sidebar-heading">
                    <div class="icondiv w3-circle"><img src="/img/icons/lock.svg" class="icon"></div>
                    <h4>PGP</h4>
                </div>
                <p>key <a href="https://keybase.io/hackspace_jena">0x3D60AFE3AB3FAB6D</a></p>
            </div>
            <div class="w3-border-bottom w3-padding-medium" id="bankverbindung">
                <div class="sidebar-heading">
                    <div class="icondiv w3-circle"><img src="/img/icons/diamond.svg" class="icon"></div>
                    <h4>Bankverbindung</h4>
                </div>
                <p>Inhaber: Hackspace Jena e.V.</br>
                    IBAN: DE55 8309 4495 0003 1839 12</br>
                    BIC: GENO DE F1 ETK</br>
                    Bank: Ethikbank Eisenberg
                </p>
            </div>
            <div class="w3-padding-medium" id="address">
                <div class="sidebar-heading">
                    <div class="icondiv w3-circle"><img src="/img/icons/home.svg" class="icon"></div>
                    <h4>Physical</h4>
                </div>
                <span>Hackspace Jena e.&thinsp;V.</br>
                    Krautgasse 26</br>
                    07743 Jena<br/>
									</span>
            </div>
        </div>
    </aside>
</div>
<footer class="w3-container w3-center w3-padding-small">
    <p>kraut.space ©2016 Hackspace Jena e.&thinsp;V. · <a href="/kolophon">Kolophon</a></p>
</footer>
</body>
</html>
