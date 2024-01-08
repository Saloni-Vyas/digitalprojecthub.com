<?php

$key = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399'; // KEY
$key_index = 1; // KEY_INDEX

$response = $_POST; // FETCH DATA FROM DEFINE METHOD, IN THIS EXAMPLE I AM DEFINING POST WHILE I AM SENDING REQUEST

echo '<pre>';
print_r($response);
echo '</pre>';

$final_x_header = hash("sha256", "/pg/v1/status/" . $response['merchantId'] . "/" . $response['transactionId'] . $key_index) . "###" . $key;

$url = "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/status/" . $response['merchantId'] . "/" . $response['transactionId']; // <TESTING URL>

$headers = array(
    "Content-Type: application/json",
    "accept: text/plain",
    "X-VERIFY: " . $final_x_header,
    "X-MERCHANT-ID:" . $response['merchantId']
);

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$resp = curl_exec($curl);
$responsePayment = json_decode($resp, true);

// HANDLE YOUR PHONEPAY RESPONSE
echo '<pre>';
print_r($final_x_header);
echo '</pre>';

curl_close($curl);
