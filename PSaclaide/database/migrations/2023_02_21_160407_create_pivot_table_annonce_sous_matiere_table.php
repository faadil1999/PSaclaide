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
        Schema::create('annonce_sous_matiere', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('annonce_id');
            $table->foreign('annonce_id')->references('id')->on('annonces');
            $table->unsignedBigInteger('sous_matiere_id');
            $table->foreign('sous_matiere_id')->references('id')->on('sous_matieres');

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
        Schema::dropIfExists('annonce_sous_matiere');
    }
};
