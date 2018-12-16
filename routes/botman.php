<?php

use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello, my Lord!');
});
$botman->hears('How are you', function ($bot) {
    $bot->reply('I\'m fine, my Lord!');
});
$botman->hears('play', function ($bot) {
    $bot->reply('I\'m fine, my Lord!');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
