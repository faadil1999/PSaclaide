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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('author');
            $table->boolean('isAvailable');
            $table->boolean('isIndividual');
            $table->date('date');
            $table->time('heure');
            $table->string ('location');
            $table->unsignedBigInteger('matiere_id');
            $table->foreign('matiere_id')->references('id')->on('matieres');

            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            
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
        Schema::dropIfExists('annonces');
    }
};
