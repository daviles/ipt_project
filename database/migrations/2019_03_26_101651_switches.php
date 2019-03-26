<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Switches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('switches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stack');
            $table->string('ubicacion');
            $table->integer('sede')->unsigned()->index(); ;            
            $table->string('ip');
            $table->integer('puertos');
            $table->string('poe');
            $table->foreign('sede')->references('id')->on('sede')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
