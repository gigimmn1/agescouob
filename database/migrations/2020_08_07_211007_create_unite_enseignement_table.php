<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniteEnseignementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unites_enseignements', function (Blueprint $table) {
            
            $table->char('id_Unite_Enseignement',10)->unique();
            $table->string('libelle_Unite_Enseignement',50);
            $table->integer('credit_Unite_Enseignement');
            $table->float('moyenne_Unite_Enseignement', 4, 2);

            //Clé étrangère
            //$table->char('id_Offre_Formation',10);
            //$table->foreign('id_Offre_Formation')->references('id_Offre_Formation')->on('offres_formations')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unites_enseignements');
    }
}
