@extends('admin.layouts.default')

@section('template_title')
    Adicionar Processo
@endsection

@section('content')
    <!-- begin page-header -->
    <h1 class="page-header">Cadastrar Processo <small>Informe todos os campos com (*) será importante para geração dos documentos!</small></h1>
    <!-- end page-header -->

@includeif('partials.errors')
    <form method="POST" action="{{ route('processos.store') }}"  role="form" enctype="multipart/form-data">
        @csrf
        @include('admin.processo.form')

        <button type="submit" class="btn btn-primary">CADASTRAR PROCESSO</button>
    </form>
    <div class="float-right">
        <a class="btn btn-primary" href="{{ route('admin.processos.index') }}"> VOLTAR</a>
    </div>
@endsection
