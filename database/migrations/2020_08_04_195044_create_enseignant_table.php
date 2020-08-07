<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants', function(Blueprint $table) {
            $table->char('matricule_Enseignant',15)->unique();
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
            //$table->foreign('id_Grade')->references('id_Grade') ->on('grades') ->onDelete('cascade');

            //$table->bigIncrements('id_Utilisateur');
            //$table->foreign('id_Utilisateur')->references('id_Utilisateur') ->on('utilisateurs') ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enseignants');
    }
}
