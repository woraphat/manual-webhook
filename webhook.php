<?php
file_put_contents('webhook.txt', json_encode($_POST));
file_put_contents('webhook.json', $_POST['payload']);
?>
