<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game', function (Blueprint $table) {
            $table->increments('id_game');
            $table->string('name', 50)
                ->comment('遊戲名稱');
            $table->date('start_at')
                ->comment('開始日期');
            $table->string('on_image', 255);
            $table->string('off_image', 255);
            $table->string('tree_image', 255);
            $table->integer('style');
            $table->string('topic', 50);
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
        Schema::dropIfExists('game');
    }
}
