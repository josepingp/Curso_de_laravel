<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // esta funcion contiene las instrucciones para crear la tabla
    public function up(): void
    {
        //Schema contiene todos los metodos necesarios para crear
        //objetos
        //Schema::create -> para crear una nueva tabla
        //Schema::table -> para modificar una tabala existente
        //Schema::dropIfExist -> para eliminar una tabla
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            //podemos encadenarle metudos para definir como sera el campo
            $table->string('title', 255);
            $table->string('description', 255)->nullable();//puede ser null
            $table->date('deadline');
            $table->boolean('done')->default(false);//default pone un valor por defecto
            // $table->integer('example');//esto seria un campo de enteros
            // $table->unsignedInteger('example');//esto seria un entero positivo
            // $table->bigInteger('example');//esto seria un entero grande
            // $table->unsignedBigInteger('example');//entero grande sin simbolo
            // $table->text('example');//texto
            // $table->float('example');//valores decimales
            // $table->double('example');//valores decimales
            // $table->enum('estate', ['DRAFT', 'PUBLISH', 'DELETE']);//esto seria un valor
            // //enumerado que solo admitiria los datos dados en el array
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

     //contine la informacion para poder tirar atras la migracion
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
