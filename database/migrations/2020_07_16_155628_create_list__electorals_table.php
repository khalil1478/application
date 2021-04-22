<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListElectoralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list__electorals', function (Blueprint $table) {
            $table->id();
            $table->string('nom_liste');
            $table->integer('nb_voix');
            $table->integer('siege_complimentaire');
            $table->float('pourcentage');
            $table->float('nbr_siege_obtenu');
            $table->integer('version_proposee');
            $table->integer('version_actuelle');
            $table->integer('quotion_electoral');
            $table->integer('reste_electoral');

            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list__electorals');
    }
}
