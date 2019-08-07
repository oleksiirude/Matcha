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
            $table->string('login')->unique();
            $table->string('name');
            $table->string('surname');
            $table->date('age')->nullable();
            $table->string('gender', 6)->nullable();
            $table->string('preferences', 12)->default('bisexual');
            $table->boolean('preferences_specified')->default(false);
            $table->string('bio', 500)->nullable();
            $table->string('avatar')->default('images/service/default_avatar.png');
            $table->boolean('avatar_uploaded')->default(false);
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('photo4')->nullable();
            $table->double('rating', 110, 1)->default(0.9);
            $table->boolean('email_notifications')->default(false);
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
