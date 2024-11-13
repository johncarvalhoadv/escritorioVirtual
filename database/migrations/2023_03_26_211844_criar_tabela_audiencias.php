<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaAudiencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audiencias', function (Blueprint $table) {
            $table->id(); 
            $table->string('descricao', 255)->nullable(); 
            $table->string('data')->nullable();
            $table->string('hora')->nullable(); 
            $table->string('id_processo')->nullable();  
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
        Schema::dropIfExists('audiencias');
    }
}
