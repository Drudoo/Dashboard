<?php

$TOKEN = "xxx";
$APIKEY = "xxx";

date_default_timezone_set('Europe/Copenhagen');
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.trakt.tv/calendars/my/shows/" . date("d-m-Y") . "/7");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "Authorization: Bearer ".$TOKEN,
  "trakt-api-version: 2",
  "trakt-api-key: ".$APIKEY
));
$shows = array();
$response = curl_exec($ch);
curl_close($ch);
$cal = json_decode($response, true);

$json = $cal;

foreach ($json as $key => $value) {
	array_push($shows, $json[$key]["show"]["title"]);
}

foreach ($shows as $key => $value) {
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://api.trakt.tv/shows/". str_replace(' ', '-', $value). "/progress/watched?hidden=hidden&specials=specials&count_specials=count_specials");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_HEADER, FALSE);

	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	  "Content-Type: application/json",
	  "Authorization: Bearer ".$TOKEN,
	  "trakt-api-version: 2",
	  "trakt-api-key: ".$APIKEY
	));

	$response = curl_exec($ch);
	curl_close($ch);
	$json = json_decode($response,true);
	$epLeft = intval($json["aired"])-intval($json["completed"]);

	$cal[$key]["show"]["ids"]["trakt"] = $epLeft;

}

$newJson = json_encode($cal);

echo $newJson;


?>