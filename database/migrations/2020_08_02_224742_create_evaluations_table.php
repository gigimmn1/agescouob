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
            $table->bigIncrements('id_Evaluation');
            $table->string('libelle_Evaluation', 50);
            $table->integer('ordre_Evaluation');
            $table->char('type_Evaluation', 20);
            $table->datetime('date_Evaluation');
            $table->timestamps();


            //Clés étrangères
            //$table->char('id_Enseignement',10);
            //$table->foreign('id_Enseignement')->references('id_Enseignement')->on('enseignements')->ondelete('cascade');

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
