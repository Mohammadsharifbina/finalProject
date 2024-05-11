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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Father');
            $table->string('email')->unique();
            $table->integer('age');
            $table->string('image');
            $table->string('str_date');
            $table->string('gender');
            $table->foreignId('department_id')->constrained();
            $table->foreignId('cllass_id')->constrained();
            $table->foreignId('semester_id')->constrained();
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
};
