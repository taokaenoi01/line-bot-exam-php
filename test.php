<?php
require "vendor/autoload.php";
$access_token = 'k1+tnPGkJmLtwBucoSU+AQ/xKIaUFw+INxkscT9ZAZDtv8YueNd8IyXaraZG0zyxDlEno8pGOaZ1bti9wlcLrIWsYwh5P0m9ClZ9wv1ZUeffFIIYqlU6bMniKARmtHWlKPuBdA8LYe5stuktcQL8kwdB04t89/1O/w1cDnyilFU=';
$channelSecret = '64d2ac442ef2de0ec97fdbe2e469df4a';
$idPush = 'xxxxxx'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
