<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::disableForeignKeyConstraints();
        Schema::create('sous_matieres', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('matiere_id');
            $table->foreign('matiere_id')->references('id')->on('matieres');

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
        Schema::dropIfExists('sous_matieres');
    }
};
