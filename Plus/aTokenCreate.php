<?php
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/

use LDAP\Result;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.paypal.com/v1/oauth2/token');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
curl_setopt($ch, CURLOPT_USERPWD, "AWupDVFxpF16DS4zfVkm5xS2OspDFRI_CVCw1lWYHMyjPKXdE5Mru_uEIoZBGD2-8RMLtXyd3LYUSPOD".":"."EBdPsbq5k0zaIQXF6L-BS71npDYbruuZ-IIMvY8vp2EsXDfJTbIncEFT94jdzn5Wm4dZicucWPylXZng");

$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

//Converter todo o retorno em somente Acess Token
$result = json_decode($result);
//$result = $result->access_token;


if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$atoken = $result->access_token;
return $result->access_token;

?>