<!-- Path Arquivo Field -->
<div class="form-group">
    {!! Form::label('path_arquivo', 'Path Arquivo:') !!}
    <p>{{ $envioNotaServico->path_arquivo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $envioNotaServico->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $envioNotaServico->updated_at }}</p>
</div>

<!-- Enviado Field -->
<div class="form-group">
    {!! Form::label('enviado', 'Enviado:') !!}
    <p>{{ $envioNotaServico->enviado }}</p>
</div>

<!-- Identificador Nota Field -->
<div class="form-group">
    {!! Form::label('identificador_nota', 'Identificador Nota:') !!}
    <p>{{ $envioNotaServico->identificador_nota }}</p>
</div>

