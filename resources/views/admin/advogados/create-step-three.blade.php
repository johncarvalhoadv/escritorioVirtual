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
            <form action="{{ route('advogados.create.step.three.post') }}" method="post" >
                {{ csrf_field() }}
            <div class="card">
                    <div class="card-header">PASSO 3: REVISÃO DOS DADOS INFORMADOS</div>
   
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
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('advogados.create.step.two') }}" class="btn btn-danger pull-right">Anterior</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">CADASTRAR ADVOGADO</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection