<div class="table-responsive-sm">
    <table class="table table-striped" id="maoObraServicos-table">
        <thead>
            <tr>
                <th>Mao Obra</th>
        <th>Descrica Mao Obra</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($maoObraServicos as $maoObraServico)
            <tr>
                <td>{{ $maoObraServico->mao_obra }}</td>
            <td>{{ $maoObraServico->descrica_mao_obra }}</td>
                <td>
                    {!! Form::open(['route' => ['maoObraServicos.destroy', $maoObraServico->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('maoObraServicos.show', [$maoObraServico->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('maoObraServicos.edit', [$maoObraServico->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>