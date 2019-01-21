<?php


$access_token = 'k1+tnPGkJmLtwBucoSU+AQ/xKIaUFw+INxkscT9ZAZDtv8YueNd8IyXaraZG0zyxDlEno8pGOaZ1bti9wlcLrIWsYwh5P0m9ClZ9wv1ZUeffFIIYqlU6bMniKARmtHWlKPuBdA8LYe5stuktcQL8kwdB04t89/1O/w1cDnyilFU=';

$userId = 'Ucf8de1c8842bc36cfce69119772081f4';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

