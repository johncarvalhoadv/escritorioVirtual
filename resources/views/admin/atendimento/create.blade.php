@extends('layouts.default')

@section('template_title') 
    Adicionar Atendimento
@endsection

@section('content')
    <!-- begin page-header -->
    <h1 class="page-header">Editar/Modificar Atendimento <small>Informe todos os campos com (*) será importante para geração dos documentos!</small></h1>
    <!-- end page-header -->

@includeif('partials.errors')   
    <form method="POST" action="{{ route('atendimentos.store') }}"  role="form" enctype="multipart/form-data">
        @csrf 
        @include('atendimento.form') 

        <button type="submit" class="btn btn-primary">Cadastrar Atendimento</button>
    </form>
    <div class="float-right">
        <a class="btn btn-primary" href="{{ route('atendimentos.index') }}"> Voltar</a>
    </div>       
@endsection
