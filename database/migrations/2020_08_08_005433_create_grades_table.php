<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->char('id_Grade',10)->unique();
            $table->string('libelle_Grade',50);
            $table->integer('taux_Horaire_Grade');
            $table->integer('nombre_Heure_Grade');
            $table->timestamps();

            //Clé primaire
            $table->primary('id_Grade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
