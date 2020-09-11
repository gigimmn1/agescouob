<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agents', function (Blueprint $table) {
            $table->unsignedBigInteger('utilisateur_Id_Utilisateur');

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
        Schema::table('agents', function (Blueprint $table) {
            $table->dropForeign('agents_utilisateur_Id_Utilisateur_foreign');
        });
    }
}
