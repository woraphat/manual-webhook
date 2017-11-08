<?php
if (count($_POST)) {
  $str = json_encode($_POST);
  if (!empty($str)) {
    $result = file_put_contents(__DIR__ . '/webhook.txt', $str);
  }
}
?>
