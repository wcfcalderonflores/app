<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->string('last_name',60);
            $table->enum('type_document',['01','04','07']); // 01=dni;04=carnet ext; 06=ruc; 07=pasaporte
            $table->string('number_document',16)->unique();
            $table->date('fecha_nac');
            $table->date('fecha_ingreso');
            $table->string('direccion_act',200);
            $table->string('correo',50);
            $table->string('celular',12);
            $table->enum('type_contract',['01','02','03']);
            $table->enum('type_personal',['01','02','03']);
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('sub_area_id');
            $table->string('image',80)->nullable();
            $table->string('state',1)->default('1');
            $table->timestamps();

            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('sub_area_id')->references('id')->on('sub_areas');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
