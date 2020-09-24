<div class="form-group col-sm-6">
    {!! Form::label('id_tipo_atividade', 'Planilha de materiais:') !!}
    {!! Form::file('excel', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('materials.index') }}" class="btn btn-secondary">Cancel</a>
</div>
