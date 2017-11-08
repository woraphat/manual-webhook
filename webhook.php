<?php
if (count($_POST)) {
  $result = file_put_contents(__DIR__ . '/webhook.txt', json_encode($_POST));
}
?>
