<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToParcoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parcours', function (Blueprint $table) {
            $table->CHAR('id_Classe',15);

            $table->foreign('id_Classe')
                  ->references('id_Classe')
                  ->on('classes')
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
        Schema::table('parcours', function (Blueprint $table) {
            $table->dropForeign('parcours_id_Classe_foreign');
        });
    }
}
