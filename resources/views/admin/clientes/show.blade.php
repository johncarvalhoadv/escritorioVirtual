@extends('admin.layouts.default')

@section('template_title', 'Gerenciador de Clientes')

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item active">Visualizar Cliente</li>

	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Gerenciador de Clientes <small> Visualização </small></h1>
	<!-- end page-header -->

	<!-- begin panel -->
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>

				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

			</div>
			<h4 class="panel-title">Visualizar Cliente {{$cliente->nome}}</h4>
		</div>
		 <div class="panel-body">
		 <div class="row pull-right">
			    <div class="col-lg-12 margin-tb">

			        <div class="pull-right">
			            <a class="btn btn-danger" href="{{ route('clientes.index') }}"> Voltar</a>
			        </div>
			    </div>
			</div>
					<!-- BOTÕES PARA GERAR PDF CLIENTE -->
		 			<a href="{{ route('clientes.gerarProcuracao',$cliente->id) }}" class="btn btn-lime btn-lg m-r-5 m-b-5">PROCURAÇÃO</a>
					<a href="{{ route('clientes.gerarHipossuficiencia',$cliente->id) }}" class="btn btn-danger btn-lg m-r-5 m-b-5">HIPOSSUFICIÊNCIA</a>
					<a href="javascript:;" class="btn btn-warning btn-lg m-r-5 m-b-5">CONTRATO</a>




		<div class="card-body">

  <table class="table">
	  <tr>
		  <td>NOME DO CLIENTE:</td>
		  <td><strong>{{$cliente->nome}}</strong></td>

		  <td>NACIONALIDADE:</td>
		  <td><strong>{{$cliente->nacionalidade}}</strong></td>

		  <td>ESTADO CIVIL:</td>
		  <td><strong>{{$cliente->estadocivil}}</strong></td>
	  </tr>

	  <tr>
		  <td>ENDEREÇO:</td>
		  <td><strong>{{$cliente->endereco}}</strong></td>

		  <td>BAIRRO:</td>
		  <td><strong>{{$cliente->bairro}}</strong></td>

		  <td>CIDADE:</td>
		  <td><strong>{{$cliente->cidades->cidade}}</strong></td>
	  </tr>

	  <tr>
		  <td>ESTADO:</td>
		  <td><strong>{{$cliente->estados->estado}}</strong></td>

		  <td>CEP:</td>
		  <td><strong>{{$cliente->cep}}</strong></td>

		  <td>RG:</td>
		  <td><strong>{{$cliente->rg}}</strong></td>
	  </tr>

	  <tr>
		  <td>CPF:</td>
		  <td><strong>{{$cliente->cpf}}</strong></td>

		  <td>CNPJ:</td>
		  <td><strong>{{$cliente->cnpj}}</strong></td>

		  <td>TELEFONE:</td>
		  <td><strong>{{$cliente->telefone}}</strong></td>
	  </tr>
	  <tr>
		  <td>CELULAR:</td>
		  <td><strong>{{$cliente->celular}}</strong></td>

		  <td>EMAIL:</td>
		  <td><strong>{{$cliente->email}}</strong></td>

		  <td>OBSERVAÇÕES:</td>
		  <td><strong>{{$cliente->observacao}}</strong></td>
	  </tr>
  </table>
</div>
		</div>
	</div>
	<!-- end panel -->
@endsection
