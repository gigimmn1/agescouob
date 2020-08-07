<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salles', function(Blueprint $table){

            $table->char('id_salle',5)->unique();
            $table->string('nom_Salle',30);
            
            //Clé étrangère

            //$table->char('id_Batiment',5);
            //$table->foreign('id_Batiment')->references('id_Batiment') ->on('batiment') ->onDelete('cascade');
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
