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
            $table->bigIncrements('id_Note');
            $table->string('libelle_Note', 50);
            $table->float('valeur_Note', 4, 2);
            $table->integer('absence_Note');
            $table->timestamps();

            //Clés étrangères
            $table->unsignedBigInteger('id_Evaluation');
            $table->foreign('id_Evaluation')->references('id_Evaluation')->on('evaluations')->ondelete('cascade');

            $table->unsignedBigInteger('id_Inscription');
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
        Schema::dropIfExists('notes');
    }
}
