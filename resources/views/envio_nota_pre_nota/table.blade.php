<div class="table-responsive-sm">
    <table class="table table-striped" id="envioNotaServicos-table">
        <thead>
        <tr>
            <th>Estabelecimento</th>
            <th>Identificador Nota</th>
            <th>Path do Arquivo</th>
            <th>Data de Envio</th>
        </tr>
        </thead>
        <tbody>
        @foreach($envioNotaServicos as $envioNotaServico)
            <tr>
            <td>{{ $envioNotaServico->path_arquivo }}</td>
            <td>{{ $envioNotaServico->identificador_nota }}</td>
            <td>{{ $envioNotaServico->estabelecimento}}</td>
            <td>{{ $envioNotaServico->created_at}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
