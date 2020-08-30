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
            $table->bigIncrements('id_Demande_Acte')->unique();//Clé primaire
            $table->CHAR('statut_Demande_Acte',30);
            $table->DATE('date_Demande_Acte');
            $table->CHAR('ressource_Demande_Acte',50);
            $table->string('observations_Demande_Acte');
            $table->CHAR('type_Demande_Acte',30);
            $table->DATE('date_Retrait_Demande_Acte');
            $table->timestamps();            
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
