
<?php
$message = json_decode(file_get_contents('php://input'), true)['message'];

$messages = json_decode(file_get_contents('messages.json'), true);
if (!$messages) {
    $messages = [];
}
$messages[] = htmlspecialchars($message);
file_put_contents('messages.json', json_encode($messages));
?>
