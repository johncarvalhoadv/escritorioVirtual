@extends('admin.layouts.default')

@section('template_title')
    {{ __('Create') }} Audiencia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Audiencia</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('audiencias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('audiencia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
