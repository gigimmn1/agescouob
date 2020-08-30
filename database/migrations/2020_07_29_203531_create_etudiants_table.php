<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {       
        $table->CHAR('num_Etudiant',15)->unique();
        $table->CHAR('nom_Etudiant',50);
        $table->CHAR('prenom_Etudiant',50);
        $table->date('date_Naiss_Etudiant');
        $table->string('lieu_Naissance_Etudiant',30);
        $table->CHAR('situation_Matri_Etudiant',10);
        $table->INTEGER('annee_Bac_Etudiant');
        $table->CHAR('serie_Bac_Etudiant',4);
        $table->CHAR('tel_Etudiant',9);
        $table->CHAR('email_Etudiant',50);
        $table->string('origine_Etudiant',30);
        $table->CHAR('sexe_Etudiant',10);
        $table->string('photo_Etudiant',50);
        $table->timestamps();
        
        //Clé primaire
        $table->primary('num_Etudiant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
