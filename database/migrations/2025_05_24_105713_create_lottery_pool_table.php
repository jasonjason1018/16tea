<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryPoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_pool', function (Blueprint $table) {
            $table->increments('id_lottery_pool');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->integer('quantity');
            $table->float('winning_odds');
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
        Schema::dropIfExists('lottery_pool');
    }
}
