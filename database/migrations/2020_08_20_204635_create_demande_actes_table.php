<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeActesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_actes', function (Blueprint $table) {
            $table->increments('id_Demande_Acte')->unique();
            $table->CHAR('statut_Demande_Acte',30);
            $table->DATE('date_Demande_Acte');
            $table->CHAR('ressource_Demande_Acte',50);
            $table->string('observations_Demande_Acte');
            $table->CHAR('type_Demande_Acte',30);
            $table->DATE('date_Retrait_Demande_Acte');
            $table->integer('id_Inscription');
            $table->timestamps();

            //Clé primaire
            $table->primary('id_Demande_Acte');

            //Clé étrangère
            $table->foreign('id_Inscription')->references('id_Inscription')->on('inscriptions')->ondelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('demande_actes');
    }
}
