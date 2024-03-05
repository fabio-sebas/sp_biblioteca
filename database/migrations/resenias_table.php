<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReseniasTable extends Migration
{
    public function up()
    {
        Schema::create('resenias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained();
            $table->foreignId('libro_id')->constrained();
            $table->text('contenido');
            $table->integer('valoracion')->nullable(); 
            $table->date('fecha_publicacion')->nullable(); 
            $table->boolean('recomendado')->nullable(); 
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('resenias');
    }
}
