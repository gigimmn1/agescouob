<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->char('id_Cours',10)->unique();
            $table->char('nom_Cours', 30);
            $table->time('duree_Cours');
            $table->char('annee_Academique_Cours',10);
            $table->char('jour_Cours',10);
            $table->time('heure_Debut_Dispenser');
            $table->timestamps();

            //Clé primaire
            $table->primary('id_Cours');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cours');
    }
}
