<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inscriptions', function (Blueprint $table) {
            $table->char('num_Etudiant',15);
            $table->char('id_Cycle', 10);
            $table->char('id_Tarif', 5);
            $table->char('id_Parcours', 10);

            $table->foreign('num_Etudiant')
                  ->references('num_Etudiant')
                  ->on('etudiants')
                  ->ondelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('id_Cycle')
                  ->references('id_Cycle')
                  ->on('cycles')
                  ->ondelete('cascade')
                  ->onUpdate('cascade');
            
            $table->foreign('id_Tarif')
                  ->references('id_Tarif')
                  ->on('tarifs')
                  ->ondelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('id_Parcours')
                  ->references('id_Parcours')
                  ->on('parcours')
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
        Schema::table('inscriptions', function (Blueprint $table) {
            $table->dropForeign('evaluations_num_Etudiant_foreign');
            $table->dropForeign('evaluations_id_Cycle_foreign');
            $table->dropForeign('evaluations_id_Tarif_foreign');
            $table->dropForeign('evaluations_id_Parcours_foreign');
        });
    }
}
