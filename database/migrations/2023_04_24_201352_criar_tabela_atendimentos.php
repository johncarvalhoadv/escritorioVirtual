<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaAtendimentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id(); 
            $table->string('title', 255)->nullable(); 
            $table->string('start')->nullable();
            $table->string('end')->nullable();
            $table->string('data')->nullable();
            $table->string('hora')->nullable();  
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
        Schema::dropIfExists('atendimentos');
    }
}
