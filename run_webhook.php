<?php
$url = 'https://thevirus.in.th:8443/modules/git/public/web-hook.php?uuid=b9f6bd2f-db56-bb35-c08c-494a990409b9';

$post_data = [
  'payload' => file_get_contents('webhook.json')
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// we are doing a POST request
curl_setopt($ch, CURLOPT_POST, 1);
// adding the post variables to the request
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

$output = curl_exec($ch);

curl_close($ch);

var_dump($output);
?>
