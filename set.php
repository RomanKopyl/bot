<?php

// Load composer
require __DIR__.'/vendor/autoload.php';

$bot_api_key = '777667988:AAEJoiv_SwN6hLQCYb4H8MuCjcDqEbwqfF0';
$bot_username = 'r2c3_bot';
$hook_url = 'https://r2c3-bot.herokuapp.com/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}
