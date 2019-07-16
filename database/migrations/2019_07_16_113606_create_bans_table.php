<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateBansTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('bans', function (Blueprint $table) {
                $table->bigInteger('user');
                $table->bigInteger('banned');
                $table->timestamp('date');
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('bans');
        }
    }
