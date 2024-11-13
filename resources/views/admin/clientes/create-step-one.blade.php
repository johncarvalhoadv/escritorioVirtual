@extends('admin.layouts.default')

@section('template_title', 'Gerenciador de Clientes')

@push('css')
    <link href="{{ asset('admin/plugins/parsleyjs/src/parsley.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" rel="stylesheet" />






    <script>



    </script>
@endpush

@section('content')

    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Adicionar um novo Cliente <small>Informe todos os campos com (*) será importante para geração
            dos documentos!</small></h1>
    <!-- end page-header -->

    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class=" ">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                        class="fa fa-minus"></i></a>
            </div>
        </div>
        <div class="panel-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Opa!</strong> Houve alguns problemas com seu cadastro.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="container">

                <!-- begin wizard-step -->
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <form action="{{ route('clientes.create.step.one.post') }}" method="POST" name="form-wizard"
                              class="form-control-with-bg">
                            @csrf

                            <div class="card">
                                <div class="card-header">PASSO 1: INFORMAÇÕES BÁSICAS DO CLIENTE
                                    <div class="pull-right" style="margin-top:-8px;">
                                        <a class="btn btn-danger" href="{{ route('clientes.index') }}"> Voltar</a>
                                    </div>

                                </div>

                                <div class="card-body">

                                    <!-- begin passo-1 -->
                                    <div id="step-1">
                                        <div class="row">

                                            <div class="col-md-4 col-xs-4">
                                                <div class="form-group">
                                                    <label for="nome">Nome Completo:</label>
                                                    <input type="text" name="nome" value="{{ $cliente->nome ?? '' }}" placeholder="Nome do cliente"
                                                           data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-xs-2">
                                                <div class="form-group">
                                                    <label for="sexo">Sexo:</label>
                                                    <select class="form-control" id="sexo" data-size="5" data-live-search="true" data-width="100%"
                                                            name="sexo" required>
                                                        <option disabled>Escolha uma opção</option>
                                                        <option value="Homem" selected>Masculino</option>
                                                        <option value="Muher">Feminino</option>
                                                        <option value="Outros">Outros</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-xs-3">
                                                <div class="form-group">
                                                    <label for="nacionalidade">Nacionalidade:</label>
                                                    <input type="text" name="nacionalidade" value="brasileiro" placeholder="Nacionalidade"
                                                           data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
                                                </div>
                                            </div>


                                            <div class="col-md-3 col-xs-3">
                                                <div class="form-group">
                                                    <label for="estadocivil">Estado Civil:</label>
                                                    <select class="form-control" id="estadocivil" data-size="5" data-live-search="true"
                                                            data-width="100%" name="estadocivil" required>
                                                        <option disabled>Escolha uma opção</option>
                                                        <option value="Solteiro (a)" selected>Solteiro (a)</option>
                                                        <option value="Casado (a)">Casado (a)</option>
                                                        <option value="Viúvo (a)">Viúvo (a)</option>
                                                        <option value="União Estável">União Estável</option>
                                                        <option value="Separado (a)">Separado (a)</option>
                                                        <option value="Divorciado (a)">Divorciado (a)</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <!--next-->

                                    <!--rOW FORM2-->
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">
                                            <div class="form-group">
                                                <label for="profissao">Profissão:</label>
                                                <input type="text" name="profissao" value="{{ $cliente->profissao ?? '' }}"
                                                       placeholder="Profissão" data-parsley-group="step-1" data-parsley-required="true"
                                                       class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div class="form-group">
                                                <label for="endereco">Endereço:</label>
                                                <input type="text" name="endereco" value="{{ $cliente->endereco ?? '' }}" placeholder="Endereço"
                                                       data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-xs-2">
                                            <div class="form-group">
                                                <label for="bairro">Bairro:</label>
                                                <input type="text" name="bairro" value="{{ $cliente->bairro ?? '' }}" placeholder="Bairro"
                                                       data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
                                            </div>
                                        </div>
                                        <!--next-->
                                    </div>
                                    <!--FIM rOW FORM2-->

                                    <!--rOW FORM3-->
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4">
                                            <div class="form-group">
                                                {!! html()
                                                    ->label('Estados:', 'estado') !!}

                                                {!! html()
                                                    ->select('estado', $estados)
                                                    ->class('form-control')
                                                    ->name('estado')
                                                    ->attributes([
                                                        'data-width' => '100%',
                                                        'data-size' => '5',
                                                        'data-live-search' => 'true',
                                                        'id' => 'estados'
                                                    ]) !!}

                                            </div>
                                        </div>



                                        <div class="col-md-6 col-xs-6">
                                            <div class="form-group">

                                                <div class="form-group">
                                                    {!! html()
                                                        ->label('Cidades:', 'cidade') !!}

                                                    {!! html()
                                                        ->select('cidade', [])
                                                        ->class('form-control')
                                                        ->name('cidade')
                                                        ->attributes([
                                                            'data-width' => '100%',
                                                            'data-size' => '5',
                                                            'data-live-search' => 'true',
                                                            'id' => 'cidades'
                                                        ]) !!}
                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-md-2 col-xs-2">
                                            <div class="form-group">
                                                <label for="cep">CEP:</label>
                                                <input type="text" name="cep" value="{{ $cliente->cep ?? '' }}" placeholder="Cep"
                                                       data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
                                            </div>
                                        </div>
                                        <!--next-->
                                    </div>
                                    <!--FIM rOW FORM3-->

                                    <!--rOW FORM4-->
                                    <div class="row">
                                        <div class="col-md-3 col-xs-3">
                                            <div class="form-group">
                                                <label for="rg">RG:</label>
                                                <input type="text" name="rg" value="{{ $cliente->rg ?? '' }}" placeholder="RG / Orgão Expedidor"
                                                       data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />

                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-3">
                                            <div class="form-group">
                                                <label for="cpf">CPF:</label>
                                                <input type="text" name="cpf" value="{{ $cliente->cpf ?? '' }}" placeholder="Cpf"
                                                       data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-xs-3">
                                            <div class="form-group">
                                                <label for="nascimento">Data de Nascimento:</label>
                                                <input type="text" id="datepicker-default" name="nascimento" value="" placeholder="Data de Nascimento"
                                                       data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />

                                            </div>



                                        </div>




                                        <div class="col-md-3 col-xs-3">
                                            <div class="form-group">
                                                <label for="telefone">Telefone:</label>
                                                <input type="text" name="telefone" value="{{ $cliente->telefone ?? '' }}" placeholder="Telefone"
                                                       data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
                                            </div>
                                        </div>


                                        <!--next-->
                                    </div>
                                    <!--FIM rOW FORM4-->


                                    <!--rOW FORM5-->
                                    <div class="row">

                                        <div class="col-md-3 col-xs-3">
                                            <div class="form-group">
                                                <label for="celular">Celular:</label>
                                                <input type="text" id="masked-input-phone" name="celular" value="{{ $cliente->celular ?? '' }}"
                                                       placeholder="Celular" data-parsley-group="step-1" data-parsley-required="true"
                                                       class="form-control" required />

                                            </div>
                                        </div>


                                        <div class="col-md-2 col-xs-2">
                                            <div class="form-group">
                                                <label for="email">Email do Cliente:</label>
                                                <input type="text" name="email" value="{{ $cliente->email ?? '' }}" placeholder="E-mail"
                                                       data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="advogado">Advogado Principal:</label>
                                                {!! html()
                                                ->select('id_advogado', $advogados)
                                                ->class('form-control') !!}

                                            </div>
                                        </div>



                                    </div>




                                    <!--FIM rOW FORM5-->
                                    <!-- end passo-1 -->

                                </div>

                                <div class="card-footer text-right">
                                    <button class="btn themebgbuttom btn-primary">Próximo</button>
                                </div>
                            </div>



                        </form>



                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@push('scripts')

    <script src="{{ asset('admin/plugins/parsleyjs/dist/parsley.js') }}"></script>
    <script src="{{ asset('admin/plugins/smartwizard/dist/js/jquery.smartWizard.js') }}"></script>
    <script src="{{ asset('admin/js/demo/form-wizards-validation.demo.js') }}"></script>

    <!-- Datepicker -->
    <script src="{{ asset('admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('admin/plugins/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('admin/js/demo/form-plugins.demo.js') }}"></script>

    <script>
        $(document).ready(function() {
            FormPlugins.init();
        });
        $('#datepicker-default').datepicker({
            format: 'dd-mm-yyyy',
            language: 'pt-BR',
            todayHighlight: true,
            timepicker:false,
            autoclose: true,

        });

    </script>


    <!-- Estados * Cidades -->
    <script type="text/javascript">
        $('select[name=estado]').change(function () {
            var idEstado = $(this).val();

            $.get('/get-cidades/' + idEstado, function (cidades) {
                $('select[name=cidade]').empty();
                $.each(cidades, function (key, value) {
                    $('select[name=cidade]').append('<option value=' + value.id + '>' + value.cidade + '</option>');
                });
            });
        });

    </script>

@endpush
