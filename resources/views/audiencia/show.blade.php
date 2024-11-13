@extends('admin.layouts.default')

@section('template_title')
    {{ $audiencia->name ?? __('Show') . " " . __('Audiencia') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Audiencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('audiencias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Descricao:</strong>
                                    {{ $audiencia->descricao }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Data:</strong>
                                    {{ $audiencia->data }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hora:</strong>
                                    {{ $audiencia->hora }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Processo:</strong>
                                    {{ $audiencia->id_processo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
