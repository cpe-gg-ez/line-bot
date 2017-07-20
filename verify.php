<?php
$access_token = 'MIGzOK0n6uiceEx4j5cpIcTfDW54QDegDIo3ai8dLiTyu5jVE61c1YYBdUEIH6P/MhqfCc2XVqLGSRggQNLfciG4PoMLn6GiG4cJ6VBPVgJ3mqgdqglpg6T43YJ2NlGNS9qLac9nAfF8RXg0RbQh+QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;