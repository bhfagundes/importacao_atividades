<!-- Subclasse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subclasse', 'Subclasse:') !!}
    {!! Form::text('subclasse', null, ['class' => 'form-control']) !!}
</div>

<!-- Descrica Subclasse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descrica_subclasse', 'Descrica Subclasse:') !!}
    {!! Form::text('descrica_subclasse', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('sublasseServicos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
