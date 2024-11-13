<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="descricao" class="form-label">{{ __('Descricao') }}</label>
            <input type="text" name="descricao" class="form-control @error('descricao') is-invalid @enderror" value="{{ old('descricao', $audiencia?->descricao) }}" id="descricao" placeholder="Descricao">
            {!! $errors->first('descricao', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="data" class="form-label">{{ __('Data') }}</label>
            <input type="text" name="data" class="form-control @error('data') is-invalid @enderror" value="{{ old('data', $audiencia?->data) }}" id="data" placeholder="Data">
            {!! $errors->first('data', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hora" class="form-label">{{ __('Hora') }}</label>
            <input type="text" name="hora" class="form-control @error('hora') is-invalid @enderror" value="{{ old('hora', $audiencia?->hora) }}" id="hora" placeholder="Hora">
            {!! $errors->first('hora', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_processo" class="form-label">{{ __('Id Processo') }}</label>
            <input type="text" name="id_processo" class="form-control @error('id_processo') is-invalid @enderror" value="{{ old('id_processo', $audiencia?->id_processo) }}" id="id_processo" placeholder="Id Processo">
            {!! $errors->first('id_processo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>