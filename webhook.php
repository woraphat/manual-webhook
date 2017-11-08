<?php
$result = file_put_contents(__DIR__ . '/webhook.txt', json_encode($_POST).'555');
if ($result) {
  file_put_contents(__DIR__ . '/webhook.txt', 'put content success.');
}
?>
