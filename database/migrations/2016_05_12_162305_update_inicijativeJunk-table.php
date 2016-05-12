<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateInicijativeJunkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inicijativeJunk', function (Blueprint $table) {
            $table->timestamps();
            $table->enum('tip', ['procedura', 'propis']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inicijativeJunk', function (Blueprint $table) {
            $table->dropTimestamps();
            $table->dropColumn('tip');
        });
    }
}
