<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('SobreA') }}
            {{ Form::text('SobreA', $documentacion->SobreA, ['class' => 'form-control' . ($errors->has('SobreA') ? ' is-invalid' : ''), 'placeholder' => 'Sobrea']) }}
            {!! $errors->first('SobreA', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sobreB') }}
            {{ Form::text('sobreB', $documentacion->sobreB, ['class' => 'form-control' . ($errors->has('sobreB') ? ' is-invalid' : ''), 'placeholder' => 'Sobreb']) }}
            {!! $errors->first('sobreB', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>