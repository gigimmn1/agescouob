<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants', function (Blueprint $table) {
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

            //Clé primaire
            $table->primary('matricule_Enseignant');
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
