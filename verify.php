<?php
$access_token = 'Gk5ju1WSVJSN4rjHMqRPg/PQy/WDYO4ufKGMtohDVNu7ixCnwE0w08DU1/S/9A0dEv1Hlf039lcmNFQAyHCB+8frCbioUfFysA/VQaUY22xqjFEfNdEFp17oT7Hh6IWlPPlk2UySptJNtSyeiOAfBgdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;