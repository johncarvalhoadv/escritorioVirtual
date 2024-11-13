@extends('admin.layouts.default')
@section('template_title', 'Gerenciador de Clientes')

@section('content')

<!-- begin row -->
<div class="row">
   <!-- begin col-6 -->
   <div class="col">
      <!-- begin nav-pills -->
      <ul class="nav nav-pills">
         <li class="nav-items">
            <a href="#clientesTab" data-toggle="tab" class="nav-link active">
            <span class="d-sm-none"> <i class="fa fa-users"></i> </span>
            <span class="d-sm-block d-none" style="font-size:15px"> <i class="fa fa-users fa-1x"></i> Clientes </span>
            </a>
         </li>
         <li class="nav-items">
            <a href="#aniversariantesTab" data-toggle="tab" class="nav-link">
            <span class="d-sm-none"> <i class="fa fa-birthday-cake"></i></span>
            <span class="d-sm-block d-none" style="font-size:15px"> <i class="fa fa-birthday-cake fa-1x"></i> Aniversariantes</span>
            </a>
         </li>
         <li class="nav-items">
            <a href="#dashboardTab" data-toggle="tab" class="nav-link">
            <span class="d-sm-none"> <i class="fa fa-chart-pie"></i></span>
            <span class="d-sm-block d-none" style="font-size:15px"> <i class="fa fa-chart-pie fa-1x"></i> Dashboard</span>
            </a>
         </li>
      </ul> <!-- end nav-pills -->

      </div>
</div>


      <!-- begin tab-content -->
      <div class="tab-content">

         <!-- begin tab-pane clientesTab-->
         <div class="tab-pane fade active show" id="clientesTab">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
               <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
               <li class="breadcrumb-item active"><a href="javascript:;">Clientes</a></li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Listagem de Clientes <small>Cadastro - Listagem - Edição e Exclusão</small></h1>
            <!-- end page-header -->
            <!-- begin panel -->

            @if ($message = Session::get('success'))
                <div class="col-6 pull-right alert alert-success fade show">
                <span class="close" data-dismiss="alert">&times;</span>
                     {{ $message }}
                </div>

                  @endif
            <div>
                  <div class="pull-left">
                     <a href="{{ route('clientes.create.step.one') }}" class="btn themebgbuttom pull-right" style="margin-bottom: 10px;">CADASTRAR NOVO CLIENTE</a>
                  </div>
                <div class="table-responsive-sm">
                  <table class="table table-striped table-hover">
                     <thead>
                        <tr>
                           <th width="text-nowrap">ID</th>
                           <th width="text-nowrap">NOME</th>
                           <th class="text-nowrap">RG</th>
                           <th class="text-nowrap">CPF</th>
                           <th class="text-nowrap">CIDADE/UF</th>
                           <th class="text-nowrap" style="width:20%;">AÇÕES</th>
                        </tr>
                     </thead>
                     <tbody>
                       @foreach ($data  as $key => $value)
                        <tr>
                           <td>{{ $value->id }}</td>
                           <td>{{ $value->nome }}</td>
                           <td>{{ \Str::limit($value->rg, 20) }}</td>
                           <td>{{ \Str::limit($value->cpf, 20) }}</td>
                           <td>{{ \Str::limit($value->cidades->cidade, 100) }} / {{ \Str::limit($value->estados->estado, 100) }}</td>
                           <td style="width:20%;">
                              <div class="btn-group">
                                 <a href="#" class="btn btn-default">OPÇÕES / DOCS</a>
                                 <a href="#" class="btn btn-default dropdown-toggle"
                                    data-toggle="dropdown"></a>
                                 <ul class="dropdown-menu pull-right">
                                    <li><a href="{{ route('clientes.gerarProcuracao',$value->id) }}" class="btn btn-sm btn-default">[PROCURAÇÃO]</a></li>
                                    <li> <a href="{{ route('clientes.gerarHipossuficiencia',$value->id) }}" class="btn btn-sm btn-default">[HIPOSSUFICIÊNCIA]</a></li>
                                    <li> <a href="{{ route('clientes.gerarContratoGeral',$value->id) }}" class="btn btn-sm btn-default">[CONTRATO geral]</a></li>
                                    <li> <a href="{{ route('clientes.gerarPeticao',$value->id) }}" class="btn btn-sm btn-default">[PETIÇÃO]</a></li>
                                    <li class="divider"></li>
                                    <form action="{{ route('clientes.destroy',$value->id) }}" method="POST" onsubmit="return confirm('Isso irá excluir o cliente {{$value->nome}}, deseja continuar?')" >
                                       <li ><a style="margin: 6px;" class="btn btn-warning pull-left" href="{{ route('clientes.show',$value->id) }}"><i class="fa fa-eye"></i></a>  </li>
                                       <li> <a style="margin: 6px;" class="btn btn-primary pull-left" href="{{ route('clientes.edit',$value->id) }}"><i class="fa fa-edit"></i></a>   </li>
                                       <li>
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger pull-left" style="margin: 6px;"><i class="fa fa-times"></i></button>
                                    </form>
                                    </li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                </div>
                  {{ $data->links() }}
                  <!-- end panel -->
            </div>

         </div> <!-- end tab-pane clientesTab-->


         <!--  INICIO tab-pane  aniversariantes -->
         <div class="tab-pane fade" id="aniversariantesTab">
            <h1 class="pull-left"> Aniversariantes do Dia <i class="fa fa-birthday-cake fa-1x text-theme"></i></h1>
             <div class="table-responsive-sm">
                 <table class="table table-striped table-hover aniversariantes">
               <thead>
                  <tr>
                     <th>Nome</th>
                     <th>Data de Nascimento</th>
                     <th>Idade</th>
                     <th>Telefone</th>
                     <th>Email</th>
                     <th>Opções</th>
                  </tr>
               </thead>
               <tbody>


                  @if($aniversariantes->count() == 0)
                    <th colspan="6" class="centro"> Hoje não temos aniversariantes!</th>
                  @endif


                  @foreach ($aniversariantes  as $key => $niver)
                      <tr>
                          <td>{{ $niver->nome }}</td>
                          <td>{{ \Carbon\Carbon::parse($niver->nascimento)->format('d-m-Y') }}</td>
                          <td>{{ \Carbon\Carbon::parse($niver->nascimento)->age }} anos</td>
                          <td>{{ $niver->telefone }}</td>
                          <td>{{ $niver->email }}</td>
                          <td> Enviar Parabéns por Email (Em Breve) </td>
                      </tr>
                  @endforeach
               </tbody>
            </table>
             </div>
         </div> <!--  FIM tab-pane  aniversariantes -->

         <!-- begin tab-pane Dashboard-->
         <div class="tab-pane fade" id="dashboardTab">
            <div class="row">
               <!-- begin col-4 -->
               <div class="col-lg-9">
                  <p><h2>TOTAL DE CLIENTES: <strong>@if(isset($countClientes)) {{$countClientes}} @endif</strong></h2></p>
               </div>
            </div>
            <!-- begin row -->
            <div class="row">
               <!-- begin col-4 estado_civil-->
               <div class="col-lg-4">
                  <!-- begin panel -->
                  <div class="estado_civil">
                     <div class="body">
                        <div>
                           <table class="table table-striped table-hover">
                              <thead>
                                 <tr>
                                    <th colspan="3">CLIENTES TOTAIS POR ESTADO CIVIL</th>
                                 </tr>
                              </thead>
                              <tbody>
                            @foreach ($countClientesEcivil  as $ecivil => $totalecivil)
                                 <tr>
                                    <td>{{ $ecivil }}</td>
                                    <td>{{ $totalecivil }}</td>
                                 </tr>
                            @endforeach

                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <!-- end panel -->
               </div>
               <!-- end col-4 -->
               <!-- begin col-4 sexo-->
               <div class="col-lg-4">
                  <!-- begin panel -->
                  <div class="sexo">

                     <div class="body">
                        <div>
                           <table class="table table-striped table-hover">
                              <thead>
                                 <tr>
                                    <th colspan="3">CLIENTES TOTAIS POR SEXO</th>
                                 </tr>
                              </thead>
                              <tbody>
                                @foreach ($countClienteSexo  as $csexo => $totalsexo)
                                 <tr>
                                    <td>{{ $csexo }}</td>
                                    <td>{{ $totalsexo }}</td>
                                 </tr>
                                @endforeach

                              </tbody>
                           </table>
                           <canvas id="doughnutChart"></canvas>
                        </div>
                     </div>
                  </div>
                  <!-- end panel -->
               </div>
               <!-- end col-4 -->

               <!-- begin col-4 idade-->
               <div class="col-lg-4">
                  <!-- begin panel -->

                  <table class="table table-striped table-hover aniversariantes">
                  <thead>
                        <tr>
                        <th colspan="3">TOP 8 CIDADES</th>
                        </tr>
                  </thead>
               <tbody>
                  @foreach ($clientesCidade  as $key => $dadosCidade)
                  <tr>
                     <td>{{ $dadosCidade->cidade }}</td>
                     <td>{{ $dadosCidade->siglaEstado }}</td>
                     <td>{{ $dadosCidade->totalcidades }}</td>
                  </tr>
                  @endforeach
               </tbody>
            </table>


                  <!-- end panel -->
               </div>
               <!-- end col-4 -->
            </div>
            <!-- end row 1-->
            <!-- begin row 2-->
            <div class="row">
               <!-- begin col 1 -->
               <div class="col-7">
                <h3>LOCALIZAÇÃO DE CLIENTES POR ESTADO</h3>
                <canvas id="barChart"></canvas>
                </div>
               <!-- begin col 2 -->
               <div class="col-5" >
                  <h3>COMO O CLIENTE NOS CONHECEU</h3>
                  <canvas id="pieChart"></canvas>

               </div>
            </div>
         </div> <!-- end tab-pane DASHBOARD-->



      </div>
      <!-- end tab-content -->




@endsection

@push('scripts')
	<script src="{{ asset('admin/plugins/chartjs/Chart.min.js') }}"></script>
	<script>


  //pie
  var ctxP = document.getElementById("pieChart").getContext('2d');
  var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
      labels: [
            @foreach ($countClienteIndicacao  as $indicacoes => $totalindicacoes )
            {!! json_encode($indicacoes)!!},
            @endforeach
      ],
      datasets: [{
        data: [
            @foreach ($countClienteIndicacao  as $indicacoes => $totalindicacoes )
            {!! json_encode($totalindicacoes)!!},
            @endforeach
        ],
        backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
        hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
      }]
    },
    options: {
      responsive: true
    }
  });


  //bar
var ctxB = document.getElementById("barChart").getContext('2d');
var myBarChart = new Chart(ctxB, {
  type: 'bar',
  data: {
    labels: [
        @foreach ($clientesEstado  as $estadosChart)
        {!! json_encode($estadosChart->estado)!!},
        @endforeach],
    datasets: [{
      label: 'CLIENTES POR ESTADO',
      // 25 estados
      data: [
        @foreach ($clientesEstado  as $estadosChart)
        {{ json_encode($estadosChart->ttotal) }},
        @endforeach
      ],
      backgroundColor: [
         'rgba(124,252,0, 0.4)',
         'rgba(255, 0, 0, 0.4)',
         'rgba(0, 255, 0, 0.4)',
         'rgba(0, 0, 255, 0.4)',
         'rgba(255, 255, 0, 0.4)',
         'rgba(255, 0, 255, 0.4)',
         'rgba(0, 255, 255, 0.4)',
         'rgba(128, 0, 0, 0.4)',
         'rgba(0, 128, 0, 0.4)',
         'rgba(0, 0, 128, 0.4)',
         'rgba(128, 128, 0, 0.4)',
         'rgba(128, 0, 128, 0.4)',
         'rgba(0, 128, 128, 0.4)',
         'rgba(192, 192, 192, 0.4)',
         'rgba(128, 128, 128, 0.4)',
         'rgba(255, 165, 0, 0.4)',
         'rgba(255, 192, 203, 0.4)',
         'rgba(128, 0, 0, 0.4)',
         'rgba(255, 87, 51, 0.4)',
         'rgba(0, 255, 127, 0.4)',
         'rgba(255, 215, 0, 0.4)',
         'rgba(255, 105, 180, 0.4)',
         'rgba(50, 205, 50, 0.4)',
         'rgba(255, 20, 147, 0.4)',
         'rgba(255, 140, 0, 0.4)',
         'rgba(255, 0, 255, 0.4)',
         'rgba(128, 128, 0, 0.4)',
         'rgba(255, 69, 0, 0.4)',
      ],
      borderColor: [
         'rgba(124,252,0, 1)',
         'rgba(255, 0, 0, 1)',
         'rgba(0, 255, 0, 1)',
         'rgba(0, 0, 255, 1)',
         'rgba(255, 255, 0, 1)',
         'rgba(255, 0, 255, 1)',
         'rgba(0, 255, 255, 1)',
         'rgba(128, 0, 0, 1)',
         'rgba(0, 128, 0, 1)',
         'rgba(0, 0, 128, 1)',
         'rgba(128, 128, 0, 1)',
         'rgba(128, 0, 128, 1)',
         'rgba(0, 128, 128, 1)',
         'rgba(192, 192, 192, 1)',
         'rgba(128, 128, 128, 1)',
         'rgba(255, 165, 0, 1)',
         'rgba(255, 192, 203, 1)',
         'rgba(128, 0, 0, 1)',
         'rgba(255, 87, 51, 1)',
         'rgba(0, 255, 127, 1)',
         'rgba(255, 215, 0, 1)',
         'rgba(255, 105, 180, 1)',
         'rgba(50, 205, 50, 1)',
         'rgba(255, 20, 147, 1)',
         'rgba(255, 140, 0, 1)',
         'rgba(255, 0, 255, 1)',
         'rgba(128, 128, 0, 1)',
         'rgba(255, 69, 0, 1)',
      ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});

//doughnut
var ctxD = document.getElementById("doughnutChart").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: ["Mulher", "Outros", "Homem"],
      datasets: [{
        data: [
            @foreach ($countClienteSexo  as $csexo => $totalsexo)
            {{json_encode($totalsexo)}},
            @endforeach
        ],
        backgroundColor: ["#F7464A", "#FDB45C", "#46BFBD"],
        hoverBackgroundColor: ["#FF5A5E", "#FFC870", "#84b6f4"]
      }]
    },
    options: {
      responsive: true
    }
  });


	</script>


@endpush
