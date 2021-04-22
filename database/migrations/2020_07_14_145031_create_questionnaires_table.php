<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('questionnaires', function (Blueprint $table) {
            $table->increments('id');    
            $table->string('q1');      
            $table->string('q2');      
            $table->string('q3');   
            $table->string('q4');    
            $table->string('q5');        
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
        Schema::dropIfExists('questionnaires');
    }
}
