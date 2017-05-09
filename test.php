<?php

require 'namecheap.class.php';

$username = 'YOUR USERNAME';
$apiKey = 'YOUR API KEY';
$clientIp = 'IP WHERE THIS YOUR SCRIPT IS HOSTED';

$namecheap = new Namecheap ($username, $apiKey, $clientIp) ;
$data["Command"] = "namecheap.ssl.getList";
$returned = $namecheap->request($data);
print_r($returned)

 ?>
