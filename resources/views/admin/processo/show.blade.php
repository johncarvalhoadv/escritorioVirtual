@extends('layouts.default')
 
@section('template_title')
    Detalhamento do Processo
@endsection


@section('content')

<!-- begin page-header -->
<div class="row"><h1 class="page-header">Detalhamento do Processo</h1></div>
<div class="row"><h5>Abaixo estão todas informações relevantes do Processo!</h5></div>
<!-- end page-header -->

<!-- begin panel -->
<div class="panel panel-inverse">
		<div class="panel-heading">
    			<div class=" ">
    				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a> 
    				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a> 
    			</div> 
		</div>
	<div class="panel-body">
 
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                     
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('processos.index') }}"> Voltar</a>
                        </div>
                </div>

                <div class="card-body">
                    
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $processo->status }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $processo->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Fase Processual:</strong>
                            {{ $processo->fase_processual }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Processo:</strong>
                            {{ $processo->numero_processo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Acao:</strong>
                            {{ $processo->tipo_acao }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Cliente:</strong>
                            {{ $processo->tipo_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $processo->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Polo Ativo:</strong>
                            {{ $processo->polo_ativo }}
                        </div>
                        <div class="form-group">
                            <strong>Polo Passivo:</strong>
                            {{ $processo->polo_passivo }}
                        </div>
                        <div class="form-group">
                            <strong>Id Advogado:</strong>
                            {{ $processo->id_advogado }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Causa:</strong>
                            {{ $processo->valor_causa }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Acordo:</strong>
                            {{ $processo->valor_acordo }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Honorarios:</strong>
                            {{ $processo->valor_honorarios }}
                        </div>
                        <div class="form-group">
                            <strong>Porcentagem Honorarios:</strong>
                            {{ $processo->porcentagem_honorarios }}
                        </div>
                        <div class="form-group">
                            <strong>Valor Sucumbencia:</strong>
                            {{ $processo->valor_sucumbencia }}
                        </div>
                        <div class="form-group">
                            <strong>Total Honorarios:</strong>
                            {{ $processo->total_honorarios }}
                        </div>
                        <div class="form-group">
                            <strong>Prazo Aberto:</strong>
                            {{ $processo->prazo_aberto }}
                        </div>
                        <div class="form-group">
                            <strong>Data Prazo:</strong>
                            {{ $processo->data_prazo }}
                        </div>
                        <div class="form-group">
                            <strong>Instancia:</strong>
                            {{ $processo->instancia }}
                        </div>
                        <div class="form-group">
                            <strong>Comarca:</strong>
                            {{ $processo->comarca }}
                        </div>
                        <div class="form-group">
                            <strong>Vara:</strong>
                            {{ $processo->vara }}
                        </div>
                        <div class="form-group">
                            <strong>Observacoes:</strong>
                            {{ $processo->observacoes }}
                        </div>
                        <div class="form-group">
                            <strong>Data Processoinicio:</strong>
                            {{ $processo->data_processoinicio }}
                        </div>
                        <div class="form-group">
                            <strong>Data Processofim:</strong>
                            {{ $processo->data_processofim }}
                        </div>
                        <div class="form-group">
                            <strong>Duracao Processo:</strong>
                            {{ $processo->duracao_processo }}
                        </div>
                        <div class="form-group">
                            <strong>Resultado Processo:</strong>
                            {{ $processo->resultado_processo }}
                        </div>
                        <div class="form-group">
                            <strong>Link Processo:</strong>
                            {{ $processo->link_processo }}
                        </div>
                        <div class="form-group">
                            <strong>Link Pastaprocesso:</strong>
                            {{ $processo->link_pastaprocesso }}
                        </div>

                </div>

            </div>

            </div>

        </div> 
</div>
@endsection     