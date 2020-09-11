<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enseignants', function (Blueprint $table) {
            $table->char('id_Grade',10);
            $table->unsignedBigInteger('utilisateur_Id_Utilisateur');

            $table->foreign('id_Grade')
                  ->references('id_Grade')
                  ->on('grades')
                  ->ondelete('cascade')
                  ->onUpdate('cascade');
                  
            $table->foreign('utilisateur_Id_Utilisateur')
                  ->references('id')
                  ->on('users')
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
        Schema::table('enseignants', function (Blueprint $table) {
            $table->dropForeign('enseignants_id_Grade_foreign');
            $table->dropForeign('enseignants_utilisateur_Id_Utilisateur_foreign');
        });
    }
}
