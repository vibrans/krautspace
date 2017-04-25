<?php

require_once 'ICal/ICal.php';
require_once 'ICal/EventObject.php';

function getEvents()
{
    $iCal = new \ICal\ICal();
    $iCal->initURL('https://calcifer.datenknoten.me/tags/krautspace.ics');
    $events = $iCal->sortEventsWithOrder($iCal->eventsFromInterval('1 week'));
    return $events;
}

function printEventTable($attr) {
    $iCal = new \ICal\ICal();
    $iCal->initURL('https://calcifer.datenknoten.me/tags/krautspace.ics');
    $events = $iCal->eventsFromInterval('1 week');
    echo <<<_END
<table $attr>
  <tr>
    <th>Datum</th>
    <th>Zeit</th>
    <th>Wochentag</th>
    <th>Titel</th> 
    <th>Beschreibung</th>
  </tr>
_END;
    foreach ($events as $event) {
        $unix = $iCal->iCalDateToUnixTimestamp($event->dtstart, false);
        $event_date = date('d.m.', $unix);
        $event_time = date('H:i', $unix);
        $event_dayofweek = toGerman(date('l', $unix));
        $event_title = $event->summary;
        $event_description = $event->description;
        echo <<<_END
  <tr>
    <td>$event_date</td>
    <td>$event_time</td>
    <td>$event_dayofweek</td>
    <td>$event_title</td> 
    <td style="min-width: 250px;">$event_description</td>
  </tr>
_END;
    }
    echo '</table>';
}

function printEvents() {
    $iCal = new \ICal\ICal();
    $iCal->initURL('https://calcifer.datenknoten.me/tags/krautspace.ics');
    $events = $iCal->eventsFromInterval('1 week');
    foreach ($events as $event) {
        $unix = $iCal->iCalDateToUnixTimestamp($event->dtstart, false);
        $event_datetime = date(' d.m. H:i', $unix);
        $event_dayofweek = toGerman(date('l', $unix));
        $event_description = $event->description;
        $output = $event_dayofweek . $event_datetime . ' — ' . $event->summary;
        echo "<div class='event'><span>$output</span><p>$event_description</p></div>";
    }
}

function pad($s) {
    return ' '.$s.' ';
}

function toGerman($day) {
    switch ($day) {
        case 'Monday':
            return 'Montag';
            break;
        case 'Tuesday':
            return 'Dienstag';
            break;
        case 'Wednesday':
            return 'Mittwoch';
            break;
        case 'Thursday':
            return 'Donnerstag';
            break;
        case 'Friday':
            return 'Freitag';
            break;
        case 'Saturday':
            return 'Samstag';
            break;
        case 'Sunday':
            return 'Sonntag';
        default:
            return '?';
    }
}