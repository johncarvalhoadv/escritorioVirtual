<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaAdvogados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advogados', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 80)->unique();
            $table->string('profissao', 80)->nullable();
            $table->string('estadocivil', 80)->nullable();
            $table->string('nacionalidade', 80);
            $table->string('email', 80)->nullable();
            $table->string('endereco', 80)->nullable();
            $table->string('bairro', 80)->nullable();
            $table->string('cidade', 80)->nullable();
            $table->string('estado', 80)->nullable();
            $table->string('cep', 80)->nullable();
            $table->string('rg', 80)->unique();
            $table->string('cpf', 80)->unique();
            $table->string('cnpj', 80)->nullable();
            $table->string('oab', 80)->nullable();
            $table->string('telefone', 80)->nullable();
            $table->string('celular', 80)->nullable(); 
            $table->text('observacao', 255)->nullable();
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
        Schema::dropIfExists('advogados');
    }
}
