<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sexo')->nullable();
            $table->string('profissao')->nullable();
            $table->string('estadocivil')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('cep')->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->date('nascimento')->nullable();
            $table->string('email')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('observacao')->nullable();
            $table->string('dpvat')->nullable();
            $table->string('contabancaria')->nullable();
            $table->string('porcentagem_geral')->nullable();
            $table->string('porcentagem_dpvat')->nullable();
            $table->string('honorario_inicial')->nullable();
            $table->string('resumo_acao')->nullable();
            $table->string('forma_captacao')->nullable();
            $table->string('forma_pagamento')->nullable();
            $table->unsignedBigInteger('id_advogado');
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
        Schema::dropIfExists('clientes');
    }
}
