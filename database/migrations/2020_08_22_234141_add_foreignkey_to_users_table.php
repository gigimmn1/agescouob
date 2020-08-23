<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->char('etudiant_Num_Etudiant',15);
            $table->char('enseignant_Matricule_Enseignant',15);
            $table->char('parent_Num_Parent');
            $table->unsignedBigInteger('agent_Id_Agent');

            $table->foreign('etudiant_Num_Etudiant')
                  ->references('num_Etudiant')
                  ->on('etudiants')
                  ->ondelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('enseignant_Matricule_Enseignant')
                  ->references('matricule_Enseignant')
                  ->on('enseignants')
                  ->ondelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('parent_Num_Parent')
                  ->references('num_Parent')
                  ->on('parents')
                  ->ondelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('agent_Id_Agent')
                  ->references('id_Agent')
                  ->on('agents')
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_etudiant_Num_Etudiant_foreign');
            $table->dropForeign('users_enseignant_Matricule_Enseignant_foreign');
            $table->dropForeign('users_parent_Num_Parent_foreign');
            $table->dropForeign('users_agent_Id_Agent_foreign');
        });
    }
}
