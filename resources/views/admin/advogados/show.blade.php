@extends('layouts.default')

@section('template_title', 'Gerenciador de Advogados')

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li> 
		<li class="breadcrumb-item active">Visualizar Advogado</li>
		
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Gerenciador de Advogados <small> Visualização </small></h1>
	<!-- end page-header -->
	
	<!-- begin panel -->
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
 
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				 
			</div>
			<h2 class="panel-title">Visualizar Advogado {{$advogado->nome}} - OAB/{{$advogado->oab}}</h2>
		</div>  	
		 <div class="panel-body">
		 <div class="row pull-right">
			    <div class="col-lg-12 margin-tb">
			        
			        <div class="pull-right">
			            <a class="btn btn-danger" href="{{ route('advogados.index') }}"> Voltar</a>
			        </div>
			    </div>
			</div>
<div class="card-body">
  
  <table class="table">
	  <tr>
		  <td>NOME DO ADVOGADO:</td>
		  <td><strong>{{$advogado->nome}}</strong></td>

		  <td>NACIONALIDADE:</td>
		  <td><strong>{{$advogado->nacionalidade}}</strong></td>

		  <td>ESTADO CIVIL:</td>
		  <td><strong>{{$advogado->estadocivil}}</strong></td>
	  </tr>
	
	  <tr>
		  <td>ENDEREÇO:</td>
		  <td><strong>{{$advogado->endereco}}</strong></td>

		  <td>BAIRRO:</td>
		  <td><strong>{{$advogado->bairro}}</strong></td>
		  
		  <td>CIDADE:</td>
		  <td><strong>{{$advogado->cidade}}</strong></td>
	  </tr>

	  <tr>
		  <td>ESTADO:</td>
		  <td><strong>{{$advogado->estado}}</strong></td>

		  <td>CEP:</td>
		  <td><strong>{{$advogado->cep}}</strong></td>
		  
		  <td>RG:</td>
		  <td><strong>{{$advogado->rg}}</strong></td>
	  </tr>
	  
	  <tr>
		  <td>CPF:</td>
		  <td><strong>{{$advogado->cpf}}</strong></td>

		  <td>CNPJ:</td>
		  <td><strong>{{$advogado->cnpj}}</strong></td>
		  
		  <td>TELEFONE:</td>
		  <td><strong>{{$advogado->telefone}}</strong></td>
	  </tr>
	  <tr>
		  <td>CELULAR:</td>
		  <td><strong>{{$advogado->celular}}</strong></td>

		  <td>EMAIL:</td>
		  <td><strong>{{$advogado->email}}</strong></td>
		  
		  <td>OBSERVAÇÕES:</td>
		  <td><strong>{{$advogado->observacao}}</strong></td>
	  </tr>
  </table>
</div>
		</div>
	</div>
	<!-- end panel -->
@endsection