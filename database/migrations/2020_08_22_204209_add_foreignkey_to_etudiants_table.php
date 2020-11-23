<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('etudiants', function (Blueprint $table) {
            $table->char('num_Parent',15)->nullable();

            $table->foreignId('user_id')
                  ->constrained('users')
                  ->ondelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('num_Parent')
                  ->references('num_Parent')
                  ->on('parents')
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
        Schema::table('etudiants', function (Blueprint $table) {
            $table->dropForeign('etudiants_user_id_foreign');
            $table->dropForeign('etudiants_num_Parent_foreign');
        });
    }
}
