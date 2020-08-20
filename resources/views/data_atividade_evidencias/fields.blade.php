<!-- Id Data Atividade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_data_atividade', 'Id Data Atividade:') !!}
    {!! Form::number('id_data_atividade', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Evidencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_evidencia', 'Id Evidencia:') !!}
    {!! Form::number('id_evidencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Anexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url_anexo', 'Url Anexo:') !!}
    {!! Form::text('url_anexo', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::number('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comentario', 'Comentario:') !!}
    {!! Form::text('comentario', null, ['class' => 'form-control']) !!}
</div>

<!-- Integracao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('integracao', 'Integracao:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('integracao', 0) !!}
        {!! Form::checkbox('integracao', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('dataAtividadeEvidencias.index') }}" class="btn btn-secondary">Cancel</a>
</div>
