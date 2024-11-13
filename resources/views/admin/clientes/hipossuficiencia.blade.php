@extends('admin.layouts.new_docprocuracao')

@section('content')
<div class="marca_agua"> </div>
<div class="tituloDoc"> DECLARAÇÃO DE HIPOSSUFICIÊNCIA</div>
<div class="corpo_hipossuficiente">
    <div id="hipossuficiente" style="">
    <strong class="strongtitulo">&#160;&#160;&#160;HIPOSSUFICIENTE&#160;&#160;&#160;</strong>
    <div class="texto_hipossuficiente">
    <!-- NOME OUTORGANTE -->
    <strong>@if ($cliente->nome!=null){{$cliente->nome}}@else não possui @endif</strong>, pessoa física,
    <!-- nacionalidade -->
    @if($cliente->nacionalidade!=null){{$cliente->nacionalidade}}@else <span>não possui</span>@endif,
    <!-- estado civil -->
    @if($cliente->estadocivil!=null){{$cliente->estadocivil}}@else <span>não possui</span>@endif,
    <!-- Profissao -->
    @if($cliente->profissao!=null){{$cliente->profissao}}@else <span>não possui</span>@endif,
    <!-- CPF -->
    portador(a) do CPF nº @if ($cliente->cpf != null){{$cliente->cpf}}@else<span>não possui</span>@endif,
    <!-- RG -->
    RG nº @if ($cliente->rg != null){{$cliente->rg}}@else<span>não possui</span>@endif,
    <!-- EMAIL -->
    endereço eletrônico: @if ($cliente->email != null){{$cliente->email}}@else<span>não possui</span>@endif,
    <!-- ENDEREÇO -->
    residente e domiciliado(a) na
    @if ($cliente->endereco != null){{$cliente->endereco}}@else<span>não possui</span>@endif,
    <!-- BAIRRO -->
    @if ($cliente->bairro != null){{$cliente->bairro}}@else<span>não possui</span>@endif,
    <!-- CIDADE -->
    @if ($cliente->cidade != null){{$cliente->cidades->cidade}}@else<span>não possui</span>@endif–
    <!-- ESTADO -->
    @if ($cliente->estado!=null){{$cliente->estados->estado}}@else<span>não possui</span>@endif, CEP:
    <!-- CEP -->
    @if ($cliente->cep!=null){{$cliente->cep}}@else<span>não possui</span>@endif.
    </div>
    </div>
    </div>
</div>
    <div id="declaracaoHipo">
         <div class="texto_declaracaoHipo">
         <strong>DECLARO</strong>, para todos os fins de direito e sob as penas da lei, que não tenho condições
          de arcar com as despesas inerentes ao presente processo, sem prejuízo do meu sustento
          e de minha família, necessitando, portanto, da Gratuidade da Justiça, nos termos do art.
          98 e seguintes da Lei 13.105/2015 (Código de Processo Civil). ciente de que pela falsa
          declaração de pobreza o declarante responde civil, penal e administrativamente, de
          conformidade com a legislação vigente. Requeiro, ainda, que o benefício abranja a todos
          os atos do processo.
        </div>
     </div>
    <div id="localData">
    <!--CIDADE -->
    @if ($cliente->cidade!=null){{$cliente->cidades->cidade}}@else<span>não possui</span>@endif -
    <!-- ESTADO -->
    @if ($cliente->estado!=null){{$cliente->estados->estado}}@else<span>não possui</span>@endif,
    <!-- DATA -->
    {{ \Carbon\Carbon::now()->translatedFormat('l j F Y') }}.
    </div>

    <div id="assinaturaCliente">
    <hr>
    <p class="maiusculo">@if ($cliente->nome!=null){{$cliente->nome}}@else não possui @endif</p>
    <p class="maiusculo">CPF nº @if ($cliente->cpf != null){{$cliente->cpf}}@else<span>não possui</span>@endif</p>
</div>


</div>
    @endsection
    <!-- {{ var_dump($cliente) }}
                    <th scope="row">{{  $cliente->id }}</th>
                    <td> {{ $cliente->nome }}</td>
                    <td>{{  $cliente->endereco }}</td>
                    <td> {{ $cliente->telefone }}</td>
                    <td> {{ $cliente->profissao}} </td> -->





