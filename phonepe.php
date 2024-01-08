<?php

$digitalProjectHub = [
    "merchantId" => 'PGTESTPAYUAT', // <THIS IS TESTING MERCHANT ID>
    "merchantTransactionId" => 'DPH' . rand(111111, 999999),
    "merchantUserId" => 'DPH' . time(),
    "amount" => (1 * 100),
    "redirectUrl" =>  'http://localhost:80/digitalprojecthub.com/redirect-url.php',
    "redirectMode" => "POST", // GET, POST DEFINE REDIRECT RESPONSE METHOD,
    "callbackUrl" =>  'http://localhost:80/digitalprojecthub.com/callback-url.php',
    "mobileNumber" => "8839178090",
    "paymentInstrument" => [
        "type" => "PAY_PAGE"
    ]
];

$encode = json_encode($digitalProjectHub);
$encoded = base64_encode($encode);
$key = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399'; // KEY
$key_index = 1; // KEY_INDEX
$string = $encoded . "/pg/v1/pay" . $key;
$sha256 = hash("sha256", $string);
$final_x_header = $sha256 . '###' . $key_index;


// $url = "https://api.phonepe.com/apis/hermes/pg/v1/pay"; <PRODUCTION URL>

$url = "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay"; // <TESTING URL>

$headers = array(
    "Content-Type: application/json",
    "accept: application/json",
    "X-VERIFY: " . $final_x_header,
);

$data = json_encode(['request' => $encoded]);

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);
// echo '<pre>';
// print_r($resp);
// echo '</pre>';
$response = json_decode($resp);


// http://localhost:80/digitalprojecthub.com/phonepe.php
header('Location:' . $response->data->instrumentResponse->redirectInfo->url);
curl_close($curl);
