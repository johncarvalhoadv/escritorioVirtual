<!-- begin panel -->
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<div class=" ">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a> 
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a> 
			</div> 
		</div>
	<div class="panel-body">

    
<div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('title') }}
        {{ Form::text('title', $atendimento->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
        {{ $errors->first('title', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('start') }}
        {{ Form::text('start', $atendimento->start, ['class' => 'form-control' . ($errors->has('start') ? ' is-invalid' : ''), 'placeholder' => 'Start']) }}
        {{ $errors->first('start', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('end') }}
        {{ Form::text('end', $atendimento->end, ['class' => 'form-control' . ($errors->has('end') ? ' is-invalid' : ''), 'placeholder' => 'End']) }}
        {{ $errors->first('end', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('data') }}
        {{ Form::text('data', $atendimento->data, ['class' => 'form-control' . ($errors->has('data') ? ' is-invalid' : ''), 'placeholder' => 'Data']) }}
        {{ $errors->first('data', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('hora') }}
        {{ Form::text('hora', $atendimento->hora, ['class' => 'form-control' . ($errors->has('hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
        {{ $errors->first('hora', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div>