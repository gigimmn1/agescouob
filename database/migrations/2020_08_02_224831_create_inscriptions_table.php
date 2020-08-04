<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->bigIncrements('id_Inscription');
            $table->char('statut_Inscription', 25);
            $table->char('promotion_Inscription', 10);
            $table->integer('nbre_Unite_A_Valider');
            $table->timestamps();



            //Clés étrangères
            $table->char('num_Etudiant',15);
            $table->foreign('num_Etudiant')->references('num_Etudiant')->on('etudiants')->ondelete('cascade');

            //$table->char('id_Cycle', 10);
            //$table->foreign('id_Cycle')->references('id_Cycle')->on('cycles')->ondelete('cascade');

            //$table->char('id_Tarif', 5);
            //$table->foreign('id_Tarif')->references('id_Tarif')->on('tarifs')->ondelete('cascade');

            //$table->char('id_Parcours', 10);
            //$table->foreign('id_Parcours')->references('id_Parcours')->on('parcours')->ondelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
}
