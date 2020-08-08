<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->char('id_Classe',15)->unique();
            $table->string('nom_Classe',50);
            $table->timestamps();

            //Clé primaire
            $table->primary('id_Classe');

            //Clé étrangères

           // $table->char('id_departement',10)->unique();
           // $table->foreign('id_Departement')->references('id_Departement')->on('departements')->onDelete('cascade');

          //  $table->char('id_niveau',2)->unique();
           // $table->foreign('id_niveau')->references('id_niveau')->on('niveaux')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
