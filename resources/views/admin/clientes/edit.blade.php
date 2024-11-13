@extends('admin.layouts.default')

@section('template_title', 'Modificar Cliente')

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Clientes</a></li>
		<li class="breadcrumb-item active">Editar</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">ATUALIZAÇÃO DE INFORMAÇÕES <small>do cliente {{ $cliente->nome ?? '' }}</small></h1>
	<!-- end page-header -->

	<!-- begin panel -->
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			</div>
			<h4 class="panel-title">Edição do Cliente {{ $cliente->nome ?? '' }}</h4>
		</div>
		<div class="panel-body">


		<div class="row pull-left">
			    <div class="col-lg-12 margin-tb">

			        <div class="pull-left">
			            <a class="btn btn-danger" href="{{ route('clientes.index') }}"> Voltar</a>
			        </div>
			    </div>
			</div>

		<div class="row">
		<!-- begin col-6 -->
		<div class="col-lg-12">
		<form action="{{ route('clientes.update',$cliente->id) }}" method="POST" name="form-wizard" class="form-control-with-bg">
		@csrf
        @method('PUT')
			<!-- begin nav-tabs -->
			<ul class="nav nav-tabs">
				<li class="nav-items">
					<a href="#default-tab-1" data-toggle="tab" class="nav-link active">
						<span class="d-sm-none">INF; BÁSICAS</span>
						<span class="d-sm-block d-none">INFORMAÇÕES BÁSICAS DO CLIENTE</span>
					</a>
				</li>
				<li class="nav-items">
					<a href="#default-tab-2" data-toggle="tab" class="nav-link">
						<span class="d-sm-none">INF. ADICIONAIS</span>
						<span class="d-sm-block d-none">INFORMAÇÕES ADICIONAIS</span>
					</a>
				</li>
			</ul>
			<!-- end nav-tabs -->
			<!-- begin tab-content -->
			<div class="tab-content">
				<!-- begin tab-pane -->
					<div class="tab-pane fade active show" id="default-tab-1">

						<div class="row">

						<div class="col-md-4 col-xs-4">
							<div class="form-group">
							<label for="nome">Nome Completo:</label>
								<input type="text" name="nome" value="{{ $cliente->nome ?? '' }}" placeholder="Nome do cliente" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
							</div>
						</div>

						<div class="col-md-4 col-xs-4">
							<div class="form-group">
							<label for="nacionalidade">Nacionalidade:</label>
							<input type="text" name="nacionalidade" value="{{ $cliente->nacionalidade ?? '' }}" placeholder="Nacionalidade" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
							</div>
						</div>


						<div class="col-md-4 col-xs-4">
							<div class="form-group">
							<label for="estadocivil">Estado Civil:</label>
							<select class="form-control" id="estadocivil" data-size="5" data-live-search="true" data-width="100%" name="estadocivil" required>

									<option value="" @if($cliente->estadocivil == '') ? selected : null @endif disabled>Estado Civil Não Informado</option>
									<option value="Solteiro (a)" @if($cliente->estadocivil == 'Solteiro (a)') ? selected : null @endif>Solteiro (a)</option>
									<option value="Casado (a)" @if($cliente->estadocivil == 'Casado (a)') ? selected : null @endif>Casado (a)</option>
									<option value="Viúvo (a)" @if($cliente->estadocivil == 'Viúvo (a)') ? selected : null @endif>Viúvo (a)</option>
									<option value="União Estável" @if($cliente->estadocivil == 'União Estável') ? selected : null @endif>União Estável</option>

							</select>

							</div>
						</div>
					</div>
						<!--rOW FORM2-->
						<div class="row">
						  <div class="col-md-4 col-xs-4">
						    <div class="form-group">
						      <label for="profissao">Profissão:</label>
						      <input type="text" name="profissao" value="{{ $cliente->profissao ?? '' }}" placeholder="Profissão" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
						    </div>
						  </div>

						  <div class="col-md-4 col-xs-4">
						    <div class="form-group">
						      <label for="endereco">Endereço:</label>
						      <input type="text" name="endereco" value="{{ $cliente->endereco ?? '' }}" placeholder="Endereço" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
							  </div>
						  </div>

						  	<div class="col-md-4 col-xs-4">
								<div class="form-group">
								<label for="bairro">Bairro:</label>
								<input type="text" name="bairro" value="{{ $cliente->bairro ?? '' }}" placeholder="Bairro" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
								</div>
							</div>
						  <!--next-->
						</div>
						<!--FIM rOW FORM2-->

					<!--FIM rOW FORM3-->
					 <div class="row">
						<div class="col-md-4 col-xs-4">
							<div class="form-group">
                                {!! html()->label('Estados:', 'estado') !!}

                                {!! html()
                                    ->select('estado', $estados, $cliente->estado)
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

						<div class="col-md-4 col-xs-4">
							<div class="form-group">

                                {!! html()->label('Cidades:', 'cidade') !!}

                                {!! html()
                                    ->select('cidade', $cidades, $cliente->cidade)
                                    ->class('form-control')
                                    ->name('cidade')
                                    ->attributes([
                                        'data-width' => '100%',
                                        'data-size' => '5',
                                        'data-live-search' => 'true',
                                        'id' => 'cidades',
                                        'selected' => $cliente->cidade
                                    ]) !!}
							</div>
						</div>

						<div class="col-md-4 col-xs-4">
								<div class="form-group">
								<label for="cep">CEP:</label>
								<input type="text" name="cep" value="{{ $cliente->cep ?? '' }}" placeholder="Cep" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
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
							<input type="text" name="rg" value="{{ $cliente->rg ?? '' }}" placeholder="RG / Orgão Expedidor" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />

							</div>
						</div>
						<div class="col-md-3 col-xs-3">
							<div class="form-group">
							<label for="cpf">CPF:</label>
							<input type="text" name="cpf" value="{{ $cliente->cpf ?? '' }}" placeholder="Cpf" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />

							</div>
						</div>
							<div class="col-md-3 col-xs-3">
								<div class="form-group">
								<label for="telefone">Telefone:</label>
								<input type="text" name="telefone" value="{{ $cliente->telefone ?? '' }}" placeholder="Telefone" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
								</div>
							</div>

							<div class="col-md-3 col-xs-3">
								<div class="form-group">
								<label for="celular">Celular:</label>
								<input type="text" name="celular" value="{{ $cliente->celular ?? '' }}" placeholder="Celular" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />
								</div>
							</div>
						<!--next-->
						</div>
						<!--FIM rOW FORM4-->


						<!--rOW FORM5-->
						<div class="row">
						<div class="col-md-5 col-xs-5">
							<div class="form-group">
							<label for="email">Email do Cliente:</label>
							<input type="text" name="email" value="{{ $cliente->email ?? '' }}" placeholder="E-mail" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required />

							</div>
						</div>

						</div>
						<!--FIM rOW FORM5-->
					</div>

<!--next-->
				<!-- end tab-pane -->
				<!-- begin tab-pane -->
				<div class="tab-pane fade" id="default-tab-2">
					<div class="row">
						<div class="col-md-4 col-xs-4">
						    <div class="form-group">
						      <label for="cnpj">CNPJ</label>
								<input type="text" name="cnpj" value="{{ $cliente->cnpj ?? '' }}" placeholder="CNPJ Opcional" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
						    </div>
						  </div>

						  <div class="col-md-4 col-xs-4">
								<div class="form-group">
								<label for="resumo_acao">Resumo da Ação: <span color="red"> (contrato - procuração)</span></label>

								<textarea id="resumo_acao" name="resumo_acao" value="{{ $cliente->resumo_acao ?? '' }}"
									rows="5" cols="33" class="form-control">{{ $cliente->resumo_acao ?? '' }}</textarea>


								</div>
							</div>


							<div class="col-md-4 col-xs-4">
								<div class="form-group">
								<label for="honorario_inicial">Honorários Iniciais R$ e Por Extenso:</label>

								<input type="text" name="honorario_inicial" value="{{ $cliente->honorario_inicial ?? '' }}" placeholder="Honorários Iniciais R$ e Por Extenso:" data-parsley-required="true" class="form-control" />


								</div>
							</div>

							<div class="col-md-4 col-xs-4">
								<div class="form-group">
								<label for="forma_pagamento">Detalhamento da Forma de Pagamento</label>
									<textarea id="forma_pagamento" name="forma_pagamento" value="{{ $cliente->forma_pagamento ?? '' }}"
						          		rows="5" cols="33" class="form-control"> {{ $cliente->forma_pagamento ?? '' }} </textarea>

								</div>
							</div>

							<div class="col-md-4 col-xs-4">
								<div class="form-group">
								<label for="porcentagem_geral">% Porcentagem geral da Ação:</label>

								<input type="text" name="porcentagem_geral" value="{{ $cliente->porcentagem_geral ?? '' }}" placeholder="% Porcentagem geral da Ação:" data-parsley-required="true" class="form-control" />


								</div>
							</div>



						  <div class="col-md-4 col-xs-4">
						    <div class="form-group">
						      <label for="observacao">Observações:</label>

						      <textarea id="observacao" name="observacao" value="{{ $cliente->observacao ?? '' }}"
						          rows="5" cols="33" class="form-control"> {{ $cliente->observacao ?? '' }} </textarea>


						    </div>
						  </div>

					</div>
				</div>

</div>

					 <p class="text-right m-b-0">

						<button type="submit" class="btn btn-lime m-r-5">ATUALIZAR INFORMAÇÕES DO CLIENTE</button>
					</p>
		</form>
				</div>
				<!-- end tab-pane -->

			</div>
			<!-- end tab-content -->
		</div>
		<!-- end col-6 -->



		</div>


		</div>

	</div>
	<!-- end panel -->
@endsection

  @push('scripts')
	<script type="text/javascript">
        $('select[name=estado]').change(function () {
            var idEstado = $(this).val();

            $.get('/get-cidades/' + idEstado, function (cidades) {
                $('select[name=cidade]').empty();

                $.each(cidades, function (key, value) {
                    $('select[name=cidade]').append('<option value=' + value.id + '>' + value.cidade + '</option>');
                });
				//alert(cidades);
            });
        });
    </script>
@endpush
