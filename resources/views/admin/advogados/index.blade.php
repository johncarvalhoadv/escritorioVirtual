@extends('layouts.default')

@section('template_title', 'Gerenciador de Advogados')

@section('content')

	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item active"><a href="javascript:;">Advogados</a></li>
		 
	</ol>

	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Listagem de Advogados <small>Cadastro - Listagem - Edição e Exclusão</small></h1>
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
		                <!-- <a class="btn btn-success" href="{{ route('advogados.create') }}"> Adicionar um novo Advogado</a>-->
                        <a href="{{ route('advogados.create.step.one') }}" class="themebgbuttom btn pull-right"  style="margin-bottom: 10px;">CADASTRAR NOVO ADVOGADO</a>
                    
                    </div>        
		          <!-- <div class="themebgbuttom"> <span>     JOhn Carvalho </span></div>-->
		         
		    

			@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
    <thead>
                        <tr>
                            <th width="text-nowrap">ID</th>
                            <th width="text-nowrap">NOME</th> 
                            <th class="text-nowrap">OAB</th>
                            <th class="text-nowrap">CPF</th>
                            <th class="text-nowrap">CIDADE</th>
                            <th class="text-nowrap" style="width:20%;">AÇÕES</th>
                        </tr>
    </thead>
    <tbody>
                            @foreach ($data  as $key => $value)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $value->nome }}</td>
                                <td>{{ \Str::limit($value->oab, 20) }}</td>
                                <td>{{ \Str::limit($value->cpf, 20) }}</td>
                                <td>{{ \Str::limit($value->cidade, 100) }}</td>
 

                                <td style="width:20%;">
                                    <div class="btn-group">
                                    <a href="#" class="btn btn-default">OPÇÕES / DOCS</a>
                                    <a href="#" class="btn btn-default dropdown-toggle"
                                        data-toggle="dropdown"></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="" class="btn btn-sm btn-default">[SUBSTABELECIMENTO]</a></li>
                                        <li> <a href="" class="btn btn-sm btn-default">[XXX]</a></li>
                                        <li> <a href="" class="btn btn-sm btn-default">[XXX]</a></li>
                                        <li class="divider"></li>
                                            <form action="{{ route('advogados.destroy',$value->id) }}" method="POST" onsubmit="return confirm('Isso irá excluir o advogado(a) {{$value->nome}}, deseja continuar?')" > 
                                            
                                            <li ><a style="margin: 6px;" class="btn btn-warning pull-left" href="{{ route('advogados.show',$value->id) }}"><i class="fa fa-eye"></i></a>  </li>
                                    
                                            <li> <a style="margin: 6px;" class="btn btn-primary pull-left" href="{{ route('advogados.edit',$value->id) }}"><i class="fa fa-edit"></i></a>   </li>
                                            
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
    <div class="bgpaginacao">{{ $data->links() }} john</div> 

		</div>
	</div>
	<!-- end panel --> 
@endsection