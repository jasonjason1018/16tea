<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGameInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $columns = "(`name`, `start_at`, `on_image`, `off_image`, `tree_image`, `style`, `topic`, `created_at`, `updated_at`)";
        $values = "('晨光<br>森林', '2025-06-05', './assets/image/list/01-on.png', './assets/image/list/01-off.png', './assets/image/list/tree-01.png', 1, 'morning', '2025-05-23 00:00:00', '2025-05-23 00:00:00');";
        DB::statement("INSERT INTO `game` $columns VALUES $values");

        $columns = "(`name`, `start_at`, `on_image`, `off_image`, `tree_image`, `style`, `topic`, `created_at`, `updated_at`)";
        $values = "('霧影<br>森林', '2025-06-12', './assets/image/list/02-on.png', './assets/image/list/02-off.png', './assets/image/list/tree-02.png', 2, 'mist', '2025-05-23 00:00:00', '2025-05-23 00:00:00');";
        DB::statement("INSERT INTO `game` $columns VALUES $values");

        $columns = "(`name`, `start_at`, `on_image`, `off_image`, `tree_image`, `style`, `topic`, `created_at`, `updated_at`)";
        $values = "('星語<br>森林', '2025-06-19', './assets/image/list/03-on.png', './assets/image/list/03-off.png', './assets/image/list/tree-03.png', 1, 'star', '2025-05-23 00:00:00', '2025-05-23 00:00:00');";
        DB::statement("INSERT INTO `game` $columns VALUES $values");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DELETE FROM `game` WHERE `name` = '晨光<br>森林'");
        DB::statement("DELETE FROM `game` WHERE `name` = '霧影<br>森林'");
        DB::statement("DELETE FROM `game` WHERE `name` = '星語<br>森林'");
    }
}
