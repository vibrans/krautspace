<?php
/**
 * User: vincent
 * Date: 14/12/2016
 * Time: 2:55 PM
 */
include_once("config.php");
$api = apiRequest();
$status = $api['state']['open'];

function getContent() {
    $pagename = filter_input(INPUT_GET, 'title', FILTER_SANITIZE_URL);
    $page = $root_url . '/content/' . $pagename . '.txt';
    $file = fopen($page, 'rb');
    if($file) {
        echo stream_get_contents($file);
        fclose($file);
    } else {
        echo "Page not found";
    }
}

function apiRequest()
{
    $ch = curl_init('http://status.krautspace.de/api');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result, true);
}

function getKrautButtonColor($status) {
    if ($status) {
        echo "<img src='/img/icons/users.svg' id='krauticon'>";
    } else {
        echo "<img src='/img/icons/user-times.svg' id='krauticon'>";
    }
}

function getKrautStatus($status) {
    if ($status) {
        echo "Raum ist offen";
    } else {
        echo "Raum ist geschlossen";
    }
}

function getKrautSidebar($status)
{
    if ($status) {
        echo <<<END
<div class="sidebar-heading">
<div class="icondiv"><img src="/img/icons/users.svg" class="icon" alt="Person"></div>
<h4>Raum ist geöffnet</h4>
<p>Schaut einfach vorbei</p>
</div>
END;

    } else {
        echo <<<END
<div class="sidebar-heading">
<div class="icondiv"><img src="/img/icons/user-times.svg" class="icon" alt="niemand"></div>
<h4>Niemand ist im Raum</h4>
<p>Keine Hackerseele anwesend</p>
</div>
END;
    }
}

function getKrautButton($status)
{
    if ($status) {
        echo <<<END
<div id="roombutton" class="krautopen">
<img src="/img/icons/users.svg" id="roomicon" alt="Person">
<p>Raum ist offen</p>
</div>
END;

    } else {
        echo <<<END
<div id="roombutton" class="krautclose">
<img src="/img/icons/user-times.svg" id="roomicon" alt="niemand">
<p>Raum ist zu</p>
</div>
END;
    }
}
