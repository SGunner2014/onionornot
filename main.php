<meta charset="UTF-8">

<?php

$feed = implode(file('http://reddit.com/r/nottheonion.rss'));
$xml = simplexml_load_string($feed);
$json = json_encode($xml);
$array = json_decode($json,TRUE);
//print_r($array['channel']);

function getSub($arr) {
	$link = substr($arr['link'], 24, 1);
	if (strtolower($link) === 'n') {
		return 'notonion';
	} else {
		return 'onion';
	}
}

function printSub() {
	$tmpArray = $array['channel']['item'];
	shuffle($tmpArray);
	$part = $tmpArray[1];
	$sub = getSub($part);
	echo '<p id="'.$sub.'">'.$part['title'].'</p>';
	$title = $part['title'];
}

/*
foreach($array['channel']['item'] as $art) {
	$sub = getSub($art);
	echo '<p id="'.$sub.'">'.$art['title'].'</p>';
}
*/


?>