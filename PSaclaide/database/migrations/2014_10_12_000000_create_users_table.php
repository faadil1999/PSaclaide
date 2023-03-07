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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();   
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('studyYear')->nullable();
            $table->string('speciality')->nullable();
            $table->boolean('isTeacher')->nullable();
            $table->integer('nbCoursesGiven')->nullable();
            $table->integer('nbCoursesReceived')->nullable();
            $table->integer('sumGrades')->nullable();
            $table->float('avgGrades')->nullable();
            $table->float('balance')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreignId('departement_id')->constrained()->onDelete('cascade');
           // $table->foreign('departement_id')->references('id')->on('departements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
