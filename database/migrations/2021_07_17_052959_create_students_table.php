<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('name');
            $table->string('surname');
            $table->string('password');
            $table->string('mail')->unique();
            $table->string('commune');
            $table->string('college');
            $table->string('course');
            $table->integer('age');
            $table->timestamp('registration_date')->nullable();;
            $table->integer('role');
            $table->string('pseudonym');
            $table->integer('status');
            $table->integer('deleted');
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
        Schema::dropIfExists('students');
    }
}
