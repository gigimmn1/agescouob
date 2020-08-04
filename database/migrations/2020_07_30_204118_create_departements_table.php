<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departements', function (Blueprint $table) {
            $table->CHAR('id_departement',10)->unique();
            $table->string('nom_departement',100);
            $table->CHAR('id_faculte',5);
            $table->timestamps();

            //Clé primaire
            $table->primary('id_departement');

            //clé étrangère sur Facultes
            $table->foreign('id_faculte')->references('id_faculte')->on('facultes')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departements');
    }
}
