<!-- Id Servico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_servico', 'Id Servico:') !!}
    {!! Form::number('id_servico', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnae Origem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnae_origem', 'Cnae Origem:') !!}
    {!! Form::text('cnae_origem', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnae Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnae_destino', 'Cnae Destino:') !!}
    {!! Form::text('cnae_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Cidade Origem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade_origem', 'Id Cidade Origem:') !!}
    {!! Form::number('id_cidade_origem', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Estado Origem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_estado_origem', 'Id Estado Origem:') !!}
    {!! Form::number('id_estado_origem', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Cidade Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade_destino', 'Id Cidade Destino:') !!}
    {!! Form::number('id_cidade_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Estado Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_estado_destino', 'Id Estado Destino:') !!}
    {!! Form::number('id_estado_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Cidade Fato Gerador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cidade_fato_gerador', 'Id Cidade Fato Gerador:') !!}
    {!! Form::number('id_cidade_fato_gerador', null, ['class' => 'form-control']) !!}
</div>

<!-- Generico 1 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('generico_1', 'Generico 1:') !!}
    {!! Form::textarea('generico_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Chave Banco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('chave_banco', 'Chave Banco:') !!}
    {!! Form::text('chave_banco', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Item Nota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_item_nota', 'Id Item Nota:') !!}
    {!! Form::number('id_item_nota', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Servico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_servico', 'Valor Servico:') !!}
    {!! Form::text('valor_servico', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Desconto Incondicional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_desconto_incondicional', 'Valor Desconto Incondicional:') !!}
    {!! Form::text('valor_desconto_incondicional', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Desconto Condicional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_desconto_condicional', 'Valor Desconto Condicional:') !!}
    {!! Form::text('valor_desconto_condicional', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Deducoes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_deducoes', 'Valor Deducoes:') !!}
    {!! Form::text('valor_deducoes', null, ['class' => 'form-control']) !!}
</div>

<!-- Generico 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('generico_2', 'Generico 2:') !!}
    {!! Form::text('generico_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Abatido Inss Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_abatido_inss', 'Valor Abatido Inss:') !!}
    {!! Form::text('valor_abatido_inss', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Nota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_nota', 'Tipo Nota:') !!}
    {!! Form::number('tipo_nota', null, ['class' => 'form-control']) !!}
</div>

<!--  Timestamp Recepcao Sigvc Field -->
<div class="form-group col-sm-6">
    {!! Form::label(' timestamp_recepcao_sigvc', ' Timestamp Recepcao Sigvc:') !!}
    {!! Form::text(' timestamp_recepcao_sigvc', null, ['class' => 'form-control','id'=>' timestamp_recepcao_sigvc']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('# timestamp_recepcao_sigvc').datetimepicker({
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


<!-- Timestamp Devolucao Systax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('timestamp_devolucao_systax', 'Timestamp Devolucao Systax:') !!}
    {!! Form::text('timestamp_devolucao_systax', null, ['class' => 'form-control','id'=>'timestamp_devolucao_systax']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#timestamp_devolucao_systax').datetimepicker({
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


<!-- Svc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('svc', 'Svc:') !!}
    {!! Form::number('svc', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Perfil Remetente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_perfil_remetente', 'Id Perfil Remetente:') !!}
    {!! Form::number('id_perfil_remetente', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Perfil Destinatario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_perfil_destinatario', 'Id Perfil Destinatario:') !!}
    {!! Form::number('id_perfil_destinatario', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Filial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_filial', 'Id Filial:') !!}
    {!! Form::number('id_filial', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Fornecedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_fornecedor', 'Id Fornecedor:') !!}
    {!! Form::number('id_fornecedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Natureza Operacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('natureza_operacao', 'Natureza Operacao:') !!}
    {!! Form::number('natureza_operacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contratacaoServicos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
