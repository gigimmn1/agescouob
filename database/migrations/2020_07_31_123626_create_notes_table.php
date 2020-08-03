<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id('id_Note');
            $table->string('libelle_Note');
            $table->float('valeur_Note', 4, 2);
            $table->timestamps();

            //Clés étrangères
            //$table->foreignId('id_Evaluation')->constrained('evaluations');
            //$table->foreignId('id_Inscription')->constrained('inscriptions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
