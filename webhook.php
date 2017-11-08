<?php
$result = file_put_contents('webhook.txt', json_encode($_POST).'555');
if (!$result) {
  file_put_contents('webhook.txt', 'false put content.');
}
?>
