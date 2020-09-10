<!-- Path Arquivo Field -->
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('id_tipo_atividade', 'Estabelecimento:') !!}
        {!! Form::text('estabelecimento', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('id_tipo_atividade', 'Identificador da Nota:') !!}
        {!! Form::text('identifiacador_nota', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group col-sm-6">
    {!! Form::label('path_arquivo', 'Path Arquivo:') !!}
    {!! Form::file('arquivo', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('envioNotaServicos.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
