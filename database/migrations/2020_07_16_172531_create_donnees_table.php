<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donnees', function (Blueprint $table) {
            $table->id();
            $table->integer('Bultain_Annulees ');
            $table->integer('Bultain_Blancs');
            $table->integer('Total_Voix_List');
            $table->integer('Nombre_Listes');
            $table->string('circonscription');
            $table->integer('nbr_sieges');
            $table->integer('Total_Voix');
            $table->float('Total_Voix_Siege');
            $table->int('total_nbr_siege_obtenu');
            $table->int('total_version_proposee');
            $table->int('total_version_actuelle');
            $table->int('total_siege_complimentaire');
            $table->int('nbr_voix_siege');
            $table->int('total_quotion_electoral');
            $table->int('total_reste_electoral');
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
        Schema::dropIfExists('donnees');
    }
}
