<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://gameapi.51ehw.com/api/v1/useraccount/token',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => 'UTF-8',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => 'key=45cc8717e4a25e2e54f43129648e488b',
    CURLOPT_HTTPHEADER => array(
        'cache-control: no-cache',
        'content-type: application/x-www-form-urlencoded'
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo 'cURL Error #:' . $err;
} else {
    $res = trim($response, "\xEF\xBB\xBF");
    var_dump(json_decode($res));
}


