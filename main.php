<?php

$feed = implode(file('http://reddit.com/r/nottheonion.rss'));
$xml = simplexml_load_string($feed);
$json = json_encode($xml);
$array = json_decode($json,TRUE);
print_r($array['channel']);

function getSub($arr) {
	$link = substr($arr['link'], 24, 24);
	if (strtolower($link) === 'n') {
		return 'notonion';
	} else {
		return 'onion';
	}
}

foreach($array['channel']['item'] as $art) {
	$sub = getSub($art);
	echo '<p id="'.$sub.'">'.$art['title'].'</p>';
}

?>