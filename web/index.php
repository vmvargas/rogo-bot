<?php
//grab twilio user number and msg content
// $user_number = $_POST['From'];
// $user_msg = $_POST['Body'];
// header('Content-Type: text/xml');

//generate API Request
$WA_request = "https://api.wolframalpha.com/v2/result?";
$WA_query = array(
    'i' => "is a tomato a fruit?",
    'appid' => 'DEMO'
);

// generate cURL session
$url = $WA_request.$WA_query;
// create a new cURL resource
$ch = curl_init();
// set URL and other appropriate options
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, 4);
// grab URL and pass it to the browser
$json = curl_exec($ch);
//validate response
if(!$json) {
    echo curl_error($ch);
}
// close cURL resource, and free up system resources
curl_close($ch);

//print variables
echo '$user_msg: '. $user_msg;
echo '$url: '. $url;
echo '$json: '. $json;
print_r(json_decode($json));

// Send SMS Response: