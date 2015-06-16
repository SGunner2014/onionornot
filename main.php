<?php

$feed = implode(file('http://reddit.com/r/theonion.rss'));
$xml = simplexml_load_string($feed);
$json = json_encode($xml);
$array = json_decode($json,TRUE);

?>