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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email_saclay')->unique();
            $table->string('first_name');
            $table->string('last_name');   
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('studyYear');
            $table->string('speciality');
            $table->boolean('isTeacher');
            $table->integer('nbCoursesGiven');
            $table->integer('nbCoursesReceived');
            $table->integer('sumGrades');
            $table->float('avgGrades');
            $table->float('balance');
            $table->rememberToken();
            $table->timestamps();

            $table->unsignedBigInteger('departement_id');
            $table->foreign('departement_id')->references('id')->on('departements');
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
