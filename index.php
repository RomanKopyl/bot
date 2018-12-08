<?php

require_once 'vendor/autoload.php';
// require __DIR__ . DIRECTORY_SEPARATOR . 'vendor'. DIRECTORY_SEPARATOR .'autoload.php';

$token = 'токен';
$bot = new \TelegramBot\Api\Client($token);
// команда для start
$bot->command('start', function ($message) use ($bot) {
    $answer = 'Добро пожаловать!';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

// команда для помощи
$bot->command('help', function ($message) use ($bot) {
    $answer = 'Команды:
/help - вывод справки';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

// $bot->command('hello', function ($message) use ($bot) {
//     $text = $message->getText();
//     $param = str_replace('/hello ', '', $text);
//     $answer = 'Неизвестная команда';
//     if (!empty($param)) {
//         $answer = 'Привет, '.$param;
//     }
//     $bot->sendMessage($message->getChat()->getId(), $answer);
// });

$bot->run();
