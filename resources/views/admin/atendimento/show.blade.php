@extends('layouts.default')
 
@section('template_title')
    Detalhamento do Atendimento
@endsection


@section('content')

<!-- begin page-header -->
<div class="row"><h1 class="page-header">Detalhamento do Atendimento</h1></div>
<div class="row"><h5>Abaixo estão todas informações relevantes do Atendimento!</h5></div>
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
                            <a class="btn btn-primary" href="{{ route('atendimentos.index') }}"> Voltar</a>
                        </div>
                </div>

                <div class="card-body">
                    
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $atendimento->title }}
                        </div>
                        <div class="form-group">
                            <strong>Start:</strong>
                            {{ $atendimento->start }}
                        </div>
                        <div class="form-group">
                            <strong>End:</strong>
                            {{ $atendimento->end }}
                        </div>
                        <div class="form-group">
                            <strong>Data:</strong>
                            {{ $atendimento->data }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $atendimento->hora }}
                        </div>

                </div>

            </div>

            </div>

        </div> 
</div>
@endsection     