<!-- Classe Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classe', 'Classe:') !!}
    {!! Form::text('classe', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('classeServicos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
