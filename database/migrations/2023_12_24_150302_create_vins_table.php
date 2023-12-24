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
        Schema::create('vins', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('vin', 17);
            $table->integer('equipment_code_id')->index('equipment_code_id');
            $table->integer('place_production_id')->index('place_production_id');
            $table->integer('year_issue');
            $table->integer('version');
            $table->integer('serial_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vins');
    }
};
