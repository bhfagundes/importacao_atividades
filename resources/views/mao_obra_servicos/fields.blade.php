<!-- Mao Obra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mao_obra', 'Mao Obra:') !!}
    {!! Form::text('mao_obra', null, ['class' => 'form-control']) !!}
</div>

<!-- Descrica Mao Obra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descrica_mao_obra', 'Descrica Mao Obra:') !!}
    {!! Form::text('descrica_mao_obra', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('maoObraServicos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
