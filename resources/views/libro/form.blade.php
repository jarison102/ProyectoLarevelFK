<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('autorid', 'Autor') }}
            {{ Form::select('autorid', $autores, null, ['class' => 'form-control' . ($errors->has('autorid') ? ' is-invalid' : '')]) }}
            {!! $errors->first('autorid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Titulo') }}
            {{ Form::text('Titulo', $libro->Titulo, ['class' => 'form-control' . ($errors->has('Titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('Titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>