<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaProcessos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos', function (Blueprint $table) {
            $table->id(); 
            $table->string('status', 30)->nullable();
            $table->string('tipo', 50);
            $table->string('fase_processual', 180)->nullable();
            $table->string('numero_processo', 180)->nullable();
            $table->string('tipo_acao', 30);
            $table->string('tipo_cliente', 50); 
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')
            ->references('id')->on('clientes');
            
            $table->string('polo_ativo', 30);
            $table->string('polo_passivo', 30);
            $table->unsignedBigInteger('id_advogado');
            $table->foreign('id_advogado')
            ->references('id')->on('advogados');
            $table->string('valor_causa', 30);
            $table->string('valor_acordo', 30)->nullable();
            $table->string('valor_honorarios', 30);
            $table->string('porcentagem_honorarios', 30)->nullable();
            $table->string('valor_sucumbencia', 30)->nullable();
            $table->string('total_honorarios', 30)->nullable();
            $table->boolean('prazo_aberto');
            $table->string('data_prazo')->nullable();
            $table->string('instancia', 80);
            $table->string('comarca', 80);
            $table->string('vara', 80);
            $table->string('observacoes', 300)->nullable();
            $table->string('data_processoinicio')->nullable();
            $table->string('data_processofim')->nullable();
            $table->string('duracao_processo', 80)->nullable();
            $table->string('resultado_processo', 80)->nullable();
            $table->string('link_processo', 280)->nullable();
            $table->string('link_pastaprocesso', 280)->nullable();
            $table->timestamps();
        });

        //Schema::table('processos', function(Blueprint $table){
          //  $table->foreign('id_advogado')->references('id')->on('processos');
            //$table->foreign('id_cliente')->references('id')->on('processos');
        //});

       


    }

    /**
     * Reverse the migrations.->onDelete('cascade')
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processos');
       // Schema::table('processos', function(Blueprint $table){
            //$table->foreign('id_advogado')->references('id')->on('processos')->onDelete('cascade');
           // $table->foreign('id_cliente')->references('id')->on('processos')->onDelete('cascade');
        //});

        
    }
}
