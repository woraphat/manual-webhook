<?php
$arr_url = [
  'kqkys.trialims.com' => 'https://cloud-eros.com:8443/modules/git/public/web-hook.php?uuid=c2629d41-aa16-411c-9e67-0acc4a20b4f3',
  'agdmz.trialims.com' => 'https://cloud-eros.com:8443/modules/git/public/web-hook.php?uuid=84c8e3c2-5a87-004a-50af-bee689f0eaf3',
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
  curl_exec($ch);
}

curl_close($ch);


?>
