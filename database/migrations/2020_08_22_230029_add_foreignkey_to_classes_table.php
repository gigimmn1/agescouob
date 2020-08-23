<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->char('id_departement',10);
            $table->char('id_niveau',2);

            $table->foreign('id_departement')
                  ->references('id_departement')
                  ->on('departements')
                  ->ondelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('id_niveau')
                  ->references('id_niveau')
                  ->on('niveaux')
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
        Schema::table('classes', function (Blueprint $table) {
            $table->dropForeign('classes_id_departement_foreign');
            $table->dropForeign('classes_id_niveau_foreign');
        });
    }
}
