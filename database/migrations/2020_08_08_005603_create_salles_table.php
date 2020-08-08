<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salles', function (Blueprint $table) {
            $table->char('id_Salle',5)->unique();
            $table->string('nom_Salle',30);
            $table->timestamps();

            //Clé primaire
            $table->primary('id_Salle');
            
            //Clé étrangère

            //$table->char('id_Batiment',5);
            //$table->foreign('id_Batiment')->references('id_Batiment')->on('batiment')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salles');
    }
}
