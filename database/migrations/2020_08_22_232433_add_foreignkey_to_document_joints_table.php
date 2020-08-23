<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToDocumentJointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('document_joints', function (Blueprint $table) {
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
        Schema::table('document_joints', function (Blueprint $table) {
            $table->dropForeign('document_joints_id_Demande_Acte_foreign');
        });
    }
}
