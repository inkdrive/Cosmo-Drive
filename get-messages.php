<?php
$messages = json_decode(file_get_contents('messages.json'), true);
if (!$messages) {
    $messages = [];
}
echo json_encode($messages);
?>
