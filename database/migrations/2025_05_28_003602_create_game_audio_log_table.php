<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameAudioLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_audio_log', function (Blueprint $table) {
            $table->increments('id_game_audio_log');
            $table->string('levels')
                ->comment('關卡');
            $table->integer('audio_status')
                ->comment('音效狀態 0: 關閉, 1: 開啟');
            $table->string('uid', 255);
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
        Schema::dropIfExists('game_audio_log');
    }
}
