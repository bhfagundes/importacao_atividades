<div class="table-responsive-sm">
    <table class="table table-striped" id="envioNotaServicos-table">
        <thead>
            <tr>
        <th>Path Arquivo</th>
        <th>Data Envio</th>
        <th>Enviado</th>
        <th>Identificador Nota</th>
        <th>CNPJ</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($envioNotaServicos as $envioNotaServico)
            <tr>
                <td>{{ $envioNotaServico->path_arquivo }}</td>
            <td>{{ $envioNotaServico->created_at }}</td>
            <td>{{ $envioNotaServico->updated_at }}</td>
            <td>{{ $envioNotaServico->enviado }}</td>
            <td>{{ $envioNotaServico->identificador_nota }}</td>
                <td>
                    {!! Form::open(['route' => ['envioNotaServicos.destroy', $envioNotaServico->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('envioNotaServicos.show', [$envioNotaServico->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('envioNotaServicos.edit', [$envioNotaServico->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
