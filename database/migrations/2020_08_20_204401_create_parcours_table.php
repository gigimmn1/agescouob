<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcours', function (Blueprint $table) {
            $table->CHAR('id_Parcours',10)->unique();  
            $table->string('libelle_Parcours',100);
            $table->CHAR('id_Classe',15);
            $table->timestamps();

            //Clé primaire
            $table->primary('id_Parcours');

            //clé secondaire
            $table->foreign('id_Classe')->references('id_Classe')->on('classes')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcours');
    }
}
