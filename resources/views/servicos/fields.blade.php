<!-- Id Status Servico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_status_servico', 'Id Status Servico:') !!}
    {!! Form::number('id_status_servico', null, ['class' => 'form-control']) !!}
</div>

<!-- Ativo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ativo', 'Ativo:') !!}
    {!! Form::text('ativo', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Mao Obra Servico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_mao_obra_servico', 'Id Mao Obra Servico:') !!}
    {!! Form::number('id_mao_obra_servico', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Classe Servico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_classe_servico', 'Id Classe Servico:') !!}
    {!! Form::number('id_classe_servico', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Subclasse Servico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_subclasse_servico', 'Id Subclasse Servico:') !!}
    {!! Form::number('id_subclasse_servico', null, ['class' => 'form-control']) !!}
</div>

<!-- Flag Credito Distribuidora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('flag_credito_distribuidora', 'Flag Credito Distribuidora:') !!}
    {!! Form::text('flag_credito_distribuidora', null, ['class' => 'form-control']) !!}
</div>

<!-- Flag Credito Prestadora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('flag_credito_prestadora', 'Flag Credito Prestadora:') !!}
    {!! Form::text('flag_credito_prestadora', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Lc 116 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_lc_116', 'Id Lc 116:') !!}
    {!! Form::number('id_lc_116', null, ['class' => 'form-control']) !!}
</div>

<!-- Flag Entrada Saida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('flag_entrada_saida', 'Flag Entrada Saida:') !!}
    {!! Form::text('flag_entrada_saida', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade', 'Id Cidade:') !!}
    {!! Form::number('id_cidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Lc 116 Systax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_lc_116_systax', 'Id Lc 116 Systax:') !!}
    {!! Form::number('id_lc_116_systax', null, ['class' => 'form-control']) !!}
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! Form::text('created_at', null, ['class' => 'form-control','id'=>'created_at']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#created_at').datetimepicker({
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


<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! Form::text('updated_at', null, ['class' => 'form-control','id'=>'updated_at']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#updated_at').datetimepicker({
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


<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    {!! Form::number('id_usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Duvida Tecnica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duvida_tecnica', 'Duvida Tecnica:') !!}
    {!! Form::text('duvida_tecnica', null, ['class' => 'form-control']) !!}
</div>

<!-- Duvida Tecncia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duvida_tecncia', 'Duvida Tecncia:') !!}
    {!! Form::text('duvida_tecncia', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Lc 116 Definitivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_lc_116_definitivo', 'Id Lc 116 Definitivo:') !!}
    {!! Form::number('id_lc_116_definitivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Retorno Duvida Tecnica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('retorno_duvida_tecnica', 'Retorno Duvida Tecnica:') !!}
    {!! Form::text('retorno_duvida_tecnica', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Servico Rfb Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_servico_rfb', 'Id Servico Rfb:') !!}
    {!! Form::number('id_servico_rfb', null, ['class' => 'form-control']) !!}
</div>

<!-- Aliquota Ir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aliquota_ir', 'Aliquota Ir:') !!}
    {!! Form::text('aliquota_ir', null, ['class' => 'form-control']) !!}
</div>

<!-- Aliquota Inss Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aliquota_inss', 'Aliquota Inss:') !!}
    {!! Form::text('aliquota_inss', null, ['class' => 'form-control']) !!}
</div>

<!-- Aliquota Pis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aliquota_pis', 'Aliquota Pis:') !!}
    {!! Form::text('aliquota_pis', null, ['class' => 'form-control']) !!}
</div>

<!-- Aliquota Cofins Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aliquota_cofins', 'Aliquota Cofins:') !!}
    {!! Form::text('aliquota_cofins', null, ['class' => 'form-control']) !!}
</div>

<!-- Aliquota Csll Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aliquota_csll', 'Aliquota Csll:') !!}
    {!! Form::text('aliquota_csll', null, ['class' => 'form-control']) !!}
</div>

<!-- Aliquota Cprb Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aliquota_cprb', 'Aliquota Cprb:') !!}
    {!! Form::text('aliquota_cprb', null, ['class' => 'form-control']) !!}
</div>

<!-- Percentual Reducao Inss Field -->
<div class="form-group col-sm-6">
    {!! Form::label('percentual_reducao_inss', 'Percentual Reducao Inss:') !!}
    {!! Form::text('percentual_reducao_inss', null, ['class' => 'form-control']) !!}
</div>

<!-- Indicador Pis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('indicador_pis', 'Indicador Pis:') !!}
    {!! Form::text('indicador_pis', null, ['class' => 'form-control']) !!}
</div>

<!-- Indicador Cofins Field -->
<div class="form-group col-sm-6">
    {!! Form::label('indicador_cofins', 'Indicador Cofins:') !!}
    {!! Form::text('indicador_cofins', null, ['class' => 'form-control']) !!}
</div>

<!-- Indicador Iss Field -->
<div class="form-group col-sm-6">
    {!! Form::label('indicador_iss', 'Indicador Iss:') !!}
    {!! Form::text('indicador_iss', null, ['class' => 'form-control']) !!}
</div>

<!-- Alquota Iss Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alquota_iss', 'Alquota Iss:') !!}
    {!! Form::text('alquota_iss', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Servico Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_servico_municipio', 'Codigo Servico Municipio:') !!}
    {!! Form::text('codigo_servico_municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('servicos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
