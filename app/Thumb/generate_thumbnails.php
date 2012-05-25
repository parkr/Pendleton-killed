<?php
require dirname(__FILE__).'/../Config/database.php';

$dbconfc = new DATABASE_CONFIG;
$dbconf = $dbconfc->default;

$thumbnail_endpoint = 'http://localhost/TimThumb/adjust.php?w=300&h=300&src=';

mysql_connect($dbconf['host'], $dbconf['login'], $dbconf['password']) or die('Could not connect');
mysql_select_db($dbconf['database']) or die('Could not select database');

$r = mysql_query('SELECT src FROM photos RIGHT JOIN items_photos ON (`items_photos`.`photo_id` = `photos`.`id`) WHERE 1');
while($line = mysql_fetch_row($r)){
	$local = 'Pendleton/app/webroot/img/'.$line[0];
	$url = $thumbnail_endpoint.urlencode($local);
	echo $url."\n";
	$ch = curl_init($url);
	$fp = fopen(dirname(__FILE__).'/../webroot/img/thumb/'.basename($line[0]), 'wb');
	curl_setopt($ch, CURLOPT_FILE, $fp);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_exec($ch);
	curl_close($ch);
	fclose($fp);
}

?>