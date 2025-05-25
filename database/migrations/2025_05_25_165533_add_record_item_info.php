<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRecordItemInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('紅棗', '/assets/image/record/1', 'redDate', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");

        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('大麥', '/assets/image/record/2', 'barley', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");

        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('柿葉', '/assets/image/record/3', 'persimmonLeaf', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");

        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('玄米', '/assets/image/record/4', 'brownRice', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");

        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('麥芽', '/assets/image/record/5', 'malt', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");

        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('決明子', '/assets/image/record/6', 'cassiaSeed', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");

        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('薏仁', '/assets/image/record/7', 'jobsTears', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");

        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('粟米', '/assets/image/record/8', 'corn', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");

        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('香菇', '/assets/image/record/9', 'shiitakeMushroom', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");

        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('黑豆', '/assets/image/record/10', 'blackBean', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");

        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('枇杷葉', '/assets/image/record/11', 'loquatLeaf', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");

        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('紅豆', '/assets/image/record/12', 'redBean', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");

        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('黍米', '/assets/image/record/13', 'millet', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");

        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('桑葉', '/assets/image/record/14', 'mulberryLeaf', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");

        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('黑米', '/assets/image/record/15', 'blackRice', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");

        $columns = "(`name`, `image_path`, `name_en`, `created_at`, `updated_at`)";
        $values = "('玉蜀黍', '/assets/image/record/16', 'maize', '2025-05-26 00:00:00', '2025-05-26 00:00:00');";
        DB::statement("INSERT INTO `record_item` $columns VALUES $values");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DELETE FROM `record_item`");
    }
}
