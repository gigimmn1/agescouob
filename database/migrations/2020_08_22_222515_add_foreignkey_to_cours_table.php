<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cours', function (Blueprint $table) {
            $table->char('id_Salle', 5);
            $table->char('matricule_Enseignant', 15);
            $table->char('id_Enseignement', 10);

            $table->foreign('id_Salle')
                  ->references('id_Salle')
                  ->on('salles')
                  ->ondelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('matricule_Enseignant')
                  ->references('matricule_Enseignant')
                  ->on('enseignants')
                  ->ondelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('id_Enseignement')
                  ->references('id_Enseignement')
                  ->on('enseignements')
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
        Schema::table('cours', function (Blueprint $table) {
            $table->dropForeign('cours_id_Salle_foreign');
            $table->dropForeign('cours_matricule_Enseignant_foreign');
            $table->dropForeign('cours_id_Enseignement_foreign');
        });
    }
}
