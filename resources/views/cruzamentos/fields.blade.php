<!-- Estabelecimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estabelecimento', 'Estabelecimento:') !!}
    {!! Form::text('estabelecimento', null, ['class' => 'form-control']) !!}
</div>

<!-- Uf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uf', 'Uf:') !!}
    {!! Form::text('uf', null, ['class' => 'form-control']) !!}
</div>

<!-- Escrituracao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('escrituracao', 'Escrituracao:') !!}
    {!! Form::text('escrituracao', null, ['class' => 'form-control']) !!}
</div>

<!-- Periodo Inicial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periodo_inicial', 'Periodo Inicial:') !!}
    {!! Form::text('periodo_inicial', null, ['class' => 'form-control','id'=>'periodo_inicial']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#periodo_inicial').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Periodo Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periodo_final', 'Periodo Final:') !!}
    {!! Form::text('periodo_final', null, ['class' => 'form-control','id'=>'periodo_final']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#periodo_final').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Cruzamentos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cruzamentos', 'Cruzamentos:') !!}
    {!! Form::text('cruzamentos', null, ['class' => 'form-control']) !!}
</div>

<!-- Alertas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alertas', 'Alertas:') !!}
    {!! Form::number('alertas', null, ['class' => 'form-control']) !!}
</div>

<!-- Erros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('erros', 'Erros:') !!}
    {!! Form::number('erros', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Download Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link_download', 'Link Download:') !!}
    {!! Form::text('link_download', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cruzamentos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
