<?php
/**
 * User: vincent
 * Date: 14/12/2016
 * Time: 2:55 PM
 */

$api = apiRequest();
$status = $api['state']['open'];

function getContent() {
    $pagename = filter_input(INPUT_GET, 'title', FILTER_SANITIZE_URL);
    $page = 'http://vincent-liu.me/kraut/content/' . $pagename . '.txt';
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
        echo "<img src='/kraut/img/icons/users.svg' class='krauticon'>";
    } else {
        echo "<img src='/kraut/img/icons/user-times.svg' class='krauticon'>";
    }
}

function getKrautStatus($status) {
    if ($status) {
        echo "kraut.space ist offen";
    } else {
        echo "kraut.space ist zu";
    }
}

function getKrautSidebar($status)
{
    if ($status) {
        echo <<<END
<div class="sidebar-heading">
<div class="icondiv w3-circle"><img src="/kraut/img/icons/users.svg" class="icon"></div>
<h4>kraut.space ist offen</h4>
</div>
END;

    } else {
        echo <<<END
<div class="sidebar-heading">
<div class="icondiv w3-circle"><img src="/kraut/img/icons/user-times.svg" class="icon"></div>
<h4>kraut.space ist zu</h4>
</div>
END;
    }
}
