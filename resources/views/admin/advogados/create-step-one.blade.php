@extends('layouts.default')

@section('template_title', 'Gerenciador de Advogados')

@push('css')
	<link href="/assets/plugins/parsleyjs/src/parsley.css" rel="stylesheet" />
	<link href="/assets/plugins/smartwizard/dist/css/smart_wizard.css" rel="stylesheet" />
    <link href="/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Adicionar um novo Advogado <small>Informe todos os campos com (*) será importante para geração dos documentos!</small></h1>
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
	         
			 
 		


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Opa!</strong> Houve alguns problemas com seu cadastro.<br><br>
        <ul> 
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<div class="container">
     
			<!-- begin wizard-step -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('advogados.create.step.one.post') }}" method="POST" name="form-wizard" class="form-control-with-bg">
                @csrf
  
                <div class="card">
                    <div class="card-header">PASSO 1: INFORMAÇÕES BÁSICAS DO ADVOGADO 
						<div class="pull-right" style="margin-top:-8px;">
			            	<a class="btn btn-danger" href="{{ route('advogados.index') }}"> Voltar</a>
			        	</div>
				</div>
  
                    <div class="card-body"> 

                <!-- begin passo-1 -->
<div id="step-1">
<div class="row">

  <div class="col-md-4 col-xs-4">
    <div class="form-group">
      <label for="nome">Nome Completo:</label> 
		<input type="text" name="nome" value="{{ $advogado->nome ?? '' }}" placeholder="Nome do advogado" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
    </div>
  </div>
  <div class="col-md-4 col-xs-4">
    <div class="form-group">
      <label for="nacionalidade">Nacionalidade:</label>
      <input type="text" name="nacionalidade" value="{{ $advogado->nacionalidade ?? '' }}" placeholder="Nacionalidade" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
    </div>
  </div>


  <div class="col-md-4 col-xs-4">
    <div class="form-group">
      <label for="estadocivil">Estado Civil:</label>
	  <select class="form-control" id="estadocivil" data-size="5" data-live-search="true" data-width="100%" name="estadocivil" required>
			<option disabled>Escolha uma opção</option> 
			<option value="Solteiro (a)" >Solteiro (a)</option>
			<option value="Casado (a)">Casado (a)</option>
			<option value="Viúvo (a)">Viúvo (a)</option>
			<option value="União Estável">União Estável</option>
		</select>
	</div>
  </div>

 
</div>
</div>
<!--next-->

<!--rOW FORM2-->
<div class="row">
  <div class="col-md-4 col-xs-4">
    <div class="form-group">
      <label for="profissao">Profissão:</label>
      <input type="text" name="profissao" value="{{ $advogado->profissao ?? '' }}" placeholder="Profissão" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
    </div>
  </div>
  <div class="col-md-6 col-xs-6">
    <div class="form-group">
      <label for="endereco">Endereço:</label>
      <input type="text" name="endereco" value="{{ $advogado->endereco ?? '' }}" placeholder="Endereço" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
	  </div>
  </div>
  	<div class="col-md-2 col-xs-2">
		<div class="form-group">
		<label for="bairro">Bairro:</label>
		<input type="text" name="bairro" value="{{ $advogado->bairro ?? '' }}" placeholder="Bairro" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
		</div> 
	</div>
  <!--next--> 
</div>
<!--FIM rOW FORM2-->

<!--rOW FORM3-->
<div class="row">
<div class="col-md-4 col-xs-4">
    <div class="form-group">
      <label for="estado">Estado:</label>
	  <select class="form-control" id="estados" data-size="5" data-live-search="true" data-width="100%" name="estado" required>
       
		</select>
	</div>
  </div>




  <div class="col-md-6 col-xs-6">
    <div class="form-group">
      <label for="cidade">Cidade:</label>
	  <select class="form-control" id="cidades" data-size="5" data-live-search="true" data-width="100%" name="cidade" required>
       
		</select>
	</div>
  </div>
  
  	<div class="col-md-2 col-xs-2">
		<div class="form-group">
		<label for="cep">CEP:</label>
		<input type="text" name="cep" value="{{ $advogado->cep ?? '' }}" placeholder="Cep" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
		</div> 
	</div>
  <!--next--> 
</div>
<!--FIM rOW FORM3-->

<!--rOW FORM4-->
<div class="row">
  <div class="col-md-3 col-xs-3">
    <div class="form-group">
      <label for="rg">RG:</label>
	  <input type="text" name="rg" value="{{ $advogado->rg ?? '' }}" placeholder="RG / Orgão Expedidor" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
		
	</div>
  </div>
  <div class="col-md-3 col-xs-3">
    <div class="form-group">
      <label for="cpf">CPF:</label>
      <input type="text" name="cpf" value="{{ $advogado->cpf ?? '' }}" placeholder="Cpf" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
		
	</div>
  </div>
  	<div class="col-md-3 col-xs-3">
		<div class="form-group">
		<label for="telefone">Telefone:</label>
		<input type="text" name="telefone" value="{{ $advogado->telefone ?? '' }}" placeholder="Telefone" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
		</div> 
	</div>

	<div class="col-md-3 col-xs-3">
		<div class="form-group">
		<label for="celular">Celular:</label>
		<input type="text" name="celular" value="{{ $advogado->celular ?? '' }}" placeholder="Celular" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
		</div> 
	</div>
  <!--next--> 
</div>
<!--FIM rOW FORM4-->


<!--rOW FORM5-->
<div class="row">
  <div class="col-md-5 col-xs-5">
    <div class="form-group">
      <label for="email">Email do Advogado:</label>
	  <input type="text" name="email" value="{{ $advogado->email ?? '' }}" placeholder="E-mail" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
		
	</div>
  </div>


  <div class="col-md-5 col-xs-5">
    <div class="form-group">
      <label for="oab">OAB do Advogado:</label>
	  <input type="text" name="oab" value="{{ $advogado->oab ?? '' }}" placeholder="OAB" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
		
	</div>
  </div>


   
</div>
<!--FIM rOW FORM5-->
				<!-- end passo-1 -->
                            
                    </div>
  
                    <div class="card-footer text-right">
                        <button  class="btn btn-primary">Próximo</button>
                    </div>
                </div>


                 
            </form>


			 
        </div>
    </div>
</div>
 
 </div> 

 </div> 
@endsection

@push('scripts')
	<script src="/assets/plugins/parsleyjs/dist/parsley.js"></script>
	<script src="/assets/plugins/smartwizard/dist/js/jquery.smartWizard.js"></script>
	<script src="/assets/js/demo/form-wizards-validation.demo.js"></script> 

 <!-- Datepicker -->
	<script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="/assets/plugins/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	<script src="/assets/js/demo/form-plugins.demo.js"></script>
    
	<script>
		$(document).ready(function() {
			FormWizardValidation.init();
		});
		</script>
		<script>
        $(document).ready(function() {
			FormPlugins.init();
		});
	</script>
@endpush

 