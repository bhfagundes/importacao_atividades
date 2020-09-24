<!-- Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj', 'Cnpj:') !!}
    {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
</div>

<!-- Inscricao Estadual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inscricao_estadual', 'Inscricao Estadual:') !!}
    {!! Form::text('inscricao_estadual', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Ibge Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_ibge', 'Codigo Ibge:') !!}
    {!! Form::text('codigo_ibge', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Abertura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_abertura', 'Data Abertura:') !!}
    {!! Form::text('data_abertura', null, ['class' => 'form-control','id'=>'data_abertura']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#data_abertura').datetimepicker({
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


<!-- Situacao Cadastral Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situacao_cadastral', 'Situacao Cadastral:') !!}
    {!! Form::text('situacao_cadastral', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Situacao Cadastral Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_situacao_cadastral', 'Codigo Situacao Cadastral:') !!}
    {!! Form::number('codigo_situacao_cadastral', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Situacao Cadastral Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_situacao_cadastral', 'Data Situacao Cadastral:') !!}
    {!! Form::text('data_situacao_cadastral', null, ['class' => 'form-control','id'=>'data_situacao_cadastral']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#data_situacao_cadastral').datetimepicker({
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


<!-- Motivo Situacao Cadastral Field -->
<div class="form-group col-sm-6">
    {!! Form::label('motivo_situacao_cadastral', 'Motivo Situacao Cadastral:') !!}
    {!! Form::text('motivo_situacao_cadastral', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Consulta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_consulta', 'Numero Consulta:') !!}
    {!! Form::number('numero_consulta', null, ['class' => 'form-control']) !!}
</div>

<!-- Consulta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('consulta', 'Consulta:') !!}
    {!! Form::text('consulta', null, ['class' => 'form-control','id'=>'consulta']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#consulta').datetimepicker({
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


<!-- Numero Inscricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_inscricao', 'Numero Inscricao:') !!}
    {!! Form::text('numero_inscricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_empresa', 'Tipo Empresa:') !!}
    {!! Form::text('tipo_empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Empresarial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_empresarial', 'Nome Empresarial:') !!}
    {!! Form::text('nome_empresarial', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Estabelecimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo_estabelecimento', 'Titulo Estabelecimento:') !!}
    {!! Form::text('titulo_estabelecimento', null, ['class' => 'form-control']) !!}
</div>

<!-- Porte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('porte', 'Porte:') !!}
    {!! Form::text('porte', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Descricao Atividades Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_descricao_atividades', 'Codigo Descricao Atividades:') !!}
    {!! Form::text('codigo_descricao_atividades', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Descricao Atividade Secundaria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_descricao_atividade_secundaria', 'Codigo Descricao Atividade Secundaria:') !!}
    {!! Form::text('codigo_descricao_atividade_secundaria', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Descricao Nat Juridica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_descricao_nat_juridica', 'Codigo Descricao Nat Juridica:') !!}
    {!! Form::text('codigo_descricao_nat_juridica', null, ['class' => 'form-control']) !!}
</div>

<!-- Logradouro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logradouro', 'Logradouro:') !!}
    {!! Form::text('logradouro', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::number('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Complemento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('complemento', 'Complemento:') !!}
    {!! Form::text('complemento', null, ['class' => 'form-control']) !!}
</div>

<!-- Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cep', 'Cep:') !!}
    {!! Form::text('cep', null, ['class' => 'form-control']) !!}
</div>

<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', 'Bairro:') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>

<!-- Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio', 'Municipio:') !!}
    {!! Form::text('municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Uf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uf', 'Uf:') !!}
    {!! Form::text('uf', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Ente Federativo Responsavel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ente_federativo_responsavel', 'Ente Federativo Responsavel:') !!}
    {!! Form::text('ente_federativo_responsavel', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Situacao Especial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situacao_especial', 'Situacao Especial:') !!}
    {!! Form::text('situacao_especial', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Situacao Especial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_situacao_especial', 'Data Situacao Especial:') !!}
    {!! Form::text('data_situacao_especial', null, ['class' => 'form-control','id'=>'data_situacao_especial']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#data_situacao_especial').datetimepicker({
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


<!-- Cnpj Qsa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj_qsa', 'Cnpj Qsa:') !!}
    {!! Form::text('cnpj_qsa', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Empresarial Qsa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_empresarial_qsa', 'Nome Empresarial Qsa:') !!}
    {!! Form::text('nome_empresarial_qsa', null, ['class' => 'form-control']) !!}
</div>

<!-- Capital Social Qsa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capital_social_qsa', 'Capital Social Qsa:') !!}
    {!! Form::text('capital_social_qsa', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Empresarial Qualificacao Qsa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_empresarial_qualificacao_qsa', 'Nome Empresarial Qualificacao Qsa:') !!}
    {!! Form::text('nome_empresarial_qualificacao_qsa', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Transacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_transacao', 'Status Transacao:') !!}
    {!! Form::number('status_transacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Ind Bloqueio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ind_bloqueio', 'Ind Bloqueio:') !!}
    {!! Form::number('ind_bloqueio', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Forn Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_forn_cliente', 'Tipo Forn Cliente:') !!}
    {!! Form::number('tipo_forn_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Inscricao Municipal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inscricao_municipal', 'Inscricao Municipal:') !!}
    {!! Form::text('inscricao_municipal', null, ['class' => 'form-control']) !!}
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


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('apiReceitaFederalCnpjs.index') }}" class="btn btn-secondary">Cancel</a>
</div>
