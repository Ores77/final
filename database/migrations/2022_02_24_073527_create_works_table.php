<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vardas');
            $table->string('pavarde');
            $table->string('miestas');
            $table->string('servisas');
            $table->string('image');
            $table->timestamps();
        });
        
        Schema::create('miestas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('miestas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}
