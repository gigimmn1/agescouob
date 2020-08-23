<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToUnitesEnseignementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('unites_enseignements', function (Blueprint $table) {
            $table->char('id_Offre_Formation',10);

            $table->foreign('id_Offre_Formation')
                  ->references('id_Offre_Formation')
                  ->on('offres_formations')
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
        Schema::table('unites_enseignements', function (Blueprint $table) {
            $table->dropForeign('unites_enseignements_id_Offre_Formation_foreign');
        });
    }
}
