<?php

namespace App\Bot\Commands;

use App\Models\Chat;
use App\Models\ChatParticipant;
use Telegram\Bot\Commands\Command;
use Illuminate\Support\Facades\DB;

class RegisterCommand extends Command
{

    protected $name = "register";

    protected $description = "Register to RandomCoffee Game";

    public function handle()
    {
        try {
            $update = $this->getUpdate();
            $telegramChat = $telegramUpdate->getChat();
            $telegramUser = $telegramUpdate->getMessage()->from;

            $chat = Chat::query()
                ->where('chat_id', '=', $telegramChat->id)
                ->get()
                ->first();

            // in case the chat is not added to DB yet
            if(!$chat)
                Chat::registerChat($telegramChat->id);

            ChatParticipant::registerMember(
                $telegramUser->id,
                $telegramUser->firstName,
                $telegramUser->lastName,
                $telegramChat->id
            );

            $this->replyWithMessage(['text' => 'Registered {$telegramUser->firstName}']);
        } catch (\Exception $exception) {
            $this->replyWithMessage(['text' => "Error: {$exception->getMessage()}"]);
        }

    }
}