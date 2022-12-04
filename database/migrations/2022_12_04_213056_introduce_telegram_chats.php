<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IntroduceTelegramChats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id('chat_id');
            $table->timestamps();
        });
        Schema::create('chat_participants', function (Blueprint $table) {
            $table->id('participant_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->foreignId('chat_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_participants');
        Schema::dropIfExists('chats');
    }
}
