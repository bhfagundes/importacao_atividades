<!-- Path Arquivo Field -->


<div class="form-group col-sm-6">
    {!! Form::label('path_arquivo', 'Path Arquivo:') !!}
    {!! Form::file('arquivo', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('envioNotaEnergia.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
