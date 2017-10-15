<?php

require('../vendor/autoload.php');
use Twilio\Rest\Client;

$sid = 'ACda1034e9e0390036bc3d8ac0231b595b';
$token = '06d798c008392b3159a419dfdde77a00';
$client = new Client($sid, $token);

$to = '15512004783';
$from = '14157612633';
$message_body = 'Hello from Mohitosh Mondal CS 643 Fall 2017';

$client->messages->create(
   $to,
   array(
       'from' => $from,
       'body' => $message_body
   )
);

echo "An SMS was sent";