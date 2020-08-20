<!-- Id Atividade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_atividade', 'Id Atividade:') !!}
    {!! Form::number('id_atividade', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Evidencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_evidencia', 'Id Evidencia:') !!}
    {!! Form::number('id_evidencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Mandatoria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mandatoria', 'Mandatoria:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('mandatoria', 0) !!}
        {!! Form::checkbox('mandatoria', '1', null) !!}
    </label>
</div>


<!-- Conclusao Auto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conclusao_auto', 'Conclusao Auto:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('conclusao_auto', 0) !!}
        {!! Form::checkbox('conclusao_auto', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('atividadeEvidencias.index') }}" class="btn btn-secondary">Cancel</a>
</div>
