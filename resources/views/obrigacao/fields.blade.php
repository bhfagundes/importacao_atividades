<!-- Id Tipo Atividade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_tipo_atividade', 'Planilha de obrigacoes:') !!}
    {!! Form::file('excel', null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('obrigacao.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
