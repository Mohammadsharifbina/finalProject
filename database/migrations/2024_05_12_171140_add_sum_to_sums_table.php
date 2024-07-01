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
        Schema::table('sums', function (Blueprint $table) {
            $table->integer('sum')->nullable();


        });
        DB::statement('
        UPDATE sums SET sum=marks+credits
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sums', function (Blueprint $table) {
            //
        });
    }
};