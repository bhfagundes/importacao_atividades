<!-- Path Arquivo Field -->
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('id_tipo_atividade', 'Código de Serviço interno:') !!}
        {!! Form::text('cod_servico', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('id_tipo_atividade', 'Código Município:') !!}
        {!! Form::text('cod_municipio', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::label('id_tipo_atividade', 'Descrição Serviço:') !!}
        {!! Form::textarea('dsc_servico', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('id_tipo_atividade', 'Identificador RFB:') !!}
        {!! Form::text('idt_servico_rfb', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('id_tipo_atividade', 'Aliquota IR:') !!}
        {!! Form::text('alq_ir', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('id_tipo_atividade', 'Aliquota INSS:') !!}
        {!! Form::text('alq_inss', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('id_tipo_atividade', 'Aliquota Confins:') !!}
        {!! Form::text('alq_cofins', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('id_tipo_atividade', 'Aliquota PIS:') !!}
        {!! Form::text('alq_pis', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('id_tipo_atividade', 'Aliquota CSLL:') !!}
        {!! Form::text('alq_csll', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('id_tipo_atividade', 'Aliquota CPRB:') !!}
        {!! Form::text('alq_cprb', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('id_tipo_atividade', 'Aliquota ISS:') !!}
        {!! Form::text('alq_iss', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('id_tipo_atividade', 'Percentual Redução Base inss:') !!}
        {!! Form::text('perc_reduc_base_inss', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('id_tipo_atividade', 'Código de serviço de município:') !!}
        {!! Form::text('cod_serv_municipio', null, ['class' => 'form-control']) !!}
    </div>
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('enquadramentoServico.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
