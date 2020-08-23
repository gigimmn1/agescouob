<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_Evaluation');
            $table->unsignedBigInteger('id_Inscription');

            $table->foreign('id_Evaluation')
                  ->references('id_Evaluation')
                  ->on('evaluations')
                  ->ondelete('cascade')
                  ->onUpdate('cascade');

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
        Schema::table('notes', function (Blueprint $table) {
            $table->dropForeign('notes_id_Evaluation_foreign');
            $table->dropForeign('notes_id_Inscription_foreign');
        });
    }
}
