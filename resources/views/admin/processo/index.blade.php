@extends('layouts.default')

@section('template_title')
    Gerenciador de Processo
@endsection

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item active"><a href="javascript:;">Processo</a></li>
		 
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Listagem de Processo <small>Cadastro - Listagem - Edição e Exclusão de Processo</small></h1>
    
	<!-- end page-header -->
	
	<!-- begin panel -->
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class=" ">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a> 
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a> 
			</div> 
		</div>
		<div class="panel-body"> 
		         
	   				<div class="pull-left"> 
                        <a href="{{ route('processos.create') }}" class="btn themebgbuttom pull-left" style="margin-bottom: 10px;">CADASTRAR NOVO PROCESSO</a>
                    
                    </div>        
		            
			@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>
                <th>STATUS</th> 
                <th>FASE PROCESSUAL</th>
                <th>Nº PROCESSO</th>
                <th>TIPO AÇÃO</th> 
                <th>CLIENTE</th>
                <th>POLO ATIVO</th>
                <th>POLO PASSIVO</th> 
                <th class="text-nowrap" style="width:10%;">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($processos as $processo)
                <tr>
                    <td>{{ ++$i }}</td> 
                    <td>{{ $processo->status }}</td> 
                    <td>{{ $processo->fase_processual }}</td>
                    <td>{{ $processo->numero_processo }}</td>
                    <td>{{ $processo->tipo_acao }}</td> 
                    <td>{{ $processo->id_cliente }}</td> 
                    <td>{{ $processo->polo_passivo }}</td> 
                    <td style="width:10%;">
                        <div class="btn-group">
                        <a href="#" class="btn btn-default">OPÇÕES</a>
                        <a href="#" class="btn btn-default dropdown-toggle"
                            data-toggle="dropdown"></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#" class="btn btn-sm btn-default">[XXX]</a></li>
                                    <li> <a href="#" class="btn btn-sm btn-default">[XXX]</a></li>
                                    <li> <a href="#" class="btn btn-sm btn-default">[XXX]</a></li>
                                    <li class="divider"></li>
                                        <form action="{{ route('processos.destroy',$processo->id) }}" method="POST" onsubmit="return confirm('Isso irá excluir o processo: {{$processo->nome}}, deseja continuar?')" > 
                                        
                                        <li ><a style="margin: 6px;" class="btn btn-warning pull-left" href="{{ route('processos.show',$processo->id) }}"><i class="fa fa-eye"></i></a>  </li>
                                
                                        <li> <a style="margin: 6px;" class="btn btn-primary pull-left" href="{{ route('processos.edit',$processo->id) }}"><i class="fa fa-edit"></i></a>   </li>
                                        
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
        {!! $processos->links() !!} 
</div>
 


@endsection 