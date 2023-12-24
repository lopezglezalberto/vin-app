<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vins', function (Blueprint $table) {
            $table->foreign(['equipment_code_id'], 'vins_ibfk_1')->references(['id'])->on('equipment_code');
            $table->foreign(['place_production_id'], 'vins_ibfk_2')->references(['id'])->on('place_production');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vins', function (Blueprint $table) {
            $table->dropForeign('vins_ibfk_1');
            $table->dropForeign('vins_ibfk_2');
        });
    }
};
