<?php

namespace App\Http\Controllers;

use App\Notifications\TelegramNotification;
use Illuminate\Http\Request;
use Telegram;

class TelegramBotController extends Controller
{
    public function updates()
    {
        $updates = Telegram::getUpdates();
        return $updates;
    }
    
    public function message()
    {
        $chatId = '1149768048';        
        $message = "Hello from corazonBot\!" . "\n" . "Your test is a *SUCCESS*";       

        Telegram::sendMessage([
            'chat_id'    => $chatId,
            'parse_mode' => 'MarkdownV2',
            'text' => $message,
        ]);
    }
}

// https://api.telegram.org/bot5426477949:AAGzOlzTgfrGpfjt6NtDeTBdZNoLqzYiDEU/getUpdates
// https://api.telegram.org/bot5426477949:AAGzOlzTgfrGpfjt6NtDeTBdZNoLqzYiDEU/sendMessage?chat_id=1149768048&text=super
