@extends('admin.layouts.default')

@section('template_title', 'PAINEL DE ALERTAS')

@push('css')
	<link href="{{ asset('admin/plugins/jquery-jvectormap/jquery-jvectormap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item active">Painel</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">PAINEL <small>DE ALERTAS... Total de Processos: @if(isset($countProcessos)) {{$countProcessos}} @endif </small></h1>
	<!-- end page-header -->


	<!-- begin row -->
	<div class="row">
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-red">
				<div class="stats-icon"><i class="fa fa-desktop"></i></div>
				<div class="stats-info">
					<h4> TOTAL DE PROCESSOS ATIVOS</h4>
					<p style="font-weight: 900; font-size:500%">@if(isset($countProcessos)) {{$countProcessos}} @endif</p>
				</div>
				<div class="stats-link">
					<a href="javascript:;">VER DETALHES <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-orange">
				<div class="stats-icon"><i class="fa fa-link"></i></div>
				<div class="stats-info">
					<h4>PETICIONAMENTO PENDENTE</h4>
					<p style="font-weight: 900; font-size:500%">15</p>
				</div>
				<div class="stats-link">
					<a href="javascript:;">VER DETALHES <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-grey-darker">
				<div class="stats-icon"><i class="fa fa-users"></i></div>
				<div class="stats-info">
					<h4>ATENDIMENTOS PARA SEMANA</h4>
					<p style="font-weight: 900; font-size:500%">185</p>
				</div>
				<div class="stats-link">
					<a href="javascript:;">VER DETALHES <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-black-lighter">
				<div class="stats-icon"><i class="fa fa-clock"></i></div>
				<div class="stats-info">
					<h4>TOTAL DE AUDIÊNCIAS AGENDADAS</h4>
					<p style="font-weight: 900; font-size:500%">@if(isset($countAudiencias)) {{$countAudiencias}} @endif</p>
				</div>
				<div class="stats-link">
					<a href="javascript:;">VER DETALHES <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
	</div>
	<!-- end row -->
	<div class="container">
  <div class="row">
    <div class="wol-lg-4 wol-md-3" style="padding-left: 0px !important; padding-right: 0px !important;">
      		<!-- begin panel CLIENTES -->
		<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn ">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				</div>
					<h4 class="panel-title">CLIENTES</h4>
				</div>
				<div class="panel-body p-t-0">
					<div class="table-responsive">
						<table class="table table-valign-middle">
							<thead>
								<tr>
									<th>Tipo</th>
									<th>Total</th>
									<th>Gráf.</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><label class="label label-danger">TOTAL DE CLIENTES</label></td>
									<td> <H1 style="font-weight: 900;">@if(isset($countClientes)) {{$countClientes}} @endif</H1>  <!--<span class="text-success"><i class="fa fa-arrow-up"></i></span>--></td>
									<td><div id="sparkline-unique-visitor"></div></td>
								</tr>
								<tr>
									<td><label class="label label-warning">TOTAL DE CLIENTES MENSAIS</label></td>
									<td>28.2%</td>
									<td><div id="sparkline-bounce-rate"></div></td>
								</tr>
								<tr>
									<td><label class="label label-success">CLIENTES EM ABERTO</label></td>
									<td>10</td>
									<td><div id="sparkline-total-page-views"></div></td>
								</tr>
							</tbody>
						</table>
						<div id="donut-chart" class="height-sm"></div>
					</div>
				</div>
			</div>
			<!-- end panel CLIENTES -->




    </div>

    <div class="wol-lg-4 wol-md-3" style="padding-right: 0px !important;">
		<!-- begin panel ATENDIMENTOS & CONSULTAS -->
		<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn ">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

				</div>
					<h4 class="panel-title">ATENDIMENTOS & CONSULTAS</h4>
				</div>
				<div class="panel-body p-t-0">
					<div class="table-responsive">
						<table class="table table-valign-middle">
							<thead>
								<tr>
									<th>Tipo</th>
									<th>Total</th>
									<th>Gráf.</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><label class="label label-danger">TOTAL DE ATENDIMENTOS</label></td>
									<td>13,203 <span class="text-success"><i class="fa fa-arrow-up"></i></span></td>
									<td><div id="sparkline-unique-visitor"></div></td>
								</tr>
								<tr>
									<td><label class="label label-warning">VALOR EM CONSULTAS</label></td>
									<td>28.2%</td>
									<td><div id="sparkline-bounce-rate"></div></td>
								</tr>
								<tr>
									<td><label class="label label-success">CONTRATOS FECHADOS</label></td>
									<td>10</td>
									<td><div id="sparkline-total-page-views"></div></td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end panel ATENDIMENTOS & CONSULTAS -->


    </div>



    <div class="wol-lg-4 wol-md-3" style="padding-right: 0px !important; overflow: hidden; !important">
      	<!-- begin panel ANALISE PROCESSUAL-->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn ">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

				</div>
					<h4 class="panel-title">ANÁLISE PROCESSUAL</h4>
				</div>
				<div class="panel-body p-t-0" style="padding-right: 0px !important;">
					<div class="table-responsive">
						<table class="table table-valign-middle">
							<thead>
								<tr>
									<th>Tipo</th>
									<th>Total/Gráf.</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><label class="label label-danger">TOTAL DE PROCESSOS</label></td>
									<td><H1 style="font-weight: 900;">@if(isset($countProcessos)) {{$countProcessos}} @endif</H1>   <!-- <span class="text-success"><i class="fa fa-arrow-up"></i></span>--></td>
									<td><div id="sparkline-unique-visitor"></div></td>
								</tr>
								<tr>
									<td><label class="label label-warning">PROCESSOS ENCERRADOS</label></td>

									<td><div id="sparkline-bounce-rate"></div></td>
								</tr>
								<tr>
									<td><label class="label label-success">DURAÇÃO MÉDIA DOS PROCESSOS</label></td>

									<td><div id="sparkline-total-page-views"></div></td>
								</tr>
								<tr>
									<td><label class="label label-primary">MAIOR VALOR DE UM PROCESSO</label></td>

									<td><div id="sparkline-avg-time-on-site"></div></td>
								</tr>
								<tr>
									<td><label class="label label-default">VALOR DAS CAUSAS EM ABERTO</label></td>

									<td><div id="sparkline-new-visits"></div></td>
								</tr>
								<tr>
									<td><label class="label label-inverse">VALOR TOTAL EM HONORÁRIOS</label></td>

									<td><div id="sparkline-return-visitors"></div></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- end panel ANALISE PROCESSUAL -->
    </div>
  </div>
</div>



@endsection

@push('scripts')
	<script src="{{ asset('plugins/flot/dom-tools.js') }}"></script>
    <script src="{{ asset('plugins/flot/EventEmitter.js') }}"></script>
	<script src="{{ asset('plugins/flot/flot.js') }}"></script>
	<script src="{{ asset('plugins/flot/flot.time.js') }}"></script>
	<script src="{{ asset('plugins/flot/flot.pie.js') }}"></script>
	<script src="{{ asset('plugins/gritter/js/jquery.gritter.min.js') }}"></script>
	<script src="{{ asset('plugins/jquery-jvectormap/jquery-jvectormap.min.js') }}"></script>
	<script src="{{ asset('plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('js/demo/dashboard-v1.js') }}"></script>
	<script>
		$(document).ready(function() {
			Dashboard.init();
		});
	</script>

<script>
	var handleDashboardGritterNotification = function() {
		setTimeout(function() {
			$.gritter.add({
				title: 'Olá Dr {{Auth::user()->name}}, Tudo bem?',
				text: 'Abaixo você irá encontrar todas as métricas necessárias para sua organização!',
				image: '../assets/img/user/user-12.jpg',
				sticky: false,
				time: '4000',
				class_name: 'my-sticky-class'
			});
		}, 1000);
	};

</script>
@endpush
