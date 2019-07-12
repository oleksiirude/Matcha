<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigInteger('user_id');
            $table->string('country');
            $table->string('region');
            $table->string('city');
            $table->string('gps_code');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 18, 15);
            $table->boolean('allow');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
