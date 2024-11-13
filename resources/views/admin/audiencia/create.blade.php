@extends('layouts.default')

@section('template_title') 
    Adicionar Audiencia
@endsection

@section('content')
    <!-- begin page-header -->
    <h1 class="page-header">Editar/Modificar Audiencia <small>Informe todos os campos com (*) será importante para geração dos documentos!</small></h1>
    <!-- end page-header -->

@includeif('partials.errors')   
    <form method="POST" action="{{ route('audiencias.store') }}"  role="form" enctype="multipart/form-data">
        @csrf 
        @include('audiencia.form') 

        <button type="submit" class="btn btn-primary">Cadastrar Audiencia</button>
    </form>
    <div class="float-right">
        <a class="btn btn-primary" href="{{ route('audiencias.index') }}"> Voltar</a>
    </div>       
@endsection
