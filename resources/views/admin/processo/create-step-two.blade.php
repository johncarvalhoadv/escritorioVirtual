@extends('layouts.default')

@section('template_title', 'Gerenciador de Clientes')

@push('css')
	<link href="/assets/plugins/parsleyjs/src/parsley.css" rel="stylesheet" />
	<link href="/assets/plugins/smartwizard/dist/css/smart_wizard.css" rel="stylesheet" />
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('clientes.create.step.two.post') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">PASSO 2: INFORMAÇÕES ADICIONAIS</div>
  
                    <div class="card-body">
  
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
  
<div class="row">

<!-- DPVAT -->
  
<div class="col-md-4 col-xs-4">
    <div class="form-group">
    <label for="dpvat">Cliente DPVAT?</label>  
        <select class="form-control" id="dpvat" data-size="5" data-live-search="true" data-width="100%" name="dpvat" required> 
                 
                <option value="SIM">SIM</option>
                <option value="NAO" selected="selected">NÃO</option> 
        </select>
	</div>
  </div> 
<div class="col-md-4 col-xs-4">
    <div class="form-group">
      <label for="cnpj">CNPJ</label> 
		<input type="text" name="cnpj" value="{{ $cliente->cnpj ?? '' }}" placeholder="CNPJ Opcional" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
    </div>
  </div>
 
  <div class="col-md-4 col-xs-4">
    <div class="form-group">
      <label for="honorario_inicial">Honorários Iniciais R$ e Por Extenso:</label>
      <input type="text" name="honorario_inicial" value="{{ $cliente->honorario_inicial ?? '' }}" placeholder="Honorários Iniciais R$ e Por Extenso:" data-parsley-required="true" class="form-control" />
    </div>
  </div>
   
  <div class="col-md-4 col-xs-4">
    <div class="form-group">
      <label for="porcentagem_geral">% Porcentagem geral da Ação:</label>
      
      <input type="text" name="porcentagem_geral" value="{{ $cliente->porcentagem_geral ?? '' }}" placeholder="% Porcentagem geral da Ação:" data-parsley-required="true" class="form-control" />

    
    </div>
  </div>

  <div class="col-md-4 col-xs-4">
    <div class="form-group">
      <label for="observacao">Observações:</label>
      
      <textarea id="observacao" name="observacao" value="{{ $cliente->observacao ?? '' }}"
          rows="5" cols="33" class="form-control">  </textarea> 
    </div>
  </div>
  
  <div class="col-md-4 col-xs-4">
    <div class="form-group">
      <label for="resumo_acao">Resumo da Ação:</label>
      
      <textarea id="resumo_acao" name="resumo_acao" value="{{ $cliente->resumo_acao ?? '' }}"
          rows="5" cols="33" class="form-control">  </textarea> 
    </div>
  </div>
</div>

<!--DPVAT FORM-->
<div class="row SIM box">
<div class="col-md-4 col-xs-4">
    <div class="form-group">
      <label for="contabancaria">Conta Bancária:</label> 
        <input type="text" name="contabancaria" value="{{ $cliente->contabancaria ?? '' }}" placeholder="Conta Bancária" data-parsley-group="step-2" data-parsley-required="true" class="form-control"  />
	</div>
  </div>
 
  <div class="col-md-6 col-xs-6">
    <div class="form-group">
      <label for="porcentagem">PORCENTAGEM % COBRADA DPVAT:</label>
      <input type="text" name="porcentagem" value="{{ $cliente->porcentagem_dpvat ?? '' }}" placeholder="PORCENTAGEM % COBRADA DPVAT" data-parsley-group="step-2" data-parsley-required="true" class="form-control"  />
	
	</div>
  </div>
   
  <!--next--> 
</div>
<!--FIM DPVAT FORM -->
 
</div>
</div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('clientes.create.step.one') }}" class="btn btn-danger pull-right">Anterior</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Próximo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script> 


$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>

@endpush

@endsection