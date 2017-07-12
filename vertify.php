<?php
$access_token = 'xjGIR1MZNjzmCI9qagfTX7ksvvmLJYmOZZfCaAvY52kld2Hm4SeDJtzRv31ZDyIum31zNpHaY6lIWJ0LRzIqnxsgrBt0a+dKb56qqBmOlDtKyONakxR1kk6ADFzu3Ko5WWqxfhMcufHu3ldcWEhREAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
