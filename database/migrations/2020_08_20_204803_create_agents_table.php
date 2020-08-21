<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->increments('id_Agent')->unique();
            $table->string('nom_Agent',30);
            $table->string('prenom_Agent',30);
            $table->CHAR('tel_Agent',10);
            $table->string('fonction_Agent',60);
            $table->integer('id_Utilisateur');
            $table->timestamps();

            //Clé primaire
            $table->primary('id_Agent');

            //Clé étrangère
            $table->foreign('id_Utilisateur')->references('id')->on('users')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
