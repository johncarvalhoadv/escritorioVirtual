 
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

    <!-- <div class="col-md-6 mb-3">  
        {{ Form::label('status') }}
        {{ Form::text('status', $processo->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
        {{ $errors->first('status', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('tipo') }}
        {{ Form::text('tipo', $processo->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
        {{ $errors->first('tipo', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('fase_processual') }}
        {{ Form::text('fase_processual', $processo->fase_processual, ['class' => 'form-control' . ($errors->has('fase_processual') ? ' is-invalid' : ''), 'placeholder' => 'Fase Processual']) }}
        {{ $errors->first('fase_processual', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('numero_processo') }}
        {{ Form::text('numero_processo', $processo->numero_processo, ['class' => 'form-control' . ($errors->has('numero_processo') ? ' is-invalid' : ''), 'placeholder' => 'Numero Processo']) }}
        {{ $errors->first('numero_processo', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('tipo_acao') }}
        {{ Form::text('tipo_acao', $processo->tipo_acao, ['class' => 'form-control' . ($errors->has('tipo_acao') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Acao']) }}
        {{ $errors->first('tipo_acao', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('tipo_cliente') }}
        {{ Form::text('tipo_cliente', $processo->tipo_cliente, ['class' => 'form-control' . ($errors->has('tipo_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Cliente']) }}
        {{ $errors->first('tipo_cliente', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row"> 

  <div class="col-md-6 mb-3">
  <div class="form-group"> 
    {{ Form::label('Cliente') }}
    {!! Form::select('id_cliente', $clientes,  $processo->id_cliente, array('class' => 'form-control')) !!}
    {{ $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') }}
   <!--@if($clientes != null)
    //JOHN CARVALHO
    //@endif
-->
	</div>
  </div>

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('polo_ativo') }}
        {{ Form::text('polo_ativo', $processo->polo_ativo, ['class' => 'form-control' . ($errors->has('polo_ativo') ? ' is-invalid' : ''), 'placeholder' => 'Polo Ativo']) }}
        {{ $errors->first('polo_ativo', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('polo_passivo') }}
        {{ Form::text('polo_passivo', $processo->polo_passivo, ['class' => 'form-control' . ($errors->has('polo_passivo') ? ' is-invalid' : ''), 'placeholder' => 'Polo Passivo']) }}
        {{ $errors->first('polo_passivo', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">
 

  <div class="col-md-6 mb-3">
  <div class="form-group"> 
    {{ Form::label('Advogado') }}
    {!! Form::select('id_advogado', $advogados, $processo->id_advogado, array('class' => 'form-control')) !!}
    {{ $errors->first('id_advogado', '<div class="invalid-feedback">:message</div>') }}
 
	</div>
  </div>

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('valor_causa') }}
        {{ Form::text('valor_causa', $processo->valor_causa, ['class' => 'form-control' . ($errors->has('valor_causa') ? ' is-invalid' : ''), 'placeholder' => 'Valor Causa']) }}
        {{ $errors->first('valor_causa', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('valor_acordo') }}
        {{ Form::text('valor_acordo', $processo->valor_acordo, ['class' => 'form-control' . ($errors->has('valor_acordo') ? ' is-invalid' : ''), 'placeholder' => 'Valor Acordo']) }}
        {{ $errors->first('valor_acordo', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('valor_honorarios') }}
        {{ Form::text('valor_honorarios', $processo->valor_honorarios, ['class' => 'form-control' . ($errors->has('valor_honorarios') ? ' is-invalid' : ''), 'placeholder' => 'Valor Honorarios']) }}
        {{ $errors->first('valor_honorarios', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('porcentagem_honorarios') }}
        {{ Form::text('porcentagem_honorarios', $processo->porcentagem_honorarios, ['class' => 'form-control' . ($errors->has('porcentagem_honorarios') ? ' is-invalid' : ''), 'placeholder' => 'Porcentagem Honorarios']) }}
        {{ $errors->first('porcentagem_honorarios', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('valor_sucumbencia') }}
        {{ Form::text('valor_sucumbencia', $processo->valor_sucumbencia, ['class' => 'form-control' . ($errors->has('valor_sucumbencia') ? ' is-invalid' : ''), 'placeholder' => 'Valor Sucumbencia']) }}
        {{ $errors->first('valor_sucumbencia', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('total_honorarios') }}
        {{ Form::text('total_honorarios', $processo->total_honorarios, ['class' => 'form-control' . ($errors->has('total_honorarios') ? ' is-invalid' : ''), 'placeholder' => 'Total Honorarios']) }}
        {{ $errors->first('total_honorarios', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('prazo_aberto') }}
        {{ Form::text('prazo_aberto', $processo->prazo_aberto, ['class' => 'form-control' . ($errors->has('prazo_aberto') ? ' is-invalid' : ''), 'placeholder' => 'Prazo Aberto']) }}
        {{ $errors->first('prazo_aberto', '<div class="invalid-feedback">:message</div>') }}
    </div> 
 
 
</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('data_prazo') }}
        {{ Form::text('data_prazo', $processo->data_prazo, ['class' => 'form-control' . ($errors->has('data_prazo') ? ' is-invalid' : ''), 'placeholder' => 'Data Prazo']) }}
        {{ $errors->first('data_prazo', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('instancia') }}
        {{ Form::text('instancia', $processo->instancia, ['class' => 'form-control' . ($errors->has('instancia') ? ' is-invalid' : ''), 'placeholder' => 'Instancia']) }}
        {{ $errors->first('instancia', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('comarca') }}
        {{ Form::text('comarca', $processo->comarca, ['class' => 'form-control' . ($errors->has('comarca') ? ' is-invalid' : ''), 'placeholder' => 'Comarca']) }}
        {{ $errors->first('comarca', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('vara') }}
        {{ Form::text('vara', $processo->vara, ['class' => 'form-control' . ($errors->has('vara') ? ' is-invalid' : ''), 'placeholder' => 'Vara']) }}
        {{ $errors->first('vara', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('observacoes') }}
        {{ Form::text('observacoes', $processo->observacoes, ['class' => 'form-control' . ($errors->has('observacoes') ? ' is-invalid' : ''), 'placeholder' => 'Observacoes']) }}
        {{ $errors->first('observacoes', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('data_processoinicio') }}
        {{ Form::text('data_processoinicio', $processo->data_processoinicio, ['class' => 'form-control' . ($errors->has('data_processoinicio') ? ' is-invalid' : ''), 'placeholder' => 'Data Processoinicio']) }}
        {{ $errors->first('data_processoinicio', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('data_processofim') }}
        {{ Form::text('data_processofim', $processo->data_processofim, ['class' => 'form-control' . ($errors->has('data_processofim') ? ' is-invalid' : ''), 'placeholder' => 'Data Processofim']) }}
        {{ $errors->first('data_processofim', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('duracao_processo') }}
        {{ Form::text('duracao_processo', $processo->duracao_processo, ['class' => 'form-control' . ($errors->has('duracao_processo') ? ' is-invalid' : ''), 'placeholder' => 'Duracao Processo']) }}
        {{ $errors->first('duracao_processo', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('resultado_processo') }}
        {{ Form::text('resultado_processo', $processo->resultado_processo, ['class' => 'form-control' . ($errors->has('resultado_processo') ? ' is-invalid' : ''), 'placeholder' => 'Resultado Processo']) }}
        {{ $errors->first('resultado_processo', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('link_processo') }}
        {{ Form::text('link_processo', $processo->link_processo, ['class' => 'form-control' . ($errors->has('link_processo') ? ' is-invalid' : ''), 'placeholder' => 'Link Processo']) }}
        {{ $errors->first('link_processo', '<div class="invalid-feedback">:message</div>') }}
    </div> 

</div><div class="row">

    <div class="col-md-6 mb-3">  
        {{ Form::label('link_pastaprocesso') }}
        {{ Form::text('link_pastaprocesso', $processo->link_pastaprocesso, ['class' => 'form-control' . ($errors->has('link_pastaprocesso') ? ' is-invalid' : ''), 'placeholder' => 'Link Pastaprocesso']) }}
        {{ $errors->first('link_pastaprocesso', '<div class="invalid-feedback">:message</div>') }}
    </div> 







  <div class="col-md-4 mb-3">
  <div class="form-group">
    <label for="advogado">Advogado Principal:</label>
    {!! Form::select('id_advogado', $advogados, null, array('class' => 'form-control')) !!}
 
	</div>
  </div>


  




</div>

 