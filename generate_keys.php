<?php
// Configuration settings for the key
$config = array(
    "digest_alg" => "sha512",
    "private_key_bits" => 4096,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);
$start = microtime(true);
// Create the private and public key
$res = openssl_pkey_new($config);

// Extract the private key into $private_key
openssl_pkey_export($res, $private_key);

echo $private_key;

$f = fopen('private', 'w');
fwrite($f, $private_key);
fclose($f);

// Extract the public key into $public_key
$public_key = openssl_pkey_get_details($res);
$public_key = $public_key["key"];
echo $public_key;

$f = fopen('public', 'w');
fwrite($f, $public_key);
fclose($f);

$end = microtime(true);
$diff = $end - $start;
echo $diff;