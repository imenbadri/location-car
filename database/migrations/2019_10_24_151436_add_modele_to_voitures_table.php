<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddModeleToVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('voitures', function (Blueprint $table) {
            $table->unsignedBigInteger('modele_id')->after('id');

            $table->foreign('modele_id')->references('id')->on('modeles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('voitures', function (Blueprint $table) {
            //
        });
    }
}
