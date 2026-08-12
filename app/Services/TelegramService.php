<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


class TelegramService
{


    public function sendMessage($message)
    {


        $token = env('TELEGRAM_BOT_TOKEN');

        $chat_id = env('TELEGRAM_CHAT_ID');



        $response = Http::post(

            "https://api.telegram.org/bot{$token}/sendMessage",

            [

                'chat_id'=>$chat_id,

                'text'=>$message,

                'parse_mode'=>'HTML'

            ]

        );



        Log::info('Telegram Response:', [
            'status' => $response->status(),
            'body' => $response->body()
        ]);



        return $response->successful();


    }


}