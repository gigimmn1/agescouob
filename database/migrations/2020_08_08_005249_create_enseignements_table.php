<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignements', function (Blueprint $table) {
            $table->char('id_Enseignement',10)->unique();
            $table->string('libelle_Enseignement',50);
            $table->integer('coeff_Enseignement');
            $table->integer('volume_Horaire_Enseignement');
            $table->integer('nombre_Heure_Enseignement');
            $table->integer('nombre_Heure_Cm');
            $table->integer('nombre_Heure_Td');
            $table->integer('nombre_Heure_Tp');
            $table->timestamps();

            //Clé primaire
            $table->primary('id_Enseignement');

            //Clés étrangères
            
            //$table->char('id_Unite_Enseignement',10);
            //$table->foreign('id_Unite_Enseignement')->references('id_Unite_Enseignement')->on('Unites_Enseignement')->onDelete('cascade');
           
            //$table->char('id_Semestre',3);
            //$table->foreign('id_Semestre')->references('id_Semestre')->on('semestres')->onDelete('cascade');

            //$table->char('id_Classe',15);
            //$table->foreign('id_Classe')->references('id_Classe')->on('classes')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enseignements');
    }
}
