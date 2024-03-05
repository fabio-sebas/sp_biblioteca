<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LibrosTable extends Migration
{
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->foreignId('autor_id')->constrained();
            $table->foreignId('categoria_id')->constrained();
            $table->string('isbn')->nullable(); 
            $table->string('editorial')->nullable(); 
            $table->string('estado')->nullable(); 
            $table->timestamps();
        });        
    }

    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
