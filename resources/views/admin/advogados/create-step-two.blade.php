@extends('layouts.default')

@section('template_title', 'Gerenciador de Advogados')

@push('css')
	<link href="/assets/plugins/parsleyjs/src/parsley.css" rel="stylesheet" />
	<link href="/assets/plugins/smartwizard/dist/css/smart_wizard.css" rel="stylesheet" />
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('advogados.create.step.two.post') }}" method="POST">
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
<div class="col-md-4 col-xs-4">
    <div class="form-group">
      <label for="cnpj">CNPJ</label> 
		<input type="text" name="cnpj" value="{{ $advogado->cnpj ?? '' }}" placeholder="CNPJ Opcional" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
    </div>
  </div>
  <div class="col-md-4 col-xs-4">
    <div class="form-group">
      <label for="observacao">Observações:</label>
      
      <textarea id="observacao" name="observacao" value="{{ $advogado->observacao ?? '' }}"
          rows="5" cols="33" class="form-control">  </textarea>

    
    </div>
  </div>
 
</div>
</div>
  
                         
  
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('advogados.create.step.one') }}" class="btn btn-danger pull-right">Anterior</a>
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
@endsection