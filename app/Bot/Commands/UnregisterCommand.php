<?php

namespace App\Bot\Commands;

use App\Models\Chat;
use App\Models\ChatParticipant;
use Telegram\Bot\Commands\Command;
use Illuminate\Support\Facades\DB;

class UnregisterCommand extends Command
{

    protected $name = "unregister";

    protected $description = "Unregister from RandomCoffee Game";

    public function handle()
    {
        $telegramUpdate = $this->getUpdate();
        $telegramChat = $telegramUpdate->getChat();
        $telegramUser = $telegramUpdate->getMessage()->from;

        try {
            ChatParticipant::unregisterMember($telegramUser->id);
            $this->replyWithMessage(['text' => 'Unregistered']);
        } catch (\Exception $exception) {
            $this->replyWithMessage(['text' => "Error: {$exception->getMessage()}"]);
        }

    }
}