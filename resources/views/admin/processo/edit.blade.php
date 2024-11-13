@extends('layouts.default')

@section('template_title') 
    Editar/Modificar Processo
@endsection

@section('content')
    <!-- begin page-header -->
    <h1 class="page-header">Editar/Modificar Processo: {{ $processo->numero_processo ?? '' }}
        <P><small>Informe todos os campos com (*) será importante para geração dos documentos!</small></P>
    </h1>
    Aqui {{ $processo->cliente_id ?? '' }}
    <!-- end page-header -->
@includeif('partials.errors')   

    <form method="POST" action="{{ route('processos.update', $processo->id) }}"  role="form" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        @csrf 
        @include('processo.form') 
        <button type="submit" class="btn btn-primary"> EDITAR PROCESSO </button>
    </form>
    
 <div class="float-right">
    <a class="btn btn-primary" href="{{ route('processos.index') }}"> VOLTAR</a>
</div>         
@endsection