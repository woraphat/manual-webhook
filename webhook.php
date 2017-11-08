<?php
$arr_url = [
  'https://thevirus.in.th:8443/modules/git/public/web-hook.php?uuid=b9f6bd2f-db56-bb35-c08c-494a990409b9'
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// we are doing a POST request
curl_setopt($ch, CURLOPT_POST, 1);
// adding the post variables to the request
curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);

$output = curl_exec($ch);

foreach ($arr_url as $key => $value) {
  curl_setopt($ch, CURLOPT_URL, $value);
  $output = curl_exec($ch);
  var_dump($output);
}

curl_close($ch);


?>
