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
            $update = $this->getWebhookUpdates();
            $telegramChat = $telegramUpdate->getChat();
            /* $telegramUser = $telegramUpdate->getMessage()->from;

            $chat_id = $update->getMessage()->getChat()->getId();
            $text= $update->getMessage()->getTex t(); */

            /* $chat = Chat::query()
                ->where('chat_id', '=', $telegramChat->id)
                ->get()
                ->first();

            if(!$chat)
                Chat::registerChat($telegramChat->id);

                ChatParticipant::registerMember(
                    $telegramUser->id,
                    $telegramUser->firstName,
                    $telegramUser->lastName,
                    $telegramChat->id
            );
 */
            $this->replyWithMessage(['text' => 'Done {$telegramChat}']);
        } catch (\Exception $exception) {
            $this->replyWithMessage(['text' => "Error: {$exception->getMessage()}"]);
        }

    }
}