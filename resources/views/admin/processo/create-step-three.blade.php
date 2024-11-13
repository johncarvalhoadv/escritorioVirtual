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
            <form action="{{ route('clientes.create.step.three.post') }}" method="post" >
                {{ csrf_field() }}
            <div class="card">
                    <div class="card-header">PASSO 3: REVISÃO DOS DADOS INFORMADOS</div>
   
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
                                    <td><strong>{{$cliente->cidade}}</strong></td>
                                </tr>

                                <tr>
                                    <td>ESTADO:</td>
                                    <td><strong>{{$cliente->estado}}</strong></td>

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
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('clientes.create.step.two') }}" class="btn btn-danger pull-right">Anterior</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">CADASTRAR CLIENTE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection