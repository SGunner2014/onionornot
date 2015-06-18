<meta charset="UTF-8">

<?php

$feed = implode(file('http://reddit.com/r/nottheonion.rss?limit=100'));
$xml = simplexml_load_string($feed);
$json = json_encode($xml);
$array = json_decode($json,TRUE);
$feed = implode(file('http://reddit.com/r/theonion.rss?limit=100'));
$xml = simplexml_load_string($feed);
$json = json_encode($xml);
$array2 = json_decode($json,TRUE);
//print_r($array);

for ($i=1; $i<count($array2['channel']['item']); $i++) {
	array_push($array['channel']['item'], $array2['channel']['item'][$i]);
}

//array_push($array['channel']['item'], $array2['channel']['item']);
//print_r($array['channel']);

function getSub($arr) {
	$link = substr($arr['link'], 24, 1);
	if (strtolower($link) === 'n') {
		return 'notonion';
	} else {
		return 'onion';
	}
}

function printSub($array) {
	$tmpArray = $array['channel']['item'];
	//print_r($array);
	shuffle($tmpArray);
	for ($i=1; $i<count($tmpArray); $i++) {
		if (!strpos(strtolower($tmpArray[$i]['title']), 'onion')) {

		} else {
			unset($tmpArray[$i]);
		}
	}
	//print_r($tmpArray);
	$part = $tmpArray[1];
	$sub = getSub($part);
	echo '<h1 style="text-align:center;" id="'.$sub.'">'.strtoupper($part['title']).'</h1>';
	return array("title" => $part['title'], "link" => $part['link']);
}

/*
foreach($array['channel']['item'] as $art) {
	$sub = getSub($art);
	echo '<p id="'.$sub.'">'.$art['title'].'</p>';
}
*/


?>
