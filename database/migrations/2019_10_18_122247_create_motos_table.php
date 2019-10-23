<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('cylindrical');
            $table->text('description');
            $table->integer('passengers');
            $table->string('plate_number');
            $table->string('color');
            $table->string('model');
            $table->string('type');
            $table->integer('year');
            $table->double('maximun_weight');
            $table->string('address');
            $table->string('address_location');
            $table->double('value');
            $table->integer('id_location_origin');
            $table->integer('id_owner');
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
        Schema::dropIfExists('moto');
    }
}
