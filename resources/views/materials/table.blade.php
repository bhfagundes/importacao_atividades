<div class="table-responsive-sm">
    <table class="table table-striped" id="materials-table">
        <thead>
            <tr>
                <th>Codigo Uar Tuc</th>
        <th>Ativo Eletrico</th>
        <th>Codigo Patrimonial</th>
        <th>Percentual Divergencia</th>
        <th>Indicador Credito Pis Cofins Distribuidora</th>
        <th>Indicador Credito Pis Cofins Prestadora</th>
        <th>Indicador Credito Icms</th>
        <th>Codigo Produto</th>
        <th>Origem Produto</th>
        <th>Ncm</th>
        <th>Tipi</th>
        <th>Cean</th>
        <th>Descricao Tecnica</th>
        <th>Timestamp Recepcao Sisup</th>
        <th>Timestamp Devolucao Systax</th>
        <th>Data Recebimento</th>
        <th>Desc Ncm Definitiva</th>
        <th>Desc Ncm Original</th>
        <th>Desc Ncm Sugerida</th>
        <th>Duvida Tecnica</th>
        <th>Ean Saneada</th>
        <th>Ex Tipi Sugerida</th>
        <th>Ex Tipi Definitiva</th>
        <th>Fundamentacao</th>
        <th>Ncm Definitiva</th>
        <th>Ncm Sugerida</th>
        <th>Motivo Reprovacao Ncm</th>
        <th>Id Status Material</th>
        <th>Data Saneamento</th>
        <th>Data Atualizacao</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($materials as $material)
            <tr>
                <td>{{ $material->codigo_uar_tuc }}</td>
            <td>{{ $material->ativo_eletrico }}</td>
            <td>{{ $material->codigo_patrimonial }}</td>
            <td>{{ $material->percentual_divergencia }}</td>
            <td>{{ $material->indicador_credito_pis_cofins_distribuidora }}</td>
            <td>{{ $material->indicador_credito_pis_cofins_prestadora }}</td>
            <td>{{ $material->indicador_credito_icms }}</td>
            <td>{{ $material->codigo_produto }}</td>
            <td>{{ $material->origem_produto }}</td>
            <td>{{ $material->ncm }}</td>
            <td>{{ $material->tipi }}</td>
            <td>{{ $material->cean }}</td>
            <td>{{ $material->descricao_tecnica }}</td>
            <td>{{ $material->timestamp_recepcao_sisup }}</td>
            <td>{{ $material->timestamp_devolucao_systax }}</td>
            <td>{{ $material->data_recebimento }}</td>
            <td>{{ $material->desc_ncm_definitiva }}</td>
            <td>{{ $material->desc_ncm_original }}</td>
            <td>{{ $material->desc_ncm_sugerida }}</td>
            <td>{{ $material->duvida_tecnica }}</td>
            <td>{{ $material->ean_saneada }}</td>
            <td>{{ $material->ex_tipi_sugerida }}</td>
            <td>{{ $material->ex_tipi_definitiva }}</td>
            <td>{{ $material->fundamentacao }}</td>
            <td>{{ $material->ncm_definitiva }}</td>
            <td>{{ $material->ncm_sugerida }}</td>
            <td>{{ $material->motivo_reprovacao_ncm }}</td>
            <td>{{ $material->id_status_material }}</td>
            <td>{{ $material->data_saneamento }}</td>
            <td>{{ $material->data_atualizacao }}</td>
                <td>
                    {!! Form::open(['route' => ['materials.destroy', $material->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('materials.show', [$material->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('materials.edit', [$material->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>