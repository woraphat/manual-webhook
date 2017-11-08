<?php
file_put_contents('webhook.txt', json_encode($_POST));
file_put_contents('webhook.json', $_POST['payload']);
$url = 'https://thevirus.in.th:8443/modules/git/public/web-hook.php?uuid=b9f6bd2f-db56-bb35-c08c-494a990409b9';

?>
