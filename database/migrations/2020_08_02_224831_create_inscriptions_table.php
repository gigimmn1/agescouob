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
            $table->id('id_Inscription');
            $table->string('statut_Inscription');
            $table->string('promotion_Inscription');
            $table->integer('nbre_unite_a_valider');
            $table->timestamps();

            //Clés étrangères
            //$table->foreignId('num_Etudiant')->constrained('etudiants');
            //$table->foreignId('id_cycle')->constrained('cycles');
            //$table->foreignId('id_tarif')->constrained('tarifs');
            //$table->foreignId('id_parcours')->constrained('parcours');

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
