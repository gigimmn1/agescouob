<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id('id_Evaluation');
            $table->string('libelle_Evaluation');
            $table->integer('ordre_Evaluation');
            $table->string('type_Evaluation');
            $table->date('date_Evaluation');
            $table->timestamps();


            //Clés étrangères
            //$table->foreignId('id_Enseignement')->constrained('enseignements');

        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluations');
    }
}
