<div class="table-responsive-sm">
    <table class="table table-striped" id="envioNotaServicos-table">
        <thead>
        <tr>
        <th>Path Arquivo</th>
        <th>Identificador Nota</th>
        <th>Estabelecimento</th>

            </tr>
        </thead>
        <tbody>
        @foreach($envioNotaServicos as $envioNotaServico)
            <tr>
            <td>{{ $envioNotaServico->path_arquivo }}</td>
            <td>{{ $envioNotaServico->identificador_nota }}</td>
            <td>{{ $envioNotaServico->estabelecimento}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
