<?php
if (count($_POST)) {
  $str = json_encode($_POST);
  if (is_string($str)) {
    $result = file_put_contents(__DIR__ . '/webhook.txt', $str);
  }
}
?>
