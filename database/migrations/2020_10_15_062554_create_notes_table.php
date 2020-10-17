<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('note');
            $table->string('annee_scolaire');
            $table->unsignedBigInteger('unite_valeur_id');
            $table->unsignedInteger('etudiant_id');
            $table->integer('control_continu')->nullable();
            $table->integer('session_normale')->nullable();
            $table->integer('note_finale');
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
        Schema::dropIfExists('notes');
    }
}
