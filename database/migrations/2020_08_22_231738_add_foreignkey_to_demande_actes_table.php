<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToDemandeActesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demande_actes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_Inscription');

            $table->foreign('id_Inscription')
                  ->references('id_Inscription')
                  ->on('inscriptions')
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
        Schema::table('demande_actes', function (Blueprint $table) {
            $table->dropForeign('demande_actes_id_Inscription_foreign');
        });
    }
}
