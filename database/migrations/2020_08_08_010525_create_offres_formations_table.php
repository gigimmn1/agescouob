<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres_formations', function (Blueprint $table) {
            $table->char('id_Offre_Formation',10)->unique();
            $table->string('nom_Offre_Formation',50);
            $table->timestamps();

            //Clé primaire
            $table->primary('id_Offre_Formation');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres_formations');
    }
}
