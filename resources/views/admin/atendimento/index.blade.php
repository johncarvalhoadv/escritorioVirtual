@extends('layouts.default')

@section('template_title')
    Gerenciador de Atendimento
@endsection

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item active"><a href="javascript:;">Atendimento</a></li>
		 
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Listagem de Atendimento <small>Cadastro - Listagem - Edição e Exclusão de Atendimento</small></h1>
    
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
		         
	   				<div class="pull-right"> 
                        <a href="{{ route('atendimentos.create') }}" class="btn themebgbuttom pull-right" style="margin-bottom: 10px;">Cadastrar novo Atendimento</a>
                    
                    </div>        
		            
			@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>
                <th>No</th>
                
										<th>Title</th>
										<th>Start</th>
										<th>End</th>
										<th>Data</th>
										<th>Hora</th>

                <th class="text-nowrap" style="width:20%;">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($atendimentos as $atendimento)
                <tr>
                    <td>{{ ++$i }}</td>

                    
											<td>{{ $atendimento->title }}</td>
											<td>{{ $atendimento->start }}</td>
											<td>{{ $atendimento->end }}</td>
											<td>{{ $atendimento->data }}</td>
											<td>{{ $atendimento->hora }}</td>

                        
                    <td style="width:20%;">
                        <div class="btn-group">
                        <a href="#" class="btn btn-default">OPÇÕES / DOCS</a>
                        <a href="#" class="btn btn-default dropdown-toggle"
                            data-toggle="dropdown"></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#" class="btn btn-sm btn-default">[XXX]</a></li>
                                    <li> <a href="#" class="btn btn-sm btn-default">[XXX]</a></li>
                                    <li> <a href="#" class="btn btn-sm btn-default">[XXX]</a></li>
                                    <li class="divider"></li>
                                        <form action="{{ route('atendimentos.destroy',$atendimento->id) }}" method="POST" onsubmit="return confirm('Isso irá excluir o atendimento: {{$atendimento->nome}}, deseja continuar?')" > 
                                        
                                        <li ><a style="margin: 6px;" class="btn btn-warning pull-left" href="{{ route('atendimentos.show',$atendimento->id) }}"><i class="fa fa-eye"></i></a>  </li>
                                
                                        <li> <a style="margin: 6px;" class="btn btn-primary pull-left" href="{{ route('atendimentos.edit',$atendimento->id) }}"><i class="fa fa-edit"></i></a>   </li>
                                        
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
             
        {!! $atendimentos->links() !!}
     
</div>
</div>

@endsection 