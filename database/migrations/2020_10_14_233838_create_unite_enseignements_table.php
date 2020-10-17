<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniteEnseignementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unite_enseignements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->unsignedBigInteger('salle_id');
            $table->string('code');
            $table->string('module');
            $table->string('Competences_visees');
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
        Schema::dropIfExists('unite_enseignements');
    }
}
