<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prenom');
            $table->string('nom');
            $table->string('email')->unique();
            $table->string('tel');
            $table->date('dateNaiss');
            $table->integer('classe_id')->unsigned();
            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('cascade'); //cascade supresion de etudiant en cas de suppresion de classe
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
        Schema::dropIfExists('etudiants');
        Schema::enableForeignKeyConstraints();

    }
}
