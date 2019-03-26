<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Puertos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puertos', function (Blueprint $table) {
            $table->integer('id_switch')->unsigned()->index();;
            $table->string('interface');
            $table->string('description');
            $table->string('vlan');
            $table->string('roseta');
            $table->foreign('id_switch')->references('id')->on('switches')->onDelete('cascade')->onUpdate('cascade');
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
