<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMarqueToModelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('modeles', function (Blueprint $table) {
            $table->unsignedBigInteger('marque_id')->after('id');

            $table->foreign('marque_id')->references('id')->on('marques');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modeles', function (Blueprint $table) {
            //
        });
    }
}
