<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateInicijativeAddStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inicijative', function (Blueprint $table) {
            $table->string('status');
            $table->enum('prihvacena', ['da', 'ne']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inicijative', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('prihvacena');
            
        });
    }
}
