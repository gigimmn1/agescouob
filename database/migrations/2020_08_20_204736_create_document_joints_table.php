<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentJointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_joints', function (Blueprint $table) {
            $table->increments('id_Document_Joint')->unique();
            $table->string('observations_Document_Joint');
            $table->CHAR('reference_Document_Joint',30);
            $table->CHAR('type_Document_Joint',30);
            $table->string('fichier_Document_Joint',100);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document_joints');
    }
}
