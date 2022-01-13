<?php
$atoken= $_GET["atoken"];
// Create order
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v2/checkout/orders');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n  \"intent\": \"CAPTURE\",\n  \"purchase_units\": [\n    {\n      \"amount\": {\n        \"currency_code\": \"USD\",\n        \"value\": \"300.00\"\n      }\n    }\n  ]\n}");

$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer ' . $atoken;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$result = json_decode($result);
$idOrder = $result->id;

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

echo $idOrder;
?>