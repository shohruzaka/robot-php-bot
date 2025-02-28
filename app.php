<?php

require_once "Bot.php";

$TOKEN = "7977890792:AAFi5JNoblwABmFQR6iIyltMzYaB2WDN5jU";
// $API_URL = "https://api.telegram.org/bot$TOKEN/";

$bot = new Bot($TOKEN);
$content = $bot->getUpdates(); 

$message = $content['message'];
$chat_id = $message['chat']['id'];
$text = $message['text'];
$username = $message['from']['first_name'];


if ($text == "/start") {
    $res = $bot->sendMessage($chat_id, "Assalomu alaykum, $username");
}

?>