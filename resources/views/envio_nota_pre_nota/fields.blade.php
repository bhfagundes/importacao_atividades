<!-- Path Arquivo Field -->
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('id_tipo_atividade', 'SVC:') !!}
        {!! Form::text('svc', null, ['class' => 'form-control']) !!}
    </div>

</div>
<div class="form-group col-sm-6">
    {!! Form::label('path_arquivo', 'Xml:') !!}
    {!! Form::file('xml', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('path_arquivo', 'Pdf:') !!}
    {!! Form::file('pdf', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('envioNotaPreNota.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
