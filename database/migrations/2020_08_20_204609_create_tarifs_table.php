<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifs', function (Blueprint $table) {
            $table->CHAR('id_Tarif',5)->unique();
            $table->NUMERIC('somme_Tarif');
            $table->string('annotations_Tarif'),
            $table->timestamps();

            //Clé primaire
            $table->primary('id_Tarif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarifs');
    }
}
