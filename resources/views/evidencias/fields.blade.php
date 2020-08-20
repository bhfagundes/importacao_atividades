<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::number('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Evidencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('evidencia', 'Evidencia:') !!}
    {!! Form::text('evidencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('evidencias.index') }}" class="btn btn-secondary">Cancel</a>
</div>
