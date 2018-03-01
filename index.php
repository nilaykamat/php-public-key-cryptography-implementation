<?php

$private_key = file_get_contents('private');
$public_key = file_get_contents('public');

require_once('emails.php');
$startTime = microtime(true);
$encryptedData = [];
foreach($emails as $email){
	$ok = openssl_public_encrypt($email,$encrypted,$public_key);
	$encryptedData[] = $encrypted;
	// print_r($ok);
	// print_r($encrypted);
}
$endTime = microtime(true);

$diff = $endTime - $startTime;
print_r("Time taken for encryption : ");
var_dump($diff);


foreach($encryptedData as $item){
	$ok2 = openssl_private_decrypt($item,$decrypted,$private_key);
	// print_r($decrypted);
}
$finalEnd = microtime(true);
$finalDiff = $finalEnd - $startTime;
print_r("Time taken for decryption : ");
var_dump($finalEnd-$endTime);

print_r("Total Time Taken : ");
var_dump($finalDiff);

