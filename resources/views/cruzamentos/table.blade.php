<div class="table-responsive-sm">
    <table class="table table-striped" id="cruzamentos-table">
        <thead>
            <tr>
                <th>Estabelecimento</th>
        <th>Uf</th>
        <th>Escrituracao</th>
        <th>Periodo Inicial</th>
        <th>Periodo Final</th>
        <th>Cruzamentos</th>
        <th>Alertas</th>
        <th>Erros</th>
        <th>Status</th>
        <th>Link Download</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cruzamentos as $cruzamentos)
            <tr>
                <td>{{ $cruzamentos->estabelecimento }}</td>
            <td>{{ $cruzamentos->uf }}</td>
            <td>{{ $cruzamentos->escrituracao }}</td>
            <td>{{ $cruzamentos->periodo_inicial }}</td>
            <td>{{ $cruzamentos->periodo_final }}</td>
            <td>{{ $cruzamentos->cruzamentos }}</td>
            <td>{{ $cruzamentos->alertas }}</td>
            <td>{{ $cruzamentos->erros }}</td>
            <td>{{ $cruzamentos->status }}</td>
            <td>{{ $cruzamentos->link_download }}</td>
                <td>
                    {!! Form::open(['route' => ['cruzamentos.destroy', $cruzamentos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cruzamentos.show', [$cruzamentos->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('cruzamentos.edit', [$cruzamentos->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>