<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use Symfony\Component\HttpFoundation\Request;

class ChatController extends AbstractController {
    public function chatbot(){
        return $this->render('index/chat.html.twig');
    }
}
//$config = [
//    "telegram" => [
//        "token" => "741714542:AAF5ZzoQ3l9TO5HaS1E28LkIN3GqvsWj3Q4"
//    ]
//];

// Load the driver(s) you want to use
// DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);

//$this->request->post("https://api.telegram.org/bot741714542:AAF5ZzoQ3l9TO5HaS1E28LkIN3GqvsWj3Q4/setWebhook");

// Create an instance
//$botman = BotManFactory::create($config);

// Give the bot something to listen for.
$botman->hears('hello', function (BotMan $bot) {
    $bot->reply('Hello yourself.');
});

// Start listening
$botman->listen();