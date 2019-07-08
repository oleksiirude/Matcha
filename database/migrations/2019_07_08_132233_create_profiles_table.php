<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigInteger('user_id');
            $table->string('name');
            $table->string('surname');
            $table->string('age', 3)->nullable();
            $table->string('gender', 6)->nullable();
            $table->string('preferences', 12)->default('bisexual');
            $table->string('bio', 500)->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('avatar')->default('images/default_avatar.png');
            $table->string('pic1')->nullable();
            $table->string('pic2')->nullable();
            $table->string('pic3')->nullable();
            $table->string('pic4')->nullable();
            $table->double('rating', 100, 1)->default(0.4);
            $table->boolean('status')->default(false);
            $table->timestamp('active')->nullable();
        });
    }
    
    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
