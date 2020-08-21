<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActeAdministratifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acte_administratifs', function (Blueprint $table) {
            $table->increments('id_Acte_Administratif')->unique();
            $table->DATE('date_Acte_Administratif');
            $table->CHAR('reference_Acte_Administratif',20);
            $table->string('signataire_Acte_Administratif',50);
            $table->CHAR('type_Acte_Administratif',15);
            $table->integer('id_Demande_Acte');
            $table->timestamps();

            //Clé primaire
            $table->primary('id_Acte_Administratif');

            //Clé étrangère
            $table->foreign('id_Demande_Acte')->references('id_Demande_Acte')->on('demande_actes')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acte_administratifs');
    }
}
