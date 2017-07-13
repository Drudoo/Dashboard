<?php
date_default_timezone_set('Europe/Copenhagen');

$API = "xxx";
$ch = curl_init();
$url = $API."departureBoard?id=008600783&date=" . date("d.m.y") . "&time=" . date("H:i") . "&useBus=0&format=json";
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
