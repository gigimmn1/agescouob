<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Enseignant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Enseignants', function(Blueprint $table) {
            $table->char('matricule_Enseignant',15);
            $table->string('nom_Enseignant', 30);
            $table->string('prenom_Enseignant',30);
            $table->char('telephone_Enseignant',10);
            $table->string('adresse_Enseignant',30);
            $table->char('email_Enseignant',50);
            $table->char('type_Enseignant',30);
            $table->integer('taux_Horaire');
            $table->integer('nbre_Heure_Enseignant');
            $table->char('grade_Enseignant',15);

            //Clés étrangères

            //$table->char('id_Grade',10);
            //$table->foreign('id_Grade')->references('id_Grade') ->on('Grades') ->onDelete('cascade');

            //$table->increments('id_Utilisateur');
            //$table->foreign('id_Utilisateur')->references('id_Utilisateur') ->on('Utilisateurs') ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('Enseignants');
    }
}
