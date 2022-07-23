<?php
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$token_id = require("./Reference/createBillingToken.php");
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v1/billing-agreements/agreements');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{  
    \"token_id\": \"$token_id\"
}"
);

$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer '. $atoken;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$result = json_decode($result);
print_r($result); 

?>