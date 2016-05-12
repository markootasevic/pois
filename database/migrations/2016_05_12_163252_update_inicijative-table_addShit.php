<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateInicijativeTableAddShit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inicijative', function (Blueprint $table) {
            $table->enum('tip', ['procedura', 'propis']);        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inicijative', function (Blueprint $table) {
            $table->dropColumn('tip');
        });
    }
}
