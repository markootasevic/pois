<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInicijativeJunkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inicijativeJunk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imePrezime')->nullable();
            $table->string('nazivPrivrednogSubjekta');
            $table->string('adresa')->nullable();
            $table->string('email')->nullable();
            $table->string('nazivProcedure');
            $table->string('nazivZakona');
            $table->string('nazivClana');
            $table->string('primedbe');
            $table->string('predlogIzmene');
            $table->string('prilog');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inicijativeJunk');
    }
}
