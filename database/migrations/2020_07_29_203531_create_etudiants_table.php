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
        $table->date('date_naiss_Etudiant');
        $table->string('lieu_naissance_Etudiant',30);
        $table->CHAR('situation_matri_etudiant',10);
        $table->INTEGER('annee_bac_etudiant');
        $table->INTEGER('num_parent');
        $table->INTEGER('id_utilisateur');
        $table->CHAR('serie_bac_etudiant',4);
        $table->CHAR('tel_Etudiant',9);
        $table->CHAR('email_Etudiant',50);
        $table->string('origine_Etudiant',30);
        $table->CHAR('sexe_Etudiant',10);
        $table->string('photo_Etudiant',50);
        $table->timestamps();
        
        //Clé primaire
        $table->primary('num_Etudiant');

        //Clés étrangères
        //$table->foreign('num_parent')->references('num_parent')->on('parents')->ondelete('cascade');
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
