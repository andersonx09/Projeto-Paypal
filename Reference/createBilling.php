<?php // Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/

$atoken = require("./Reference/aTokenCreate.php");
//$atoken= $_GET["atoken"];


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v1/billing-agreements/agreement-tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n\n  \"description\": \"Billing Agreement\",\n\n  \"shipping_address\":\n\n  {\n\n    \"line1\": \"1350 North First Street\",\n\n    \"city\": \"San Jose\",\n\n    \"state\": \"CA\",\n\n    \"postal_code\": \"95112\",\n\n    \"country_code\": \"US\",\n\n    \"recipient_name\": \"John Doe\"\n\n  },\n\n  \"payer\":\n\n  {\n\n    \"payment_method\": \"PAYPAL\"\n\n  },\n\n  \"plan\":\n\n  {\n\n    \"type\": \"MERCHANT_INITIATED_BILLING\",\n\n    \"merchant_preferences\":\n\n    {\n\n      \"return_url\": \"https://example.com/return\",\n\n      \"cancel_url\": \"https://example.com/cancel\",\n\n      \"notify_url\": \"https://example.com/notify\",\n\n      \"accepted_pymt_type\": \"INSTANT\",\n\n      \"skip_shipping_address\": false,\n\n      \"immutable_shipping_address\": true\n\n    }\n\n  }\n\n}");

$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer '. $atoken;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
print_r($result);
?>