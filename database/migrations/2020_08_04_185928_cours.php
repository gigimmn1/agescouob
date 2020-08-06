<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cours', function(Blueprint $table) {
            $table->char('id_Cours',10);
            $table->char('nom_Cours', 30);
            $table->time('duree_Cours');
            $table->char('annee_Academique_Cours',10);
            $table->char('jour_Cours',10);
            $table->time('heure_Debut_Dispenser');

            //Clés étrangères

            //$table->char('id_Salle',5);
            //$table->foreign('id_Salle')->references('id_Salle') ->on('Salles') ->onDelete('cascade');

            //$table->char('matricule_Enseignant',15);
            //$table->foreign('matricule_Enseignant')->references('matricule_Enseignant') ->on('Enseignants') ->onDelete('cascade');
            
            //$table->char('id_Enseignement',10);
            //$table->foreign('id_Enseignement')->references('id_Enseignement') ->on('Enseignements') ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('Cours');
    }
}
