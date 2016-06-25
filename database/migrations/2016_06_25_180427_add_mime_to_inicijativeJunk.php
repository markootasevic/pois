<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMimeToInicijativeJunk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inicijativejunk', function (Blueprint $table) {
            $table->string('mime');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inicijativejunk', function (Blueprint $table) {
            $table->dropColumn('mime');

        });
    }
}
