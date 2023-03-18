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
        Schema::create('a_collectifs', function (Blueprint $table) {
            $table->id();
            $table->integer('maximum_number_people');
            $table->integer('current_number_people');
            $table->string('location');
            $table->foreignId('annonce_id')->constrained()->onDelete('cascade');
            $table->foreignId('formateur_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('a_collectifs');
    }
};
