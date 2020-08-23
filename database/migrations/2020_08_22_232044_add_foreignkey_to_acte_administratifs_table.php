<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToActeAdministratifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acte_administratifs', function (Blueprint $table) {
            $table->unsignedBigInteger('id_Demande_Acte');

            $table->foreign('id_Demande_Acte')
                  ->references('id_Demande_Acte')
                  ->on('demande_actes')
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
        Schema::table('acte_administratifs', function (Blueprint $table) {
            $table->dropForeign('acte_administratifs_id_Demande_Acte_foreign');
        });
    }
}
