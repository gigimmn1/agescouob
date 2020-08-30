<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToEnseignementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enseignements', function (Blueprint $table) {
            $table->char('id_Unite_Enseignement',10);
            $table->char('id_Semestre',3);
            $table->char('id_Classe',15);

            $table->foreign('id_Unite_Enseignement')
                  ->references('id_Unite_Enseignement')
                  ->on('unites_enseignements')
                  ->ondelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('id_Semestre')
                  ->references('id_Semestre')
                  ->on('semestres')
                  ->ondelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('id_Classe')
                  ->references('id_Classe')
                  ->on('classes')
                  ->ondelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enseignements', function (Blueprint $table) {
            $table->dropForeign('enseignements_id_Unite_Enseignement_foreign');
            $table->dropForeign('enseignements_id_Semestre_foreign');
            $table->dropForeign('enseignements_id_Classe_foreign');            
        });
    }
}
